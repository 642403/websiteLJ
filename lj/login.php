<?php
	   include("config.php");
	   include("tableDB.php");
	   session_start();
	
	   
	   if($_SERVER["REQUEST_METHOD"] == "POST") {
	      // username and password sent from form 
	       
	      $myuname = mysqli_real_escape_string($db,$_POST['Uname']);
	      $mypword = mysqli_real_escape_string($db,$_POST['Pword']);
		  
	      $sql = "FROM users WHERE Uname = '$myuname' and Pword = '$mypword'";
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
