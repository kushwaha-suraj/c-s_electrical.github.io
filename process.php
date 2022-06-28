<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$name 	= $_POST['name'];
	$email	= $_POST['email'];
	$mob 		= $_POST['mob'];
	$location = $_POST['location'];
	$product 	= $_POST['product'];
	$message 	= $_POST['message'];

		$sql = "INSERT INTO users (name, email, mob, location, product, message ) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $email, $mob, $location, $product, $message]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}