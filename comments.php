<?php
	include_once 'settings.php';
	
	
    //echo $name;
    $sql =  "SELECT Comments.comment, Users.name FROM Comments INNER JOIN Users ON Users.userID = Comments.userID";
    //echo $sql;	
	$result = mysql_query($sql);
	
	

		  
		
    
	
?>