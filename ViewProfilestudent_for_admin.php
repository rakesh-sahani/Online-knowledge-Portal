<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td a {
	color: #FFF;
}
body {
	background-color: #BBB;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="80%" border="1" align="center">
    <tr>
      <td bgcolor="#0152AD"><img src="img/banner-image4.jpg" width="1070" height="259" /></td>
    </tr>
    <tr>
      <td bgcolor="#800000"><a href="admin.php">Back</a></td>
    </tr>
    <tr>
      <td width="798"><p><a href="studentpanel.php"></a></p>
        <table rules="none" width="1000" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td colspan="10" align="center"><h1>Student Details </h1></td>
          </tr>
            <tr>
             <td width="89" height="37">Student Id</td>
          <td width="59">Email</td>
          <td width="69">Password</td>
          <td width="55">Mobile</td>
          <td width="65">Course</td>
          <td width="87">Branch</td>
          <td width="35">Semester</td>
          <td width="164">Date Of Addmission</td>
          <td width="109">Full Address</td>
		  <td width="91" height="37">Date Of Birth</td>
        
        </tr>
            <tr>
    <?php 
	 
	 
       include 'conn.php';
	 session_start(); 
	  $em=  $_SESSION["em"] ;
	  
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
$i=0;
while($row = $result->fetch_assoc())
 {
     

?>
  
         
              <td height="37"><?php echo $row["studentregid"];?></td>
              <td><?php echo $row["emailid"];?></td>
              <td><?php echo $row["password"];?></td>
              <td><?php echo $row["mobile"];?></td>
              <td><?php echo $row["cource"];?></td>
              <td><?php echo $row["branch"];?></td>
              <td><?php echo $row["semture"];?></td>
              <td><?php echo $row["dateofaddmission"];?></td>
              <td><?php echo $row["address"];?></td>
              <td><?php echo $row["dateofbirth"];?></td>
            </tr>
            <?php 
		 }
		 ?>
        </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td bgcolor="#800000">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>