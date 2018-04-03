<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css">
<!--
body,td,th {
}
.style1 {
	color: #460A0A
}
#Layer1 {
	position:absolute;
	left:428px;
	top:211px;
	width:492px;
	height:228px;
	z-index:1;
}
.style13 {font-size: 24px}
body {
	background-image: url(img/cloudy_sky-wide.jpg);
	background-repeat: repeat;
}
#form4 td table tr td table tr td h1 {
	text-align: center;
	color: #55080E;
}
#form4 td table tr td .style1 {
	color: #FFF;
}
#form4 table tr td table tr td h1 {
	text-align: center;
	color: #FFF;
}
#form4 table tr td table tr td {
	color: #FFF;
}
#form4 table tr td table tr td a {
	font-size: 12px;
}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form4" name="form4" method="post" action="process.php">
 
    
    
<table  rules="none"  width="75%" border="1" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td align="left"><img src="img/banner01.jpg"  width="843" height="187" /></td>
        </tr>
        <tr>
          <td align="left" valign="top" bgcolor="#ED9903">&nbsp;</td>
    </tr>
        <tr>
          <td width="783" align="right" valign="top"><p>&nbsp;</p>
            <table rules="none" width="451" height="205" border="1" align="center" cellpadding="6" cellspacing="7">
            <tr>
              <td colspan="2"><h1>Login </h1></td>
            </tr>
            <tr>
              <td width="63" valign="top"><span class="style1">Id</span></td>
              <td width="351"><span id="sprytextfield1">
                <input name="t1" type="text" id="t1" size="55" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
            <tr>
              <td><span class="style1">Password</span></td>
              <td><span id="sprypassword1">
                <input name="t2" type="password" id="t2" size="55" />
                <span class="passwordRequiredMsg">A value is required.</span></span></td>
</tr>
            <tr>
              <td>Select</td>
              <td><select name="select" id="select">
                <option>Student</option>
                <option>Admin</option>
                <option>Teacher</option>
              </select></td>
            </tr>
            <tr>
              <td height="31">&nbsp;</td>
              <td valign="top"><p>
                <input type="submit" name="l1" value="Login" />
              </p></td>
            </tr>
            
          </table>
          <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td align="left" valign="top" bgcolor="#ED9903">&nbsp;</td>
        </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
