<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td {
	color: #FFF;
}
#form1 table tr td table tr td {
	color: #F00;
}
body {
	background-image: url(img/cloudy_sky-wide.jpg);
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="80%" border="1" align="center">
    <tr>
      <td><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="162">
          <param name="movie" value="img/bular.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="7.0.70.0" />
          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <param name="BGCOLOR" value="#012561" />
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="img/bular.swf" width="400" height="162">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="7.0.70.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <param name="BGCOLOR" value="#012561" />
            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
            <div>
              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
      </object></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><a href="admin.php">Back</a></td>
    </tr>
    <tr>
      <td width="798"><p><a href="studentpanel.php"></a></p>
        <table width="1000" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td colspan="10" align="center"><h1>Teacher Details </h1></td>
          </tr>
            <tr>
              <td width="89" height="37">Id</td>
          <td width="89">Email</td>
          <td width="85">Password</td>
          <td width="67">Mobile</td>
          <td width="78">Salary</td>
          <td width="82">Branch</td>
          <td width="85">Subject</td>
          <td width="80">Date Of Joining</td>
          <td width="89">Full Address</td>
		  <td width="79" height="37">Date Of Birth</td>
        
        </tr>
            <tr>
    <?php    
       include 'conn.php';
	  session_start(); 
	  $em=  $_SESSION["em"] ;
	   
$sql = "SELECT * FROM techer ";
$result = $conn->query($sql);
$i=0;
while($row = $result->fetch_assoc())
 {
     

?>
  
        
              <td height="37"><?php echo $row["teacherregid"];?></td>
              <td><?php echo $row["emailid"];?></td>
              <td><?php echo $row["password"];?></td>
              <td><?php echo $row["mobile"];?></td>
              <td><?php echo $row["basicsalary"];?></td>
              <td><?php echo $row["branch"];?></td>
              <td><?php echo $row["subject"];?></td>
              <td><?php echo $row["dateofjoining"];?></td>
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
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>