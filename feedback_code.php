
<?php

 include 'conn.php';

 session_start();
 
$a=$_POST['t1'];
 $b=$_POST['t2'];


 
$sql = "INSERT INTO feedback VALUES ( '$a',  '$b')";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$a="your Feedback has been successfully submitted";
$_SESSION["em"] = $a;

header('Location: feedback.php');

?>