<?php
// Check if a file has been uploaded
//http://bytes.com/topic/php/insights/740327-uploading-files-into-mysql-database-using-php/4
if(isset($_FILES['uploaded_file']))
 {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) 
	{
        // Connect to the database
        $dbLink = new mysqli('localhost', 'root', 'root', 'onlineknowledgeportal');
		
        if(mysqli_connect_errno()) 
		{
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
		$sem=$_POST['text1'];
		$code=$_POST['text2'];
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
     
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
      //  $size = intval($_FILES['uploaded_file']['size']);
 
        // Create the SQL query
        $query = "INSERT INTO `semester` (`Semesternm`,`code`,`Subjecttitle`, `uploadsubject`)VALUES ('{$sem}','{$code}','{$name}', '{$data}')";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result)
		 {
			 header('Location: teacherpanel.php');
            
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    
}
else {
    echo 'Error! A file was not sent!';
}
 

?>
 
 