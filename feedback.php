<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	color: #FFF;
}
.style1 {color: #FFFFFF}
.style2 {color: #00FFFF}
.style10 {
	font-size: 12px;
	font-weight: normal;
}
.style12 {color: #990000}
.style16 {color: #FF0000}
.style17 {font-size: 14px}
.style18 {font-size: 14}
.style19 {color: #FFFFFF; font-size: 12px; }
#form1 table tr td a {
	font-size: 14px;
	color: #FFF;
	font-weight: normal;
}
.style121 {
	font-size: medium;
	font-weight: normal;
}
#form1 table tr td .style17 {
	font-weight: normal;
}
#form1 table tr td .style17 {
}
.style13 {font-size: 24px}
.style14 {font-size: 12px}
.style161 {font-size: 10px}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(img/cloudy_sky-wide.jpg);
}
</style>
</head>

<body>

<form id="form1" name="form1" method="post" action="feedback_code.php">
<?php
 session_start();
?>
  <table width="70%" border="1" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td align="center"><img src="img/elearning-online-content-banner.jpg" width="980" height="205" /></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#910B00"><a href="studentpanel.php">Back</a><br /></td>
    </tr>
    <tr>
      <td width="917" valign="top"><p>&nbsp;</p>
        <table width="536" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td width="421" height="36" valign="top"><h1 class="style13">Feedback</h1></td>
          </tr>
        <tr>
          <td height="46" valign="top"><p class="style14">Do you have any questions, comments or suggestions? We would be glad to hear   it from you. Your feedback is important and valuable to us. </p></td>
        </tr>
        <tr>
          <td>Subject</td>
        </tr>
        <tr>
          <td><span id="sprytextfield3">
            <input name="t1" type="text" id="t1" size="55" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr>
          <td>Suggestions / Feedback:</td>
          </tr>
        <tr>
          <td><p>
            <textarea name="t2" cols="99" rows="12" id="t2"></textarea>
            </p>
            </td>
          </tr>
        <tr>
          <td><input type="submit" name="s1" value="Summit" /></td>
          </tr>
      </table>        <p align="justify" class="style17"><?php echo " ".$_SESSION['em']; ?></p></td>
    </tr>
    <tr>
      <td bgcolor="#900A01">&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>
