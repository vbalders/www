<?php
	include_once 'settings.php';
	
	$username = $_POST['username'];
	$comment=$_POST['comment'];
	
	//echo $username.'<br>';
	//echo $comment.'<br>';
	
    //echo $name;
    $user_sql="SELECT userID FROM Users WHERE username='$username'";
    //echo $sql;	
	$user_result = mysql_query($user_sql);
	
	while($rows = mysql_fetch_array($user_result)){
		  
		  $userID=$rows['userID']; 
	 
	 } 
	 
	 if(isset($userID)){
		 
		 $sql = "INSERT INTO Comments (userID, comment) VALUES ('$userID', '$comment' )";
		 $result = mysql_query($sql);
		 if($result==1) {
		     
				$json_data=array('message'=>'success');
				header('Content-Type: application/json');
				echo json_encode( $json_data );
		  }else{
		       $error="Your comment didn't save please submit again";
			  header('Content-Type: application/json');
			  echo json_encode( $error );
		  }
		 
	 }

		  
		
    
	
?>