<?php
	session_start();
//

?>
<?php
	
	include_once 'header.php';
?>
<div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
      <form id="form-registration" class="form-horizontal" method='post'>
        <h2 class="form-signin-heading">Registration</h2>
        <div id="form-name" class="form-group">
	         <label for="inputName" class="sr-only">Name</label>
	        <input type="text" id="name" class="form-control" name="name" value=""  placeholder="Name" required="" autofocus="">
	        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	         <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
        </div>
    
        <div id="form-username"class="form-group">
	        <label for="inputUsername" class="sr-only">Username</label>
	        <input type="text" id="username" class="form-control" name="username" value=""  placeholder="Username" required="" autofocus="">
	         <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	         <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
        </div>
  
        <div id="form-email"class="form-group">
	        <label for="inputEmail" class="sr-only">Email</label>
	        <input type="email" id="email" class="form-control" name="email" value=""  placeholder="Email" required="" autofocus="">
	         <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	         <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
         </div>
    
        <div id="form-password"class="form-group">
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="password" class="form-control" name="password" value=""  placeholder="Password" required="">
	           <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	         <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
        </div>
       
         <div id="form-conf-password"class="form-group">
	        <label for="inputConfirmpassword" class="sr-only">Confirm Password</label>
	        <input type="password" id="confirm-password" class="form-control" name="confirm-password" value=""  placeholder="Confirmation Password" required="">
	         <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	         <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	        <br>
        <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Registration</button>
         </div>
        
      </form>
	</div>
    </div>
</body>
<script type="text/javascript">
	$(".form-control-feedback").hide();
	$( "#username" ).blur(function() {
		var $user=$("#username").val();
		if(!$user){
			$("#form-username").removeClass("has-success has-feedback");
					$("#form-username").addClass("has-error has-feedback");
					$("#form-username ").prepend('<span class="control-label" for="inputError1">Username is required.</span>');
					$("#form-username .glyphicon-ok").hide();
					$("#form-username .glyphicon-remove").show();
			
		}else{
			
			$.ajax({
			url: "check_availability.php",
			data:'username='+$("#username").val(),
			type: "POST",
			success:function(data){
				//$("#user-availability-status").html(data);
				if(data=="Success"){
					$("#form-username").removeClass("has-error has-feedback");
					$("#form-username").addClass("has-success has-feedback");
					$("#form-username .glyphicon-ok").show();
					$("#form-username .glyphicon-remove").hide();
					$("#form-username .control-label").hide();
				}else{
					$("#form-username").removeClass("has-success has-feedback");
					$("#form-username").addClass("has-error has-feedback");
					$("#form-username ").prepend('<label class="control-label" for="inputError1">The name is already used. Please use a different one.</label>');
					$("#form-username .glyphicon-ok").hide();
					$("#form-username .glyphicon-remove").show();
					
				}
				
				
			},
			error:function (){
				
			}
			
		});
			
			
			
			
			
		}
		
	 
	});
	$( "#name" ).blur(function() {
		var $name=$("#name").val();
		
		if(!$name){
			$("#form-name").removeClass("has-success has-feedback");
			$("#form-name").addClass("has-error has-feedback");	
			$("#form-name ").prepend('<label class="control-label" for="inputError1">The name is required.</label>');
			$("#form-name .glyphicon-ok").hide();
			$("#form-name .glyphicon-remove").show();
		}else{
			$("#form-name").removeClass("has-error has-feedback");
			$("#form-name").addClass("has-success has-feedback");
			$("#form-name .glyphicon-ok").show();
			$("#form-name .glyphicon-remove").hide();
			$("#form-name .control-label").hide();
			
		}
	});
	$("#email" ).blur(function() {
		var $emailaddress=$("#email").val();
		
		if(!isValidEmailAddress( $emailaddress ) ){
			$("#form-email").removeClass("has-success has-feedback");
			$("#form-email").addClass("has-error has-feedback");
			$("#form-email ").prepend('<label class="control-label" for="inputError1">The pleas add a valid email address.</label>');	
			$("#form-email .glyphicon-ok").hide();
			$("#form-email .glyphicon-remove").show();
		}else if (!$emailaddress){
			$("#form-email").removeClass("has-success has-feedback");
			$("#form-email").addClass("has-error has-feedback");	
			$("#form-email ").prepend('<label class="control-label" for="inputError1">The email is required.</label>');
			$("#form-email .glyphicon-ok").hide();
			$("#form-email .glyphicon-remove").show();
			
			
			
		}else{
			$("#form-email").removeClass("has-error has-feedback");
			$("#form-email").addClass("has-success has-feedback");
			$("#form-email .glyphicon-ok").show();
			$("#form-email .glyphicon-remove").hide();
			$("#form-email .control-label").hide();
			
		}
	 
	});
	$("#password" ).blur(function() {
		var $password=$("#password").val().length;
		console.log($password);
		
		if($password >=6 ){
			$("#form-password").removeClass("has-error has-feedback");
			$("#form-password").addClass("has-success has-feedback");
			$("#form-password .glyphicon-ok").show();
			$("#form-password .glyphicon-remove").hide();
			$("#form-password .control-label").hide();
		}else if (!$password){
			$("#form-password").removeClass("has-success has-feedback");
			$("#form-password").addClass("has-error has-feedback");	
			$("#form-password ").prepend('<label class="control-label" for="inputError1">The password is required.</label>');
			$("#form-password .glyphicon-ok").hide();
			$("#form-password .glyphicon-remove").show();
			
			
			
		}else{
			$("#form-password").removeClass("has-success has-feedback");
			$("#form-password").addClass("has-error has-feedback");	
			$("#form-password ").prepend('<label class="control-label" for="inputError1">The password needs to be at least 6 characters.</label>');
			$("#form-password .glyphicon-ok").hide();
			$("#form-password .glyphicon-remove").show();
			
			
		}
	 
	});
	$("#confirm-password" ).blur(function() {
		var $last_password=$("#confirm-password").val();
		var $password=$("#password").val();
		console.log($password);
		
		if($last_password == $password){
			$("#form-conf-password").removeClass("has-error has-feedback");
			$("#form-conf-password").addClass("has-success has-feedback");
			$("#form-conf-password .glyphicon-ok").show();
			$("#form-conf-password .glyphicon-remove").hide();
			$("#form-conf-password .control-label").hide();
		}else{
			$("#form-conf-password").removeClass("has-success has-feedback");
			$("#form-conf-password").addClass("has-error has-feedback");	
			$("#form-conf-password ").prepend('<label class="control-label" for="inputError1">The password does not match</label>');
			$("#form-conf-password .glyphicon-ok").hide();
			$("#form-conf-password .glyphicon-remove").show();
			
			
		}
	 
	});
	function isValidEmailAddress($emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test($emailAddress);
};
	$("#form-registration").on('submit', function (e) {
		e.preventDefault();
		var $user=$("#username").val();
		var $name=$("#name").val();
		var $emailaddress=$("#email").val();
		var $last_password=$("#confirm-password").val();
		var form_data={
			// Required data
			  name : $name
			, username : $user
			, email : $emailaddress
			, password : $last_password
		}
		var data_datastring=jQuery.param( form_data );
		//console.log(data_datastring);
		$.ajax({
			url: "register.php",
			data:data_datastring,
			type: "POST",
			success:function(response){
				
				 if(response.message=="success"){
					 window.location.replace("contact.php");
					 
				 }else{
					 alert(response.error)
					
				 }
			}
			
		});
	});
</script>
</html>