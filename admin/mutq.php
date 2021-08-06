<?php 

	include "database.php";
	session_start();

	$email = $_POST["email"];
	$password = $_POST["password"];

	$mutq_user = $diplom->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$password'")->fetch_all(MYSQLI_ASSOC);
	
	$_SESSION["anun"] = $mutq_user[0]["anun"];
	$_SESSION["azganun"] = $mutq_user[0]["azganun"];

	if ( $mutq_user[0]["type"] == "admin" ){
		$_SESSION["type"] = $mutq_user[0]["type"];
		header("Location: admin.php");
	} else {
		$_SESSION["id"] = $mutq_user[0]["id"];
		header("Location: ../view/index.php");
	}

	

 ?>