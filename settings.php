<?php
	 
$servername = "localhost";
$username = "virira";
$password = "uPnSENMb4F6fSGdP";
$db_name="IT210";
// Create connection
//xx$conn = new mysqli($servername, $username, $password);
mysql_connect("$servername", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


	
?>