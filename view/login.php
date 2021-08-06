<?php include "../admin/database.php"; ?>
<?php session_start(); ?>
<?php 
	if (isset($_SESSION["id"])){
		header("Location: index.php");
	}
	if (isset($_SESSION["type"])){
		unset($_SESSION["type"]);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php $tvyal = $diplom->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC); ?>
	<div id="back_back"></div>

	<div class="content">
		<div class="inner_content">
			<div class="php_mysql_glxavor php_mysql_page">
				<div class="first_page">

					<!---------------- Մուտք ------------->
					<div class="contact_middle mutq_block">
						<form action="../admin/mutq.php" method="POST">
							<div class="form_block">
								<input name="email" type="email" placeholder="Էլ․ հասցե*" required="">
							</div>
					        <div class="form_block">
					    		<input name="password" type="password" minlength="8" placeholder="Գաղտնաբառ*" required="">
							</div>
							<div class="form_block">
								<button class="mutq">Մուտք</button>
							</div>
						</form>
						<br>
						<br>
						<hr>
						<br>
						<div class="form_block">
							<button class="het_forma">Գրանցում</button>
						</div>
					</div>
					<!----------------------------------->

					<!---------- Գրանցում --------------->
					<div class="contact_middle reg_block" hidden>
						<form action="../admin/reg.php" method="POST">
							<div class="form_block">
								<input name="anun" type="text" placeholder="Անուն*" required>
							</div>
					        <div class="form_block">
					    		<input name="azganun" type="text" placeholder="Ազգանուն*" required>
							</div>
							<div class="form_block">
								<?php if (isset($_SESSION["email_error"]) && $_SESSION["email_error"] == "Այդպիսի էլ․ հասցե գոյություն ունի"){  ?>
									<label style="color: red; padding-bottom: 6px;" for=""><?php echo $_SESSION["email_error"]; ?><br><br></label>
					    			<input style="border: 1px solid red" name="email" type="email" placeholder="Էլ․ հասցե*" required>
					    		<?php unset($_SESSION["email_error"]); } else { ?>
					    			<input name="email" type="email" placeholder="Էլ․ հասցե*" required>
					    		<?php } ?>
							</div>
							<div class="form_block">
					    		<input name="password" type="password" minlength="8" placeholder="Գաղտնաբառ*" required> 
							</div>
							<div class="form_block">
								<button class="grancum">Գրանցում</button>
							</div>
						</form>
						<br>
						<br>
						<hr>
						<br>
						<div class="form_block">
							<button class="het_forma">Մուտք</button>
						</div>
					</div>
					<!---------------------------------->

				</div>

			</div>
		</div>
	</div>


</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../js/script.js"></script>
</html>