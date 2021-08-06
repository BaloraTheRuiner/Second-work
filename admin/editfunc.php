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
					$teg_func_id = $_POST["edit"];
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
					
					
					<?php 
						
						$tegi_tvyal = $diplom->query("SELECT * FROM $table WHERE `id` = $teg_func_id")->fetch_all(MYSQLI_ASSOC);
						foreach($tegi_tvyal as $value){
							
							if ($table == "php_teg"){
					?>
								<form action="saveedit.php" method="post">
									<input type="hidden" name="teg_func_id" value="<?php print $teg_func_id; ?>">
									<input type="hidden" name="table" value="<?php print $table; ?>">
									<h4>Ֆունկցիայի անվանում</h4>
									<br>
									<input class="kanfetka" type="text" name="anun" value="<?php print $value['teg_name'];?>"><br>
									<br>
									<h4>Ֆունկցիայի նկարագրություն</h4>
									<br>
									<textarea class="kanfetka" name="bacatrutyun" type="text"><?php print htmlspecialchars($value['teg_bacatrutyun']);?></textarea><br>
									<br>
									<h4>Ֆունկցիայի օրինակներ</h4>
									<br>
									<textarea class="kanfetka" name="orinak" type="text"><?php print htmlspecialchars($value['teg_orinak']);?></textarea><br>
									<br>
									<h4>Ֆունկցիայի գույն</h4>
									<br>
									<input class="kanfetka" name="guyn" type="text" value="<?php print $value['teg_guyn'];?>"><br><br>
									<button class="php_btn">Փոփոխել</button>
									
								</form>
							<?php } ?>
							<?php 
							if ($table == "mysql_function"){
							?>
								<form action="saveedit.php" method="post">
									<input type="hidden" name="teg_func_id" value="<?php print $teg_func_id; ?>">
									<input type="hidden" name="table" value="<?php print $table; ?>">
									<h4>Ֆունկցիայի անվանում</h4>
									<br>
									<input class="kanfetka" type="text" name="anun" value="<?php print $value['func_name'];?>"><br>
									<br>
									<h4>Ֆունկցիայի նկարագրություն</h4>
									<br>
									<textarea class="kanfetka" name="bacatrutyun" type="text"><?php print htmlspecialchars($value['func_bacatrutyun']);?></textarea><br>
									<br>
									<h4>Ֆունկցիայի օրինակներ</h4>
									<br>
									<textarea class="kanfetka" name="orinak" type="text"><?php print htmlspecialchars($value['func_orinak']);?></textarea><br>
									<br>
									<h4>Ֆունկցիայի գույն</h4>
									<br>
									<input class="kanfetka" name="guyn" type="text" value="<?php print $value['func_guyn'];?>"><br><br>
									<button class="mysql_btn">Փոփոխել</button>
								</form>
							<?php } ?>


					<?php } ?>

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