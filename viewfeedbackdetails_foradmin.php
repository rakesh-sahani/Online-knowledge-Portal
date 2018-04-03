<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #FFFFFF;
	color: #FFF;
}
#form1 table tr td {
	color: #000;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table  rules="none"width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#FFF"><img src="img/elearning-online-content-banner.jpg" width="1000" height="250" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFF"><a href="admin.php">Back</a></td>
    </tr>
    <tr>
      <td width="798"><p><a href="studentpanel.php"></a></p>
        <p>&nbsp;</p>
        <table rules="none" width="593" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td colspan="2" align="center"><h1>Fedback Details </h1></td>
          </tr>
            <tr>
              <td width="228" height="37" align="center">Teacher (By Subject)</td>
		  <td width="324" height="37" align="center">Message Details</td>
        
        </tr>
            <tr>
    <?php 
	 
	 
       include 'conn.php';
	   
	 session_start(); 

$_SESSION["sub"]="Feedback";

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
$i=0;
while($row = $result->fetch_assoc())
 {
     

?>
  
        
              <td height="37" align="center"><?php echo $row["Subject"];?></td>
              <td align="center"><?php echo $row["Suggestions_Feedback"];?></td>
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
      <td bgcolor="#FFF">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>