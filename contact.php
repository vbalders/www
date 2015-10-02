<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location: login-page");
}

?>

<?php
	
	include_once 'header.php';
?>

<div class="container">
<h1>Contact Page</h1>

</div>
</body>
</html>