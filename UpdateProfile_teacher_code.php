
<?php

 include 'conn.php';

 
$a=$_POST['t1'];
 $b=$_POST['t2'];
 $c=$_POST['t3'];
 $d=$_POST['t4'];
 $e=$_POST['t5'];
 $f=$_POST['t6'];
 $g=$_POST['t7'];
 $h=$_POST['t8'];
  $i=$_POST['t9'];
 $j=$_POST['t10'];
 
$sql = "Update  techer set emailid='$b' , password='$c' , mobile='$d' , basicsalary='$e' , branch='$f' , subject='$g' , address='$i'  where teacherregid='$a'";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: teacherpanel.php');

?>