<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<div class="up_arrow"><img src="../image/up-arrow-green.png" alt="" width="50"></div>

	<div class="content">
		<div class="inner_content">
			<div class="php_mysql_glxavor">
				<?php include "mysqlfunctions.php"; ?>
				<div class="php_mysql_glxavor_aj mysql_glxavor_green">
					<br>
					<form action="addfunc.php" method="post">
						<h3>MySQL ֆունկցիա ավելացնելու համար սեղմեք հետևյալ կոճակը:
						<input type="hidden" name="table" value="mysql_function">
						<button class="mysql_btn">Ավելացնել ֆունկցիա</button></h3>
					</form>					
					<br>
					<h3>Ֆունկցիան հեռացնելու կամ փոփոխելու համար սեղմեք տվյալ ֆունկցիայի վրա:</h3>
					<div class="nkar">
						<img src="../image/dolp.png" alt="">
					</div>	
				</div>
			
			</div>
		</div>
	</div>

<?php include "../view/footergicgreen.php"; ?>
<?php include "../view/footer.php" ?>