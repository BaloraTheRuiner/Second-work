<?php include "../admin/database.php" ?>
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
				<div>
					<h2>
						<?php 
							$testi_tesak = $_POST["test_type"];
							if ($testi_tesak == "php"){
								print("<span style='color: #8e08ab;'>PHP</span> թեստ<br><br>"); 
							}
							if ($testi_tesak == "mysql"){
								print("<span style='color: #018174;'>MySQL</span> թեստ<br><br>"); 
							}
						?>
					</h2>
				</div>
				<div>
					<?php $harc = $diplom->query("SELECT * FROM harcer")->fetch_all(MYSQLI_ASSOC); ?>
					<?php foreach ($harc as $key){  ?>
						<div>
								<?php 
									if ($testi_tesak == "php"){
								?>
									<form action="edit_harc.php" method="post">
										<input type="hidden" name="testi_tesak" value="php">
										<input type="hidden" name="harc_id" value="<?php print $key['id'] ?>">
										<div class="admin_test">
											<div class="admin_test_btn"><button class="php_btn">Փոփոխել հարցը: </button></div>
											<div class="admin_test_harc" style="border: 2px solid #8e08ab;"><?php print $key["harc_" . $testi_tesak]; ?></div><br><br>
										</div>
									</form>
										
								<?php 
									}
									if ($testi_tesak == "mysql"){
								?>
									<form action="edit_harc.php" method="post">
										<input type="hidden" name="testi_tesak" value="mysql">
										<input type="hidden" name="harc_id" value="<?php print $key['id'] ?>">
										<div class="admin_test">
											<div class="admin_test_btn"><button class="mysql_btn">Փոփոխել հարցը: </button></div>
											<div class="admin_test_harc" style="border: 2px solid #018174;"><?php print $key["harc_" . $testi_tesak]; ?></div><br><br>
										</div>
									</form>
								<?php 
									}
								?>
								
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php include "../view/footergicyellow.php"; ?>
<?php include "../view/footer.php" ?>