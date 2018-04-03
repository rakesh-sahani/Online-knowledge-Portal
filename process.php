
<?php

 include 'conn.php';
session_start();
 
$a=$_POST['t1'];
$b=$_POST['t2'];

 $ch=$_POST['select'];
 $_SESSION['em'] = $a;
 
 try 
 {
 if ($ch=='Student')
 {
 
$sql = "SELECT * FROM student WHERE studentregid ='". $a. "'  and  password ='". $b. "'";
$result = $conn->query($sql);
$i=0;
while($row = $result->fetch_assoc())
 {

       $i++;
}

	
	if($i>0)
	{
		
		
		header('Location: studentpanel.php');
	}
	else
	{
		
		header('Location: error.php');
	}
	
	
 }
 else if($ch=='Teacher')
 {
$sql1 = "SELECT * FROM techer WHERE teacherregid ='". $a. "'  and  password ='". $b. "'";
$result1 = $conn->query($sql1); 
$i1=0;
while($row1 = $result1->fetch_assoc())
 {
	
       $i1++;
	$sub=$row1["subject"];
	   
}

$_SESSION["sub"] = $sub;

	if($i1>0)
	{
		header('Location: teacherpanel.php');
	}
	else
	{
		header('Location: error.php');
	}

 }
  else if($ch=='Admin')
 {
	 $sql2 = "SELECT * FROM admin WHERE emailid ='". $a. "'  and  password ='". $b. "'";
$result2 = $conn->query($sql2); 

$i2=0;
while($row = $result2->fetch_assoc())
 {
       $i2++;
}
	
	if($i2>0)
	{
		header('Location: admin.php');
	}

 }
 }
catch(Exception $e) 
{
  echo 'Message: ' .$e->getMessage();
}

$conn->close();



?>