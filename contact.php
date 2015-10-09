<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location: login-page.php");
}
include 'contact_info.php';

?>

<?php
	
	include_once 'header.php';
?>

<div class="container">
<h1>Contact Page</h1>
<form id="contact-form">
	<?php while($rows = mysql_fetch_array($user_result)){?>
			
			   
	
	<input type="email" id="email" name="email" class="form-control"  placeholder="Your Email" value="<?php echo $rows['email']; ?>">
	<br>
	<input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $rows['name']; ?>">
	<br>
	<input type="text" name="subject" class="form-control" id="subject" placeholder="Email Subject" >
	<br>
	<textarea id="comments" class="form-control" rows="3" ></textarea>
	<br>
		<?php } ?>
	<button id="submit" type="submit" class="btn btn-primary pull-right" style="margin-top: 10px;">Submit</button>
	
</form>

</div>
<script>
			
		
			 $("#contact-form").on('submit', function (e){
				 e.preventDefault();
				 var $email=$("#email").val();
				 var $name=$("#name").val();
				  var $subject=$("#subject").val();
				 var $comment=$("#comments").val();
				 var form_data={
					// Required data
					  email : $email
					, name : $name
					, subject : $subject
					, comment : $comment
				
				}
				var data_datastring=jQuery.param( form_data );
				$.ajax({
					url: "send-email.php",
					data:data_datastring,
					type: "POST",
					success:function(response){
						if(response.message=="success"){
							 alert("You're email was sent successfully");
							 
						 }else{
							 alert(response.error)
							
						 }
						 
					}
					
				});
			 });
			
		</script>
</body>
</html>