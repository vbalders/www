<?php
	include_once 'settings.php';
	
	$name= $_POST['name'];
	$username = $_POST['username'];
	$email=$_POST['email'];
    $password = $_POST['password'];
    $pwdmd5 = md5($password);
    //echo $name;
    $sql = "INSERT INTO Users (name, username, email, password) VALUES ('$name', '$username', '$email', '$pwdmd5' )";
    //echo $sql;	
	$result = mysql_query($sql);
	
		  if($result==1) {
		      session_start();
				// Store Session Data
				$_SESSION['username']= $username; 
				$_SESSION['logged_in']= 'yes'; 
				//header("location:contact.php");
				$json_data=array('message'=>'success');
				header('Content-Type: application/json');
				echo json_encode( $json_data );
		  }else{
		       $error="Ups!! try agagin";
			  header('Content-Type: application/json');
			  echo json_encode( $error );
		  }
		
    
	
?>