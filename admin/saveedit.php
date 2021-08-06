<?php 


	include "database.php";

	$teg_func_id = $_POST["teg_func_id"];
	$table = $_POST["table"];
	$anun = $_POST["anun"];
	$bacatrutyun = $_POST["bacatrutyun"];
	$orinak = $_POST["orinak"];
	$guyn = $_POST["guyn"];

	if ($table == "php_teg"){
		$diplom->query("UPDATE `php_teg` SET `teg_name` = '$anun', `teg_bacatrutyun` = '$bacatrutyun', `teg_orinak` = '$orinak', `teg_guyn` = '$guyn' WHERE `id` = $teg_func_id");
		header("Location: phphistory.php");
	}

	if ($table == "mysql_function"){
		$diplom->query("UPDATE `mysql_function` SET `func_name` = '$anun', `func_bacatrutyun` = '$bacatrutyun', `func_orinak` = '$orinak', `func_guyn` = '$guyn' WHERE `id` = $teg_func_id");
		header("Location: mysqlhistory.php");
	}

	



?>