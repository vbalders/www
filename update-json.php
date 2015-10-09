<?php 
	
	$newJsonString= $_POST['value'];
	//echo $newJsonString;
	file_put_contents('data.json', $newJsonString);
	
?>