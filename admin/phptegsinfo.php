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
				<?php include "phptegs.php"; ?>
				<div class="php_mysql_glxavor_aj php_glxavor_purple">	
					<?php 
						$teg_id = $_POST["tegId"];
						$tvyal = $diplom->query("SELECT * FROM php_teg WHERE `id` = $teg_id")->fetch_all(MYSQLI_ASSOC);
						foreach($tvyal as $value){
					?>	
						<h2 class="teg_name_purple"><?php print $value["teg_name"] ?></h2>
						<br>
						<div class="btn_div">	
							<form action="deletefunc.php" method="POST">
								<input type="hidden" name="table" value="php_teg">
								<input type="hidden" name="delete" value="<?php print $value['id'] ?>">
								<button class="php_btn">Հեռացնել ֆունկցիան</button>
							</form>
							<form action="editfunc.php" method="POST">
								<input type="hidden" name="table" value="php_teg">
								<input type="hidden" name="edit" value="<?php print $value['id'] ?>">
								<button class="php_btn">Խմբագրել ֆունկցիան</button>
							</form>
						</div>
						<h4>Նկարագրություն</h4>
						<hr><br>
						<?php print $value["teg_bacatrutyun"] ?>

						<br><br>
						<h4>Օրինակ</h4>
						<hr><br>

						<?php print $value["teg_orinak"] ?>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php include "../view/footergicpurple.php"; ?>
<?php include "../view/footer.php"; ?>