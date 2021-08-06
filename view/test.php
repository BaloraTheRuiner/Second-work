<?php include "session.php" ?>
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
					<?php $patasxan = $diplom->query("SELECT * FROM patasxanner")->fetch_all(MYSQLI_ASSOC); ?>
					<form action="test_stugum.php" method="post">
						<?php 
							$x = 1;
							$i = 0; 
						?>
						<ol class="test_tesk">
							<?php foreach ($harc as $key){  ?>
								<div>
									<li><?php print $key["harc_" . $testi_tesak]; ?></li>
									<?php 
										while ($i < count($patasxan)){ 
											if ($x == 5){ 
												$x = 1; 
												$i++; 
												break;
											} 
											if ($patasxan[$i]["patasxan_".$x."_" . $testi_tesak] != ""){
									?>
											<div class="patasxan">
												<input name="<?php print("patasxani_hamar_" . $patasxan[$i]['id']);?>" type="radio" value="<?php print $patasxan[$i]["chisht_".$testi_tesak."_" . $x];?>">
												<label for=""><?php print $patasxan[$i]["patasxan_".$x."_" . $testi_tesak];?></label><br>
											</div>
									<?php
											}
											$x++; 
										} 
									?>
								</div>
							<?php } ?>
						</ol>
						<div style="text-align: center;padding: 30px 25px 0;">
							<input type="hidden" name="testi_tesak" value="<?php print $testi_tesak;?>">
							<?php if ($testi_tesak == "php"){ ?>
								<button class="php_btn">Ստուգել</button>
							<?php } else { ?>
								<button class="mysql_btn">Ստուգել</button>
							<?php } ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php include "footergicyellow.php"; ?>
<?php include "footer.php" ?>