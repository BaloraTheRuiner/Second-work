<?php  include "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP և MySQL ուղեցույց</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="rectangle-block">
		<div class="title">PHP և MySQL ուղեցույց</div>
		<div class="rectangle purple-top-right">
			<?php 
			if (isset($_SESSION["anun"]) && isset($_SESSION["azganun"])){
				print("<div class='anun'>" . $_SESSION["anun"] . " " . $_SESSION["azganun"] . "</div>");	
				print("<div class='anun_img'><img src='../image/purple.png' width='100px' alt=''></div>");	
			}
			?>
		</div>
		<div class="rectangle purple-top"></div>
		<div class="rectangle green-top"></div>
		<div class="rectangle green-top-left">
			<form action="../admin/delete.php" method="POST">
				<div class="btn_delete"><button><img src="../image/delete-user.png" width="100px" alt=""></button></div>
			</form>
			<form action="../admin/elq.php" method="POST">
				<div class="btn_elq"><button><img src="../image/closed.png" width="100px" alt=""></button></div>
			</form>
		</div>
	</div>
	<div class="hexagon-block">
		<div class="hexagon purple">
			<a href="phphistory.php"><img src="../image/elephant.png" alt="" width="130px"></a>
		</div>
		<div class="hexagon purplegreen">
			<a href="phpmysqlhistory.php"><img src="../image/elpdolp.png" alt="" width="143px"></a>
		</div>
		<div class="hexagon green">
			<a href="mysqlhistory.php"><img src="../image/dolp.png" alt="" width="130px"></a>
		</div>
		<div class="hexagon yellow mp15">
			<a href="hth.php"><img src="../image/faq.png" alt="" width="150px"></a>
		</div>
		<div class="hexagon yellow mptl">
			<a href="tester.php"><img src="../image/exam.png" alt="" width="140px"></a>
		</div>
	</div>
</body>
</html>