
<?php

   define('DB_SERVER', 'localhost');

   define('DB_USERNAME', 'root');

   define('DB_PASSWORD', '');

   define('DB_DATABASE', 'forum');

   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $sql = "INSERT INTO users (Uname, Pword)
	VALUES ('Luke', 'Ryan')";
	$sql = "CREATE TABLE `users` (
	  `Uname` text NOT NULL,
	  `Pword` text NOT NULL,
	) ENGINE=MyISAM DEFAULT CHARSET=latin1;
	";
   if($db === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>