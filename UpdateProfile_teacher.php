<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url();
	color: #000;
	background-color: #FFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="UpdateProfile_teacher_code.php">
  <table width="80%" border="1" align="center">
    <tr>
      <td bgcolor="#0152AD"><img src="img/elearning-online-content-banner.jpg" width="1000" height="250" /></td>
    </tr>
    <tr>
      <td bgcolor="#0152AD">&nbsp;</td>
    </tr>
    <tr>
      <td width="798"><p><a href="studentpanel.php"></a></p>
        <table rules="none" width="593" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td colspan="2" align="center"><h1>Teacher Details </h1></td>
          </tr>
            <tr>
    <?php    
       include 'conn.php';
	  session_start(); 
	  $em=  $_SESSION["em"] ;
	   
$sql = "SELECT * FROM techer WHERE teacherregid ='". $em. "'";
$result = $conn->query($sql);
$i=0;
while($row = $result->fetch_assoc())
 {
     

?>
  
          <td width="228" height="37">Teacher Id</td>
		  <td width="324" height="37"><input name="t1" type="text" id="t1"  value="<?php echo $row["teacherregid"];?>" size="44" /></td>
        
        </tr>
            <tr>
              <td height="37">Email</td>
              <td>
              <input name="t2" type="text" id="t2" value="<?php echo $row["emailid"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Password</td>
              <td>
              <input name="t3" type="text" id="t3" value="<?php echo $row["password"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Mobile</td>
              <td>
              <input name="t4" type="text" id="t4" value="<?php echo $row["mobile"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Salary</td>
              <td>
              <input name="t5" type="text" id="t5" value="<?php echo $row["basicsalary"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Branch</td>
              <td>
              <input name="t6" type="text" id="t6"  value="<?php echo $row["branch"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Subject</td>
              <td>
              <input name="t7" type="text" id="t7" value="<?php echo $row["subject"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Date Of Joining</td>
              <td>
              <input name="t8" type="text" id="t8" value="<?php echo $row["dateofjoining"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">Full Address</td>
              <td><textarea name="t9" cols="55" rows="12" id="t9"><?php echo $row["address"];?></textarea></td>
            </tr>
            <tr>
              <td height="37">Date Of Birth</td>
              <td>
              <input name="t10" type="text" id="t10" value="<?php echo $row["dateofbirth"];?>" size="44" /></td>
            </tr>
            <tr>
              <td height="37">&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Submit" /></td>
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
      <td bgcolor="#0152AD">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>