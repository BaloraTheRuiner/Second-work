<?php include "session.php" ?>
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
					<input id="id" type="hidden" value="sadsadsa">
					<?php 
						$teg_id = $_POST["tegId"];
						$tvyal = $diplom->query("SELECT * FROM php_teg WHERE `id` = $teg_id")->fetch_all(MYSQLI_ASSOC);
						foreach($tvyal as $value){
					?>	
					<h2 class="teg_name_purple"><?php print $value["teg_name"] ?></h2>
					<br>	

					<h4>Նկարագրություն</h4>
					<hr><br>
					<?php print $value["teg_bacatrutyun"] ?>

					<br><br>
					<h4>Օրինակ</h4>
					<hr><br>

					<?php print $value["teg_orinak"] ?>
<!-- ////////////////////////////////////////////////////////////////////////////// -->


<!-- <p>Կիառական է սկսած php4-ից: echo-ի միջոցով php-ն կարողանում է արտահանել բոլոր պարամետրերը, այդ թվում նաև html-ի տեգերը:Նրա կառուցվածքն այսպիսինն է</p>
<p class="span_left span_left_purple">echo ( string $arg1 [, string $...] )</p>
<p>echo() -ն իրականում ֆունկցիա չէ: Այն ծրագրային լեզվի կառուցվածքային տարր է: Եվ եթե անհրաժեշտ է մեկից ավելի պարամետրեր արտահանել   echo-ի միջոցով, ապա պարամետրերը չպետք է ներառել փակագծերի մեջ: Իսկ եթե նախապես կոնֆիգուրացիոն ֆայլում ակտիվացված է (enabled) short_open_tag պարամետրը, ապա կարելի echo-ի փոխարեն անմիջապես կիրառել
 <?php  // print htmlspecialchars('<?=$А?>'); ?>  կոդը, ուր A-ն ցանկացած փոփոխական է:</p>

<p>Այժմ դիտարկենք մի քանի օրինակ</p>


<p class="span_left span_left_purple">echo "Hello World";</p>

<p>Այս դեպքում մենք կունենանք Hello World արտահայտությունը:</p>


<p class="span_left span_left_purple">echo " Այստեղ ինչպես տեսնում եք գրված է ոչ թե մեկ տող, այլ
մի քանի տողեր: Սա նշանակում է, որ միաժամանակ կարելի է արտահանել մի քանի տող:";</p>



<p class="span_left span_left_purple">
	<span class="last_span">$Anun = "Հովհաննես";</span>
	<span class="last_span">$Azganun = "Թումանյանը";</span>
	<span class="last_span">echo "$Anun  $Azganun banastexc e:";</span>
</p>
<p>Մենք կունենանք Հովհաննես Թումանյանը banastexc e:</p>
<p>Հայերեն տառատիպերի հետ  հնարավոր է լինեն խնդիրներ, այդ պատճառով սկզբնական շրջանում ճիշտ կլինի փորձել միայն լատինատառ գրություններ, այսինքն  ASCII կոդավորման:<p>
<p>Կամ գլխավոր (main կամ index անունը կրող) ֆայլում գրել այս մետատեգը</p>
<p><?php // echo htmlspecialchars('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">')?></p> -->
<!--Այն ունի հետևյալ շարահյուսությունը։-->

<!-- ////////////////////////////////////////////////////////////////////////////// -->

<!-- <p>unset ֆունկցիան հեռացնում է փոփոխականը։ Այն ունի հետևյալ շարահյուսությունը:</p>
<p class="span_left span_left_purple">unset ( mixed $var , mixed ...$vars ) : void</p>
<p>Поведение unset() внутри пользовательской функции может отличаться, в зависимости от того, какой тип имеет переменная, которую необходимо удалить. Կախված փոփոխականի </p> -->

<!-- ////////////////////////////////////////////////////////////////////////////// -->
<!-- 

	< --- &lt;
	> --- &gt;
	date
	array_splice ?
	unset ?
	gatedate
	time
	min
	max
	rand
	floor
	pow
	sqrt
	file
	fgets
	fopen
	fclose
	feof
	rename
	unlink
	include
	require 
	break
	continue
	return
	GET
	POST
	header
	GLOBAL
	FILES
	REQUEST
	SESSION
	session_start
 -->
<!-- ////////////////////////////////////////////////////////////////////////////// -->
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php include "footergicpurple.php"; ?>
<?php include "footer.php"; ?>