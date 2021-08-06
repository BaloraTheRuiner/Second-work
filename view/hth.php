<?php include "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Հաճախ Տրվող Հարցեր</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<div class="content">
		<div class="inner_content">
			<div class="back_main"><a href="index.php"><img src="../image/back_yellow.png" alt=""></a></div>
			<div class="tester_hth_glxavor">
				<h2>Հաճախ Տրվող Հարցեր</h2>
				<br>
				<ul class="test_tesk">
					<li class="harc hth_tesq" value="1">Ի՞նչ է PHP-ին։</li>
					<li type="none" class="patasxan1 patasxan" hidden>PHP-ին դա սկրիպտային լեզու է, որը կարող է կառուցվել HTML-ում: Լեզվի շարահյուսությունը շատ դեպքերում փոխառված է C-ից, Java-ից և Perl-ից` հատուկ PHP  գործառույթների ավելացումով: Լեզվի նպատակն է հեշտացնել վեբ մշակողների համար դինամիկ գեներացված էջերի ստեղծումը:</li>
					<li class="harc hth_tesq" value="2">Ի՞նչ է նշանակում  PHP:</li>
					<li type="none" class="patasxan2 patasxan" hidden>PHP - PHP: Hypertext Preprocessor, իսկ հետո վերանվանվել է Personal Home Page Tools։</li>
					<li class="harc hth_tesq" value="3">Ինչպե՞ս տեղադրել PHP-ին:</li>
					<li type="none" class="patasxan3 patasxan" hidden>PHP-ն տեղադրելու համար պետք է տեղափոխվել գլխավոր կայք <a href="https://www.php.net/downloads" target="_block">https://www.php.net/downloads</a>։ Եթե օգտվողի մոտ Windows օպերացիոն համակարգ է, ապա կարող է օգտվել հետևյալ հղումից <a href="https://windows.php.net/download" target="_block">https://windows.php.net/download։</a></li>
					<li class="harc hth_tesq" value="4">Ին՞չ է մեկնաբանությունը PHP կոդում։</li>
					<li type="none" class="patasxan4 patasxan" hidden>Մեկնաբանությունները թույլ են տալիս փաստաթղթավորել կոդերի բաժինները PHP սցենարով: Մեկնաբանված տողերը չեն երևում սկրիպտի կատարման ժամանակ։</li>
					<li class="harc hth_tesq" value="5">Ինչպե՞ս օգտագործել մեկնաբանությունները PHP կոդում։</li>
					<li type="none" class="patasxan5 patasxan" hidden>Միատող մեկնաբանությունները մեկնաբանվում են // կամ # նշաններով։ Բազմատող մեկնաբանությունները մեկնաբանվում են /* և */ նշաններով։</li>
					<li class="harc hth_tesq" value="6">Ի՞նչ է MySQL-ը։</li>
					<li type="none" class="patasxan6 patasxan" hidden>MySQL-ը տվյալների բազաների սերվեր է։ MySQL-ը նկարագրվում է մեծ արագությամբ, կայունությամբ և թեթև օգտագործմամբ։</li>
					<li class="harc hth_tesq" value="7">Որտեղի՞ց կարելի է վերցնել MySQL-ը։</li>
					<li type="none" class="patasxan7 patasxan" hidden>Պաշտոնական կայքից <a href="http://www.mysql.com" target="_block">http://www.mysql.com</a> կամ <a href="http://www.mysql.ru" target="_block">www.mysql.ru</a> Download բաժնում։ Խորհուրդ է տրվում վերցնել վերջին ստաբիլ տարբերակը։</li>
					<li class="harc hth_tesq" value="8">Ինչի՞ց սկսել ուսումնասիրել MySQL-ը։</li>
					<li type="none" class="patasxan8 patasxan" hidden>Խորհուրդ է տրվում ուսումնասիրությունը սկսել փաստաթղթավորման բաժնից։ Այնտեղից դուք կվերցնեք ոչ միայն սկզբնական տեղեկություններ, այլ նաև կտիրապետեք ճիշտ աշխատաձևին։</li>
					<li class="harc hth_tesq" value="9">Ինչպե՞ս կարելի է կառավարել MySQL-ը վեբ-ինտերֆեյսի միջոցով։</li>
					<li type="none" class="patasxan9 patasxan" hidden>Դրա համար գոյություն ունի phpmyadmin միջավայրը։ Այս սկրիպտը մի քանի փոքր PHP սկրիպտների հավաքածու է, որոնք թույլ են տալիս ադմինիստրատորներին հեշտությամբ ստեղծել, կառավարել և թարմացնել MySQL տվյալների բազան: </li>
					<li class="harc hth_tesq" value="10">Ինչպե՞ս կցել MySQL-ը PHP-ին։</li>
					<li type="none" class="patasxan10 patasxan" hidden>PHP-ից MySQL-ին միանալու համար անհրաժեշտ է նշել կապի կարգաբերումները՝ <br> 
					սերվերի հասցեն, օգտագործողի անունը, գաղտնաբառը, տվյալների բազայի անունը և այլն: Քանի որ տվյալների բազայի կապերը սովորաբար օգտագործվում են շատ սկրիպտների կողմից, կապի կարգավորումները հաճախ տեղադրվում են առանձին ֆայլում՝ հեշտացնելով դրանց արագ փոփոխությունը:<br><br>
					<p class="span_left">
						&lt;?php 
							<span>$host = "localhost"; // սերվերի հասցե</span> 
							<span>$database = "compstore"; // բազայի անուն</span> 
							<span>$user = "root"; // օգտագործողի անուն</span> 
							<span>$password = "1234567"; // գաղտնաբառ'</span>
						<span class="last_span">?&gt;</span>
					</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

<?php include "footergicyellow.php"; ?>
<?php include "footer.php" ?>