<?php
$servername = "localhost";
$username = "root";
$password = "Root@123";
$dbname="bank";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

