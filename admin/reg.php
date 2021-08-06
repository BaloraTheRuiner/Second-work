<?php 

	include "database.php";
	session_start();

	$anun = $_POST["anun"];
	$azganun = $_POST["azganun"];
	$email = $_POST["email"];
	$password = $_POST["password"];	

	$all_user = $diplom->query("SELECT * FROM `users`")->fetch_all(MYSQLI_ASSOC);
	$chisht = false;

	foreach ($all_user as $key){
		if ($email == $key["email"]){
			$chisht = true;
			break;
		} else {
			$chisht = false;
		}
	}

	if ($chisht == true){
		$_SESSION["email_error"] = "Այդպիսի էլ․ հասցե գոյություն ունի";
		header("Location: ../view/login.php");
	} else {
		$diplom->query("INSERT INTO `users` (`anun`, `azganun`, `email`, `pass`) VALUES ('$anun', '$azganun', '$email', '$password')");
		$reg_user = $diplom->query("SELECT * FROM `users` WHERE `email` = '$email'")->fetch_all(MYSQLI_ASSOC);
		$_SESSION["id"] = $reg_user[0]["id"];
		$_SESSION["anun"] = $reg_user[0]["anun"];
		$_SESSION["azganun"] = $reg_user[0]["azganun"];
		header("Location: ../view/index.php");
	}

?>