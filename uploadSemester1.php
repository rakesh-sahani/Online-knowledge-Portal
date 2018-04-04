<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
}
.style1 {color: #FFFFFF}
.style2 {color: #00FFFF}
.style10 {font-size: 12px}
.style12 {color: #990000}
.style16 {color: #FF0000}
.style17 {font-size: 14px}
.style18 {font-size: 14}
.style19 {color: #FFFFFF; font-size: 12px; }
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(img/cloudy_sky-wide.jpg);
}
h1 {
	color: #FFF;
}
#form1 table tr td table tr td {
	color: #FFF;
}
</style>
</head>

<body>
</form>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table rules="none" width="70%" border="1" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td align="center"><img src="img/banner02.jpg" width="1000" height="220" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#DEAB2E">&nbsp;</td>
    </tr>
    <tr>
      <td width="709" align="center"><p>&nbsp;</p>
        <table width="558" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td colspan="2" align="center"><h1>UpLoad Data</h1></td>
        </tr>
        <tr>
          <td>Semester</td>
          <td><select name="text1" id="text1">
            <option>Semester</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select></td>
        </tr>
        <tr>
          <td>Subject Code</td>
	<td><select name="text2" id="text2">
            <option>SubjectCode</option>
            <option>101</option>
            <option>102</option>
            <option>103</option>
            <option>104</option>
            <option>105</option>
            <option>201</option>
	    <option>202</option>
            <option>203</option>
            <option>204</option>
            <option>205</option>
            <option>301</option>
            <option>302</option>
	    <option>303</option>
            <option>304</option>
            <option>305</option>
            <option>401</option>
            <option>402</option>
            <option>403</option>
	    <option>404</option>
            <option>405</option>
            <option>501</option>
            <option>502</option>
            <option>503</option>
            <option>504</option>
	    <option>505</option>
            <option>601</option>
            <option>602</option>
            <option>603</option>
            <option>604</option>
            <option>605</option>
          </select></td>

         <td width="375"><span id="sprytextfield2">

            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td>Upload</td>
          <td><input type="file" name="uploaded_file" id="uploaded_file" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Submit" /></td>
          </tr>
      </table>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td bgcolor="#DEAB2E">&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
