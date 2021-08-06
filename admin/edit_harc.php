<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Թեստեր</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="content">
		<div class="inner_content">
			<div class="back_main"><a href="tester.php"><img src="../image/back_yellow.png" alt=""></a></div>
			<div class="tester_hth_glxavor">
				<?php 
					$testi_tesak = $_POST["testi_tesak"];
					$harc_id = $_POST["harc_id"];
					$harc = $diplom->query("SELECT * FROM harcer WHERE `id` = $harc_id")->fetch_all(MYSQLI_ASSOC);
					$patasxan = $diplom->query("SELECT * FROM patasxanner WHERE `id` = $harc_id")->fetch_all(MYSQLI_ASSOC);
				?>
				<form action="saveedittest.php" method="post">
					<div class="admin_edit_test">
						<label class="harc" for="">Հարց։</label><br>
						<input class="admin_edit_input" type="text" name="harc" value="<?php print $harc[0]["harc_". $testi_tesak]; ?>"><br>
					</div><br>
					<div  class="admin_edit_test">
						<label class="harc" for="">Պատասխան №1։</label><br>
						<input class="admin_edit_input" type="text" name="patasxan1"  value="<?php print $patasxan[0]['patasxan_1_' . $testi_tesak]; ?>"><br>
						<?php if ($patasxan[0]["chisht_" . $testi_tesak . "_1"]){ ?>
							<input type="checkbox" checked="" name="chisht_pat1"><br>
						<?php } else { ?>
							<input type="checkbox" name="chisht_pat1"><br>
						<?php } ?>
					</div><br>
					<div  class="admin_edit_test">
						<label class="harc" for="">Պատասխան №2։</label><br>
						<input class="admin_edit_input" type="text" name="patasxan2"  value="<?php print $patasxan[0]['patasxan_2_' . $testi_tesak]; ?>"><br>
						<?php if ($patasxan[0]["chisht_" . $testi_tesak . "_2"]){ ?>
							<input type="checkbox" checked="" name="chisht_pat2"><br>
						<?php } else { ?>
							<input type="checkbox" name="chisht_pat2"><br>
						<?php } ?>
					</div><br>
					<div  class="admin_edit_test">
						<label class="harc" for="">Պատասխան №3։</label><br>
						<input class="admin_edit_input" type="text" name="patasxan3"  value="<?php print $patasxan[0]['patasxan_3_' . $testi_tesak]; ?>"><br>
						<?php if ($patasxan[0]["chisht_" . $testi_tesak . "_3"]){ ?>
							<input type="checkbox" checked="" name="chisht_pat3"><br>
						<?php } else { ?>
							<input type="checkbox" name="chisht_pat3"><br>
						<?php } ?>
					</div><br>
					<div  class="admin_edit_test">
						<label class="harc" for="">Պատասխան №4։</label><br>
						<input class="admin_edit_input" type="text" name="patasxan4"  value="<?php print $patasxan[0]['patasxan_4_' . $testi_tesak]; ?>"><br>
						<?php if ($patasxan[0]["chisht_" . $testi_tesak . "_4"]){ ?>
							<input type="checkbox" checked="" name="chisht_pat4"><br>
						<?php } else { ?>
							<input type="checkbox" name="chisht_pat4"><br>
						<?php } ?>
					</div><br>
					<div>
						<input type="hidden" name="testi_tesak" value="<?php print $testi_tesak;?>">
						<input type="hidden" name="harc_id" value="<?php print $harc_id;?>">
						<?php if ($testi_tesak == "php"){ ?>
							<button class="php_btn">Փոփոխել</button>
						<?php } else { ?>
							<button class="mysql_btn">Փոփոխել</button>
						<?php } ?>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include "../view/footergicyellow.php"; ?>
<?php include "../view/footer.php" ?>