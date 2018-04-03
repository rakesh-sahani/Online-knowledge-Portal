
<?php

 include 'conn.php';

 
$a=$_POST['t1'];

 
$sql = "DELETE FROM student WHERE studentregid ='".$a."'";

if ($conn->query($sql) === TRUE) 
{
    echo "Record Removed";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//header('Location: admin.php');

?>