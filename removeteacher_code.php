
<?php

 include 'conn.php';

 
$a=$_POST['t1'];

 
$sql = "DELETE FROM techer WHERE teacherregid=$a";

if ($conn->query($sql) === TRUE) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: admin.php');

?>