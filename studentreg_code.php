
<?php

 include 'conn.php';

 
$a=$_POST['text1'];
 $b=$_POST['text2'];
 $c=$_POST['text3'];
 $d=$_POST['text4'];
 $e=$_POST['text5'];
 $f=$_POST['text6'];
 $g=$_POST['text7'];
 $h=$_POST['text8'];
  $i=$_POST['text9'];
 $j=$_POST['text10'];
 
$sql = "INSERT INTO student VALUES ( '$a',  '$b',  '$c', '$d', '$e',  '$f',  '$g', '$h', '$i',  '$j')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: home.php');

?>