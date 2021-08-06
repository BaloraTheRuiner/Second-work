<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<div class="up_arrow"><img src="../image/up-arrow-purple.png" alt="" width="50"></div>

	<div class="content">
		<div class="inner_content">
			<div class="php_mysql_glxavor">
				<?php include "phptegs.php"; ?>

				<div class="php_mysql_glxavor_aj php_glxavor_purple">
					<br>
					<form action="addfunc.php" method="post">
						<h3>PHP ֆունկցիա ավելացնելու համար սեղմեք հետևյալ կոճակը:
						<input type="hidden" name="table" value="php_teg">
						<button class="php_btn">Ավելացնել ֆունկցիա</button></h3>
					</form>
					<br>
					<h3>Ֆունկցիան հեռացնելու կամ փոփոխելու համար սեղմեք տվյալ ֆունկցիայի վրա:</h3>
					<div class="nkar">
						<img src="../image/elephant.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include "../view/footergicpurple.php"; ?>
<?php include "../view/footer.php"; ?>