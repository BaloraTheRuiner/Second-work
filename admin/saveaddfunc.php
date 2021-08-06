<?php 


	include "database.php";

	$table = $_POST["table"];
	$anun = $_POST["anun"];
	$bacatrutyun = $_POST["bacatrutyun"];
	$orinak = $_POST["orinak"];
	$guyn = $_POST["guyn"];

	if ($table == "php_teg"){
		$diplom->query("INSERT INTO `php_teg` (`teg_name`, `teg_bacatrutyun`, `teg_orinak`, `teg_guyn`) VALUES ('$anun', '$bacatrutyun', '$orinak', '$guyn')");
		header("Location: phphistory.php");
	}

	if ($table == "mysql_function"){
		$diplom->query("INSERT INTO `mysql_function` (`func_name`, `func_bacatrutyun`, `func_orinak`, `func_guyn`) VALUES ('$anun', '$bacatrutyun', '$orinak', '$guyn')");
		header("Location: mysqlhistory.php");
	}

	



?>