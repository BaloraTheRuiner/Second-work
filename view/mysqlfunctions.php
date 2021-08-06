<?php include "../admin/database.php" ?>

<div class="back_main"><a href="index.php"><img src="../image/back_green.png" alt=""></a></div>
<div class="php_mysql_glxavor_dzax">
	<?php $tvyal = $diplom->query("SELECT * FROM mysql_function")->fetch_all(MYSQLI_ASSOC); ?>
	<form action="mysqlfuncinfo.php" method="post">
		<a class="a_het" href="mysqlhistory.php"><div style="background-color: #018174;border:1px solid #018174" class="php_tegs_mysql_func_style "><img src="../image/left-arrow.png" width="55px" alt=""></div></a>
	<?php foreach($tvyal as $value){ ?>
		<div style="background-color: <?php print $value["func_guyn"]?>;border:1px solid #018174" class="php_tegs_mysql_func_style"><button style="background-color: <?php print $value["func_guyn"]?>" class="php_tegs_mysql_func" name="funcId" value="<?php print $value["id"];?>"><b><?php print $value["func_name"];?></b></button><br><br></div>
	<?php } ?>
	</form>
</div>
