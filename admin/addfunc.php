<?php include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP & MySQL</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<div class="content">
		<div class="inner_content">
			<div class="php_mysql_glxavor">
				<?php 
					$table = $_POST["table"]; 

					if ($table == "php_teg"){
				?>
					<div class="back_main"><a href="phphistory.php"><img src="../image/back_purple.png" alt=""></a></div>
					<div class="php_mysql_glxavor_aj php_glxavor_purple">
				<?php 
					} 
					if ($table == "mysql_function"){
				?>
					<div class="back_main"><a href="mysqlhistory.php"><img src="../image/back_green.png" alt=""></a></div>
					<div class="php_mysql_glxavor_aj mysql_glxavor_green">
				<?php } ?>

						<form action="saveaddfunc.php" method="post">
							<input type="hidden" name="table" value="<?php print $table;?>">
							<h4>Ֆունկցիայի անվանում</h4>
							<br>
							<input class="kanfetka" type="text" name="anun" value=""><br>
							<br>
							<h4>Ֆունկցիայի նկարագրություն</h4>
							<br>	
							<textarea class="kanfetka" name="bacatrutyun" type="text"></textarea><br>
							<br>
							<h4>Ֆունկցիայի օրինակներ</h4>
							<br>
							<textarea class="kanfetka" name="orinak" type="text"></textarea><br>
							<br>
							<h4>Ֆունկցիայի գույն</h4>
							<br>
							<input class="kanfetka" name="guyn" type="text" value=""><br><br>
							<?php 
								if ($table == "php_teg"){
							?>
									<button class="php_btn">Ավելացնել</button>
							<?php
								} 
								if ($table == "mysql_function"){ 
							?>
									<button class="mysql_btn">Ավելացնել</button>
							<?php } ?>
						</form>
					</div>
			</div>
		</div>
	</div>
<?php
if ($table == "php_teg"){
	include "../view/footergicpurple.php";
} 

if ($table == "mysql_function"){
	include "../view/footergicgreen.php"; 
} 
include "../view/footer.php"; 
?>


