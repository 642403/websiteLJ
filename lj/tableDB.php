<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yeet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE `users` (
  `Uname` text NOT NULL,
  `Pword` text NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
$sql = "INSERT INTO users (Uname, Pword)
VALUES ('Luke', 'Ryan')";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>