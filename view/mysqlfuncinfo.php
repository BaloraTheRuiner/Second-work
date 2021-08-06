<?php include "session.php" ?>
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
					<input id="id" type="hidden" value="sadsadsa">
					<?php 
						$func_id = $_POST["funcId"];
						$tvyal = $diplom->query("SELECT * FROM mysql_function WHERE `id` = $func_id")->fetch_all(MYSQLI_ASSOC);
						foreach($tvyal as $value){
					?>		
					<h2 class="func_name_green"><?php print $value["func_name"] ?></h2>
					<br>
				
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

<?php include "footergicgreen.php"; ?>
<?php include "footer.php"; ?>