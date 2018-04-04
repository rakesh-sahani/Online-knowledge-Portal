<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-weight: bold;
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
.style13 {
	font-size: 24px;
	color: #FFF;
}
body {
	background-image: url();
	background-color: #FFF;
}
#form4 td table tr td table tr td h1 {
	text-align: center;
	color: #55080E;
}
#form4 td table tr td .style1 {
	color: #400809;
}
#form4 table tr td table tr td h1 {
	text-align: center;
}
#form4 table tr td table tr td {
	color: #000;
}
#form4 table tr td p {
	color: #F00;
}
#form4 table tr td p a {
	color: #FFF;
}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form4" name="form4" method="POST" action="teacherreg_code.php">
  <?php
 
$randval1 = rand();
$randval = rand();
    ?>
    
    
<table width="60%" border="1" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td align="right"><img src="img/elearning-online-content-banner.jpg" width="980" height="250" /></td>
        </tr>
        <tr>
          <td width="489" align="left" valign="top"><p><a href="index.php">Back</a></p>
            <table rules="none" width="619" border="1" align="center" cellpadding="5" cellspacing="5">
            <tr>
              <td height="47" colspan="2" align="center" valign="middle"><span class="style13">Sign Up</span><br />                <div></div></td>
            </tr>
            <tr>
              <td width="248">Teacher Id</td>
              <td width="330"><span id="sprytextfield2">
                <input name="text1"  value="<?php echo $randval ?>"  type="text" id="text1" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><span id="sprytextfield3">
              <input name="text2" type="text" id="text2" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><span id="sprytextfield4">
                <input name="text3"  value="<?php echo $randval1 ?>"  type="text" id="text3" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>Mobile</td>
              <td><span id="sprytextfield5">
              <input name="text4" type="text" id="text4" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            </tr>
            <tr>
              <td>Salary</td>
              <td><span id="sprytextfield">
              <input name="text5" type="text" id="text5" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            </tr>
            <tr>
              <td>Branch</td>
              <td><span id="sprytextfield6">
              <input name="text6" type="text" id="text6" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>Subject</td>
              <td><span id="sprytextfield7">
              <input name="text7" type="text" id="text7" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>Date Of Joining(mm/dd/yy)</td>
              <td><span id="sprytextfield8">
              <input name="text8" type="text" id="text8" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            </tr>
            <tr>
              <td>Full Address</td>
              <td><span id="sprytextfield9">
              <textarea name="text9" cols="55" rows="15" id="text9"></textarea>
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            </tr>
            <tr>
              <td>Date Of Birth(mm/dd/yy)</td>
              <td><span id="sprytextfield10">
              <input name="text10" type="text" id="text10" size="55" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="s1" value="Sign Up" /></td>
            </tr>
          </table>
            <p>&nbsp;</p>
          <a href="#" class="style1"></a></td>
        </tr>
      </table>
    
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</form>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "phone_number", {format:"phone_custom", pattern:"xxxxxxxxxx"});
var sprytextfield = new Spry.Widget.ValidationTextField("sprytextfield", "integer");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "date");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "date");
</script>
</body>
</html>
