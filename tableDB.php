<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
echo "connection successful";

$sql = "CREATE DATABASE theDB";
if ($conn->query($sql) === TRUE) {
	echo "database created successfully";
}else {
	echo "Error creating database: " . $conn->error;
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "theDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
