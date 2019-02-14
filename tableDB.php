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
$sql = "CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Uname` text NOT NULL,
  `Pword` text NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
