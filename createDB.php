<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
echo "connection successful";

$sql = "CREATE DATABASE users";
if ($conn->query($sql) === TRUE) {
	echo "database created successfully";
}else {
	echo "Error creating database: " . $conn->error;
}

?>
