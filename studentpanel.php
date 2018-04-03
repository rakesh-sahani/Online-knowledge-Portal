<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url();
	background-color: #00C;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<?php
 session_start(); 
$_SESSION['em'];

?>
  <table width="200" border="1" align="center">
    <tr>
      <td colspan="2"><img src="img/banner01.jpg" width="1030" height="220" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td width="176" valign="top" bgcolor="#0000FF"><ul id="MenuBar1" class="MenuBarVertical">
        <li><a href="ViewProfileStudent.php">View Profile</a>          </li>
        <li><a href="UpdateProfile_student.php">Update Profile</a></li>
        <li><a href="download.php">Download</a>          </li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="index.php">Logout</a></li>
      </ul></td>
      <td width="798"><img src="img/teacher_header.jpg" width="840" height="496" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>