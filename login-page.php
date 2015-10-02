<?php
//
if(isset($_SESSION['username'])){
header("location: contact.php");
}
if($_GET["error"]==true){
	
	echo '<p class="bg-danger text-danger" style="text-align:center;">Wrong password or email</p>';
}
?>
<?php
	
	include_once 'header.php';
?>
<div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
      <form action='login.php' method='post'>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="username" class="form-control" name="username" value=""  placeholder="Email address" required="" autofocus="">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" name="password" value=""  placeholder="Password" required="">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	</div>
    </div>
</body>
</html>