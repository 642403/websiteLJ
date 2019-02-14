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
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<?php

	   include("config.php");

	   session_start();

	

	   

	   if($_SERVER["REQUEST_METHOD"] == "POST") {

	      // username and password sent from form 

	       

	      $myuname = mysqli_real_escape_string($db,$_POST['UserName']);

	      $mypword = mysqli_real_escape_string($db,$_POST['Password']);

		  

	      $sql = "SELECT UserID FROM users WHERE Uname = '$myuname' and Pword = '$mypword'";

	      $result = mysqli_query($db,$sql);

	      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	      $active = $row['active'];

	      

	      $count = mysqli_num_rows($result);

	      

	      // If result matched $myusername and $mypassword, table row must be 1 row

			

	      if($count == 1) {

	         //$session_register("myuname");

			 $_SESSION['UserName']= $myuname;

	         $_SESSION['login_user'] = $myuname;

	         header("location: Homepage.html");

	      }else {

	         $error = "Your Login Name or Password is invalid";

	      }

	   }

	?>
