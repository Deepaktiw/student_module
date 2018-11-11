<?php
$servername = "localhost";
$username = "root";
$password = "1234qwer!";
$db="faculty";

// Create connection
$conn=mysqli_connect($servername,$username,$password);
$sqldb=mysqli_select_db($conn,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>