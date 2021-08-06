<?php session_start(); ?>
<?php 
	// unset($_SESSION["id"]);
	// unset($_SESSION["id"]);
	if (!isset($_SESSION["id"])){
		header("Location: login.php");
	}

	if (isset($_SESSION["type"])){
		unset($_SESSION["type"]);
	}

	/*
	**	isset($_SESSION["id"]) - true - header("Location: login.php") - user ka
	**	isset($_SESSION["id"]) - false -  - user chka

	**	!isset($_SESSION["id"]) - false -  - user ka
	**	!isset($_SESSION["id"]) - true - header("Location: login.php") - user chka
	*/
?>