<?php
	include_once 'settings.php';
	
	
	$username = $_SESSION['username'];
	
    
   
	    if(!empty($username)) {
		 	
		 	 $user_sql="SELECT name, email  FROM Users WHERE username='$username'";
		    //echo $sql;	
			$user_result = mysql_query($user_sql);
		}
    
	
?>