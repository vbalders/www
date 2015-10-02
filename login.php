<?php
include_once 'settings.php';


  
    //var_dump($_POST);
    $username = $_POST['username'];
    //echo "Test".$username;
    $password = $_POST['password'];
    $pwdmd5 = md5($password);
    //echo $pwdmd5.'<br>';
    $tbl_name = "Users";
    $sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$pwdmd5'";
    $result=mysql_query($sql);
    //var_dump($result);
    $count=mysql_num_rows($result);
    //echo 'Count records: '.$count;
	if($count==1){
		session_start();
		// Store Session Data
		$_SESSION['username']= $username; 
		$_SESSION['logged_in']= 'yes'; 
		header("location:contact");
		
	}
	else {
		//echo "Wrong Username or Password";
		header("location:login-page?error=true");
	}
    

?>