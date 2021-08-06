<?php 

	include "database.php";
	session_start();

	$user_id = $_SESSION["id"];
	
	$diplom->query("DELETE FROM `users` WHERE `id` = $user_id");

	unset($_SESSION["id"]);

	header("Location: ../view/login.php");

?>