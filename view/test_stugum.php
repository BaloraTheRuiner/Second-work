<?php 

	include "../admin/database.php";
	session_start();

	$im_masin_mtaci = 1;
	$testi_tesak = $_POST["testi_tesak"];

	$patasxanner = $diplom->query("SELECT * FROM `patasxanner`")->fetch_all(MYSQLI_ASSOC);

	for ($i = 0; $i < count($patasxanner); $i++){

		$patasxani_hamar_ = $_POST["patasxani_hamar_" . $patasxanner[$i]["id"]];

		if ($im_masin_mtaci == 5){
			$im_masin_mtaci = 1;
		}

		if ($patasxani_hamar_ == 1){
			$_SESSION["chisht_nshvac_" . $i] = "ayo";
		}

		if ($patasxani_hamar_ == 0){
			$_SESSION["chisht_nshvac_" . $i] = "voch";
		}
		
	}

	// if ($table == "mysql_function"){
	// 	$diplom->query("INSERT INTO `mysql_function` (`func_name`, `func_bacatrutyun`, `func_orinak`, `func_guyn`) VALUES ('$anun', '$bacatrutyun', '$orinak', '$guyn')");
	header("Location: test_ardyunq.php");
	// }

?>