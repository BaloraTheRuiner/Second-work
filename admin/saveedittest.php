<?php 

	include "database.php";

	$harc = $_POST["harc"];
	$patasxan1 = $_POST["patasxan1"];
	$patasxan2 = $_POST["patasxan2"];
	$patasxan3 = $_POST["patasxan3"];
	$patasxan4 = $_POST["patasxan4"];
	$testi_tesak = $_POST["testi_tesak"];
	$harc_id = $_POST["harc_id"];

	$diplom->query("UPDATE `harcer` SET `harc_" . $testi_tesak . "`  = '$harc' WHERE `id` = $harc_id");

	if (isset($_POST["chisht_pat1"])){
		$chisht_pat1 = $_POST["chisht_pat1"];
	}
	if (isset($_POST["chisht_pat2"])){
		$chisht_pat2 = $_POST["chisht_pat2"];
	}
	if (isset($_POST["chisht_pat3"])){
		$chisht_pat3 = $_POST["chisht_pat3"];
	}
	if (isset($_POST["chisht_pat4"])){
		$chisht_pat4 = $_POST["chisht_pat4"];
	}
	
	if (isset($chisht_pat1) && $chisht_pat1 == "on"){
		$diplom->query("UPDATE `patasxanner` SET 
			`patasxan_1_" . $testi_tesak . "` = '$patasxan1', 
			`patasxan_2_" . $testi_tesak . "` = '$patasxan2',
			`patasxan_3_" . $testi_tesak . "` = '$patasxan3',
			`patasxan_4_" . $testi_tesak . "` = '$patasxan4',
			`chisht_" . $testi_tesak . "_1` =  1,
			`chisht_" . $testi_tesak . "_2` =  0,
			`chisht_" . $testi_tesak . "_3` =  0,
			`chisht_" . $testi_tesak . "_4` =  0
			WHERE `id` = $harc_id");
	}
	if (isset($chisht_pat2) && $chisht_pat2 == "on"){
		$diplom->query("UPDATE `patasxanner` SET 
			`patasxan_1_" . $testi_tesak . "` = '$patasxan1', 
			`patasxan_2_" . $testi_tesak . "` = '$patasxan2',
			`patasxan_3_" . $testi_tesak . "` = '$patasxan3',
			`patasxan_4_" . $testi_tesak . "` = '$patasxan4',
			`chisht_" . $testi_tesak . "_1` =  0,
			`chisht_" . $testi_tesak . "_2` =  1,
			`chisht_" . $testi_tesak . "_3` =  0,
			`chisht_" . $testi_tesak . "_4` =  0
			WHERE `id` = $harc_id");
	}
	if (isset($chisht_pat3) && $chisht_pat3 == "on"){
		$diplom->query("UPDATE `patasxanner` SET 
			`patasxan_1_" . $testi_tesak . "` = '$patasxan1', 
			`patasxan_2_" . $testi_tesak . "` = '$patasxan2',
			`patasxan_3_" . $testi_tesak . "` = '$patasxan3',
			`patasxan_4_" . $testi_tesak . "` = '$patasxan4',
			`chisht_" . $testi_tesak . "_1` =  0,
			`chisht_" . $testi_tesak . "_2` =  0,
			`chisht_" . $testi_tesak . "_3` =  1,
			`chisht_" . $testi_tesak . "_4` =  0
			WHERE `id` = $harc_id");
	}
	if (isset($chisht_pat4) && $chisht_pat4 == "on"){
		$diplom->query("UPDATE `patasxanner` SET 
			`patasxan_1_" . $testi_tesak . "` = '$patasxan1', 
			`patasxan_2_" . $testi_tesak . "` = '$patasxan2',
			`patasxan_3_" . $testi_tesak . "` = '$patasxan3',
			`patasxan_4_" . $testi_tesak . "` = '$patasxan4',
			`chisht_" . $testi_tesak . "_1` =  0,
			`chisht_" . $testi_tesak . "_2` =  0,
			`chisht_" . $testi_tesak . "_3` =  0,
			`chisht_" . $testi_tesak . "_4` =  1
			WHERE `id` = $harc_id");
	}

	header("Location: tester.php");

?>