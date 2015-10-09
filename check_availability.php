<?php
	include_once 'settings.php';
	
	$name= $_POST['name'];
	$username = $_POST['username'];
	$email=$_POST['email'];
    $password = $_POST['password'];
    
   
	    if(!empty($username)) {
		  $result = mysql_query("SELECT count(*) FROM Users WHERE username='" .$username. "'");
		  $row = mysql_fetch_row($result);
		  $user_count = $row[0];
		  if($user_count>0) {
		      echo "Fail";
		  }else{
		      echo "Success";
		  }
		}
    
	
?>