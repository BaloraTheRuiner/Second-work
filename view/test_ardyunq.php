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

				<?php 
					$x = 1;
					for ($i = 0; $i < 10; $i++){ 
				?>
						<div class="muk_test">
				<?php  
						if (isset($_SESSION["chisht_nshvac_" . $i]) && $_SESSION["chisht_nshvac_" . $i] == "ayo"){
							print "Հարց " . $x++ . "-ը նշված է <span style='color: green;'>ճիշտ</span><br>";
						} else {
							print "Հարց " . $x++ . "-ը նշված է <span style='color: red;'>սխալ</span><br>";
						}
				?>
						</div>
				<?php 
					} 
				?>

			</div>
		</div>
	</div>

<?php include "footergicyellow.php"; ?>
<?php include "footer.php" ?>