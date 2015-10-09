<?php
		
	
	$email =  $_POST['email'];
	$name= $_POST['name'];
    $subject= $_POST['subject'];
    $comment= $_POST['comment'];
    
	$to      = 'vbalderas8@gmail.com';
	$subject = $subject;
	$message = $comment;
	$headers = 'From: '.$email . "\r\n" .
	    'Reply-To: '.$email . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)){
		$json_data=array('message'=>'success');
				header('Content-Type: application/json');
				echo json_encode( $json_data );
		
	}else{
		$error="Sorry your email was not sent";
			  header('Content-Type: application/json');
			  echo json_encode( $error );
		
	}
?>