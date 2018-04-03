<?php
// Connect to the database
$dbLink = new mysqli('localhost', 'root', '', 'onlineknowledgeportal');
if(mysqli_connect_errno()) 
{
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = 'SELECT `Semesternm`, `code`, `Subjecttitle`, `uploadsubject` FROM `semester`';
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
                    <td><b>Semesternm</b></td>
                    <td><b>Code</b></td>
                    <td><b>Subject Name (bytes)</b></td>
                    <td><b>Data</b></td>
                    
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
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