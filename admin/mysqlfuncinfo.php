<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL ֆունկցիաներ</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<div class="content">
		<div class="inner_content">
			<div class="php_mysql_glxavor">
				<?php include "mysqlfunctions.php"; ?>
				<div class="php_mysql_glxavor_aj mysql_glxavor_green">	
					<?php 
						$func_id = $_POST["funcId"];
						$tvyal = $diplom->query("SELECT * FROM mysql_function WHERE `id` = $func_id")->fetch_all(MYSQLI_ASSOC);
						foreach($tvyal as $value){
					?>	
						<h2 class="func_name_green"><?php print $value["func_name"] ?></h2>
						<br>
						<div class="btn_div">	
							<form action="deletefunc.php" method="POST">
								<input type="hidden" name="table" value="mysql_function">
								<input type="hidden" name="delete" value="<?php print $value['id'] ?>">
								<button class="mysql_btn">Հեռացնել ֆունկցիան</button>
							</form>
							<form action="editfunc.php" method="POST">
								<input type="hidden" name="table" value="mysql_function">
								<input type="hidden" name="edit" value="<?php print $value['id'] ?>">
								<button class="mysql_btn">Խմբագրել ֆունկցիան</button>
							</form>
						</div>
						<h4>Նկարագրություն</h4>
						<hr><br>
						<?php print $value["func_bacatrutyun"] ?>

						<br><br>
						<h4>Օրինակ</h4>
						<hr><br>

						<?php print $value["func_orinak"] ?>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php include "../view/footergicgreen.php"; ?>
<?php include "../view/footer.php"; ?>