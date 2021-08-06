<?php include "../admin/database.php" ?>

<div class="back_main"><a href="admin.php"><img src="../image/back_purple.png" alt=""></a></div>
<div class="php_mysql_glxavor_dzax">
	<?php $tvyal = $diplom->query("SELECT * FROM php_teg")->fetch_all(MYSQLI_ASSOC); ?>
	<form action="phptegsinfo.php" method="post">
		<a class="a_het" href="phphistory.php"><div style="background-color: #8e08ab;border:1px solid #8e08ab" class="php_tegs_mysql_func_style "><img src="../image/left-arrow.png" width="55px" alt=""></div></a>
	<?php foreach($tvyal as $value){ ?>
		<div style="background-color: <?php print $value["teg_guyn"]?>" class="php_tegs_mysql_func_style"><button style="background-color: <?php print $value["teg_guyn"]?>" class="php_tegs_mysql_func" name="tegId" value="<?php print $value["id"];?>"><b><?php print $value["teg_name"];?></b></button><br><br></div>
	<?php } ?>
	</form>
</div>
