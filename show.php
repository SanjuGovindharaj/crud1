<!DOCTYPE html>
<html>
<body>

<?php
	$server = "localhost";
	$user = "root";
	$database="crud";
	
// Create connection

$conn =mysqli_connect($server, $user,"", $database);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
	}
$query = "SELECT * FROM entry";
$run_query = mysqli_query($conn, $query);
if($run_query) 
    // output data of each row
    while($row = mysqli_fetch_assoc($run_query)) {
        echo "Name: " . $row["Name"]."<br> Status:".$row["Status"]."<br>";
    }
?> 
</body>
</html>