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
			<div class="back_main"><a href="admin.php"><img src="../image/back_yellow.png" alt=""></a></div>
			<div class="tester_hth_glxavor">
				<div class="test_glxavor php_test">
					<form action="test.php" method="post">
						<input type="hidden" name="test_type" value="php">
						<button><img src="../image/price-list-php.png" width="400px" alt=""></button>
					</form>
				</div>
				<div class="test_glxavor mysql_test">
					<form action="test.php" method="post">
						<input type="hidden" name="test_type" value="mysql">
						<button><img src="../image/price-list-mysql.png" width="400px" alt=""></button>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php include "../view/footergicyellow.php"; ?>
<?php include "../view/footer.php" ?>