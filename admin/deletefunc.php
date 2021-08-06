<?php 

	include "database.php";

	$teg_id = $_POST["delete"];
	$table = $_POST["table"];
	
	$diplom->query("DELETE FROM $table WHERE `id` = $teg_id");

	if ($table == "php_teg"){
		header("Location: phphistory.php");
	}

	if ($table == "mysql_function"){
		header("Location: mysqlhistory.php");
	}

?>