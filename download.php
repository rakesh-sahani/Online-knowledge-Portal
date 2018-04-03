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
	background-image: url();
	background-repeat: repeat;
	background-color: #4B90C9;
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
</head>

<body>
<form id="form4" name="form4" method="post" action="process.php">
 
    
    
<p>&nbsp;</p>
<table  rules="none"  width="75%" border="1" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td align="left"><img src="img/banner01.jpg"  width="1050" height="187" /></td>
        </tr>
        <tr>
          <td align="left" valign="top" bgcolor="#ED9903">&nbsp;</td>
    </tr>
        <tr>
          <td width="783" align="left" valign="top"><?php
// Connect to the database
$dbLink = new mysqli('localhost', 'root', 'root', 'onlineknowledgeportal');
if(mysqli_connect_errno()) 
{
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `Semesternm`, `code`, `Subjecttitle`, `uploadsubject` FROM `semester` ORDER BY Semesternm ASC';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) 
	{
        echo '<p>There are no files in the database</p>';
    }
    else 
	{
        // Print the top of a table
        echo '<table width="100%">
                <tr>
                    <td><b>Semester</b></td>
                    <td><b>Code</b></td>
                    <td><b>Subject Name</b></td>
                    <td><b>File</b></td>
                    
                </tr>';
 
        // Print each file
		
        while($row = $result->fetch_assoc())
		 {
			 	
            echo "
                <tr>
				
                    <td>{$row['Semesternm']}</td>
                    <td>{$row['code']}</td>
                    <td>{$row['Subjecttitle']}</td>
                   
                    <td><a href='download1.php?id={$row['code']}'>Download</a></td>
                </tr>";
			
        }
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>
          <p>&nbsp;</p></td>
        </tr>
        <tr>
          <td align="left" valign="top" bgcolor="#ED9903">&nbsp;</td>
        </tr>
  </table>
</form>
</body>
</html>
