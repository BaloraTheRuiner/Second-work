<?php include "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP & MySQL</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	

	<div class="up_arrow"><img src="../image/up-arrow-green.png" alt="" width="50"></div>

	<div class="content">
		<div class="inner_content">
			<div class="php_mysql_glxavor">

				<div class="php_mysql_absolute_purple php_mysql_absolute_purple_left"></div>
				<div class="php_mysql_absolute_green php_mysql_absolute_green_right"></div>

				<div class="back_main"><a href="index.php"><img src="../image/back_green.png" alt=""></a></div>

				<div class="php_mysql_glxavor_aj php_mysql_glxavor_z_index">
					<br>
					<h2>PHP & MySQL-ի ուղեցույց</h2>
					<br>

					<p>Սովորաբար տվյալների բազաներն օգտագործվում են որպես տվյալների պահպանման համար: PHP-ն թույլ է տալիս օգտագործել տվյալների բազայի կառավարման տարբեր համակարգեր, բայց այսօր ամենատարածվածը PHP-ի հետ համատեղ MySQL-ն է: MySQL-ն ապահովում է անվճար ծրագրակազմ, որը թույլ է տալիս փոխազդել տվյալների բազաների հետ՝ օգտագործելով SQL հրամաններ: MySQL սերվերի հետ տվյալների փոխանակման համար (պահպանել, փոփոխել, ջնջել, ստանալ տվյալներ), մեզ, բնականաբար, տվյալների բազա է պետք: Մենք կարող ենք տվյալների բազա ստեղծել MySQL կոնսոլից, ինչպես նաև phpMyAdmin վիզուալ ինտերֆեյսից:</p>
					
					<br>
					<h2>Բովանդակություն</h2>
					<ol class="php_mysql_content taki_gic">
						<li class="parunakutyun" value="1">PHP-ի միացումը MySQL-ին</li>
						<li class="parunakutyun" value="2">phpMyAdmin</li>
						<li class="parunakutyun" value="3">Աղյուսակների ստեղծում և հեռացում</li>
						<li class="parunakutyun" value="4">Տվյալների ստացում (SELECT)</li>
						<li class="parunakutyun" value="5">Տվյալների ավելացում (INSERT)</li>
						<li class="parunakutyun" value="6">Տվյալների խմբագրում (UPDATE)</li>
						<li class="parunakutyun" value="7">Տվյալների հեռացում (DELETE)</li>

					</ol>

					

					<br>
					<h2 class="title1">PHP-ի միացումը MySQL-ին</h2>
					<br>
					<p>PHP-ից MySQL-ին միանալու համար անհրաժեշտ է նշել կապի կարգաբերումները: Սերվերի հասցեն, մուտքի, գաղտնաբառի, տվյալների շտեմարանի անունը և այլն: Քանի որ տվյալների բազաներ կապելու գործընթացում օգտագործվում են շատ սկրիպտներ, կապի կարգավորումները հաճախ տեղադրվում են առանձին ֆայլում՝ ավելի հեշտ դարձնելով դրանք արագ փոխելը:</p>
					<p>Ստեղծենք ֆայլ connection.php և դրան ավելացնենք հետևյալ տողերը.</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>$host = 'localhost'; // Սերվերի հասցե </span>
							<span>$database = 'compstore'; // բազայի անվանում</span>
							<span>$user = 'root'; // օգտվողի անվանում</span>
							<span>$password = '1234567'; // գաղտնաբառ</span>
							<span class="last_span">?&gt;</span>
						</p>
					</div>
					<p>Քանի որ մենք միանալու ենք լոկալ մեքենայի օգնությամբ, ապա սերվերի հասցեն կլինի localhost։ Լռելյայնորեն, լոկալ  MySQL սերվերն արդեն ունի root օգտվող, որով էլ պետք է միանանք։ Անհրաժեշտ է օգտագործել գաղտնաբառ, որը արդեն հայտարարված է MySQL-ում։</p>
					<p>Հիմա կարելի է միանալ տվյալների բազային։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>include 'connection.php'; // Սկրիպտի միացում</span>
							<span>// սերվերի միացում</span>
							<span>$link = mysqli_connect($host, $user, $password, $database)</span> 
							<span>or die("խնդիր " . mysqli_error($link));</span>
							<span>// միացման փակում</span>
							<span>mysqli_close($link);</span>
							<span class="last_span">?&gt;</span>
						</p>
					</div>

					<p>Միացումը բացելու համար օգտագործում ենք mysqli_connect() ֆունկցիան։ Այն ընդունում է կարգաբերման բոլոր կոնֆիգուրիացիաները և միանում է սերվերին։ Միացման սխալի դեպքում գործարկվում է die() օպերատորը, որը դուրս է բերում սխալի հաղորդագրություն և դուրս է գալիս սկրիպտից: Հաջող միացման դեպքում mysqli_connect() ֆունկցիան վերադարձնում է միացման օբյեկտը որպես $link փոփոխական:</p>
					<p>Աշխատանքն ավարտելուց հետո միացումը պետք է փակվի: Դա անելու համար օգտագործեք mysqli_close() ֆունկցիան, որը որպես պարամետր վերցնում է միացման օբյեկտը: </p>

					<br>
					<h2 class="title2">phpMyAdmin</h2>
					<br>
					<p>MySQL տվյալների բազայից ավելի հեշտ օգտվելու համար տեղադրենք phpMyAdmin հատուկ սկրիպտների հավաքածուն։ phpMyAdmin-ը տրամադրում է ինտուիտիվ վեբ ինտերֆեյս MySQL բազաների կառավարման համար: Օգտագործելով այս գործիքը, շատ ավելի հեշտ է աշխատել տվյալների բազաների հետ, քան կառավարել MySQL-ը կոնսոլից:</p>
					<p>phpMyAdmin-ը տեղադրելու համար ներբեռնեք արխիվը և դասավորենք այն C:\localhost թղթապանակում, որտեղ գտնվում են php փաստաթղթերը: Դասավորված թղթապանակը վերանվանենք phpMyAdmin՝ կարճության համար:</p>
					<p>Դասավորված phpMyAdmin թղթապանակում ստեղծեք config.inc.php ֆայլ՝ հետևյալ բովանդակությամբ.</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>$i = 0;</span>
							<span>$i++;    // առաջին սերվերի համար MySQL</span>
							<span>$cfg['Servers'][$i]['host'] = 'localhost';</span>
							<span>$cfg['Servers'][$i]['extension'] = 'mysqli';</span>
							<span>$cfg['Servers'][$i]['connect_type'] = 'tcp';</span>
							<span>$cfg['Servers'][$i]['compress'] = false;</span>
							<span>$cfg['Servers'][$i]['auth_type'] = 'config';</span>
							<span>$cfg['Servers'][$i]['user'] = 'root';</span>
							<span>$cfg['Servers'][$i]['password'] = 'mysql-ի գաղտնաբառ'; // root-ի գաղտնաբառ</span>
							<span class="last_span">?&gt;</span>
						</p>
					</div>

					<br>
					<h2 class="title3">Աղյուսակների ստեղծում և հեռացում</h2>
					<br>
					<p>Աղյուսակ ստեղծելու համար օգտագործում ենք SQL-ի "CREATE TABLE" հրամանը։  Այն ունի հետևյալ շարահյուսությունը։ Որպեսզի իրականացնենք հարցում դեպի տվյալների բազա, պետք է օգտագործենք mysqli_query() ֆունկցիան, որը ընդունում է երկու պարամետր:</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>include 'connection.php'; // Սկրիպտի միացում</span>
							<span>// սերվերի միացում</span>
							<span>$link = mysqli_connect($host, $user, $password, $database)</span>
							<span>or die("խնդիր " . mysqli_error($link));</span>
							<span>// տվյալների բազայի հարցումների կատարում</span>
							<span>$query ="CREATE Table tovars</span>
							<span>(</span>
							   <span class="last_span"><span>id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,</span></span>
							   <span class="last_span"><span>name VARCHAR(200) NOT NULL,</span></span>
							   <span class="last_span"><span>company VARCHAR(200) NOT NULL</span></span>
							<span>)";</span>
							<span>$result = mysqli_query($link, $query) or die("խնդիր " . mysqli_error($link));</span> 
							<span>if($result)</span>
							<span>{</span>
							<span class="last_span"><span>echo "հարցումների հաջող կատարում";</span></span>
							<span>}</span>
							<span>// միացման փակում</span>
							<span>mysqli_close($link);</span>
							<span class="last_span">?&gt;</span>
						</p>
					</div>

					<br>
					<h2 class="title4">Տվյալների ստացում (SELECT)</h2>
					<br>
					<p>Տվյալները ստանալու համար օգտագործվում է SQL-ի «SELECT» հրամանը։ Այն ունի հետևյալ շարահյուսությունը։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							$query ="SELECT սյունակների_ցուցակ FROM աղյուսակների_անվանում";
						</p>
					</div>
					<p>Այժմ եկեք օրինակով դիտենք տվյալների ստացումը:</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>include 'connection.php'; // Սկրիպտի միացում</span>
							<span>// սերվերի միացում</span>
							<span>$link = mysqli_connect($host, $user, $password, $database) </span>
							<span> or die("խնդիր " . mysqli_error($link));</span>
							<span>// տվյալների բազայի հարցումների կատարում</span>
							<span>$query ="SELECT * FROM tovars";</span>
							<span>$result = mysqli_query($link, $query)</span> 
							<span>or die("խնդիր " . mysqli_error($link));</span> 
							<span>if($result)</span>
							<span>{</span>
							<span class="last_span"><span>echo "հարցումների հաջող կատարում";</span></span>
							<span>}</span>
							<span>// միացման փակում</span>
							<span>mysqli_close($link);</span>
							<span class="last_span">?&gt;</span>
						</p>					
					</div>
					<p>mysqli_query() ֆունկցիան վերադարձնում է $result օբյեկտ, որը պարունակում է հարցման արդյունքը: Եթե հարցումը ​​անհաջող է, այս օբյեկտը պարունակում է false արժեք:</p>

					<br>
					<h2 class="title5">Տվյալների ավելացում (INSERT)</h2>
					<br>
					<p>Տվյալներ ավելացնելու համար օգտագործվում է SQL-ի «INSERT» հրամանը։ Այն ունի հետևյալ շարահյուսությունը։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							$query ="INSERT [INTO] աղյուսակի_անվանում [(սյունակների_ցուցակ)] VALUES (արժեք1, արժեք2, ... արժեքN)";</p>
					</div>
					<p>Եթե id սյունակը որոշված է որպես AUTO_INCREMENT, ապա դրա համար անհրաժեշտ չէ որոշակի թվային արժեք նշել, MySQL-ն ինքը սյունակին կհանձնի հաջորդ հասանելի արժեքը:</p>
					<p>Այժմ եկեք օրինակով դիտենք տվյալների ավելացումը։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>include 'connection.php'; // Սկրիպտի միացում</span>
							<span>// սերվերի միացում</span>
							<span>$link = mysqli_connect($host, $user, $password, $database) </span>
							<span> or die("խնդիր " . mysqli_error($link));</span>
							<span>// տվյալների բազայի հարցումների կատարում</span>
							<span>$query ="INSERT INTO tovars(name, company) VALUES ('Nokia 9', 'Microsoft')";</span>
							<span>$result = mysqli_query($link, $query)</span> 
							<span>or die("խնդիր " . mysqli_error($link));</span> 
							<span>if($result)</span>
							<span>{</span>
							<span class="last_span"><span>echo "հարցումների հաջող կատարում";</span></span>
							<span>}</span>
							<span>// միացման փակում</span>
							<span>mysqli_close($link);</span>
							<span class="last_span">?&gt;</span>
						</p>					
					</div>

					<br>
					<h2 class="title6">Տվյալների խմբագրում (UPDATE)</h2>
					<br>
					<p>Տվյալներ խմբագրելու համար օգտագործվում է SQL-ի «UPDATE» հրամանը։ Այն ունի հետևյալ շարահյուսությունը։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">$query = "UPDATE աղյուսակի_անվանում SET սյունակ1=նշանակություն1, ... սյունակN=նշանակությունN [WHERE պայման]";</p>
					</div>
					<p>SET-ին հաջորդում է սյունակների անվանումների ցուցակ և դրանց համար նոր արժեքներ: Հարցման տողի վերջում նշվում է սելեկտորը WHERE արտահայտության միջոցով։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>include 'connection.php'; // Սկրիպտի միացում</span>
							<span>// սերվերի միացում</span>
							<span>$link = mysqli_connect($host, $user, $password, $database) </span>
							<span> or die("խնդիր " . mysqli_error($link));</span>
							<span>// տվյալների բազայի հարցումների կատարում</span>
							<span>$query ="UPDATE tovars SET `name` = 'Samsung ACE II' WHERE id = 1";</span>
							<span>$result = mysqli_query($link, $query)</span> 
							<span>or die("խնդիր " . mysqli_error($link));</span> 
							<span>if($result)</span>
							<span>{</span>
							<span class="last_span"><span>echo "հարցումների հաջող կատարում";</span></span>
							<span>}</span>
							<span>// միացման փակում</span>
							<span>mysqli_close($link);</span>
							<span class="last_span">?&gt;</span>
						</p>					
					</div>
					<p> Այս օրինակում բոլոր տողերում որոնց մոտ id = 1 է կընդունեն name='Samsung ACE II' արժեքը։</p>

					<br>
					<h2 class="title7">Տվյալների հեռացում (DELETE)</h2>
					<br>
					<p>Տվյալները հեռացնելիս օգտագործվում է SQL-ի «DELETE» հրամանը: Այն ունի հետևյալ շարահյուսությունը։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							$query ="DELETE FROM աղյուսակի_անվանում [WHERE ջնջելու_պայմանը]";
						</p>
					</div>
					<p>Այժմ եկեք օրինակով դիտենք տվյալների հեռացումը։</p>
					<div class="p_relative">
						<div class="php_mysql_absolute_purple php_mysql_absolute_purple_all"></div>
						<div class="php_mysql_absolute_green php_mysql_absolute_green_all"></div>
						<p class="span_left">
							&lt;?php
							<span>include 'connection.php'; // Սկրիպտի միացում</span>
							<span>// սերվերի միացում</span>
							<span>$link = mysqli_connect($host, $user, $password, $database) </span>
							<span> or die("խնդիր " . mysqli_error($link));</span>
							<span>// տվյալների բազայի հարցումների կատարում</span>
							<span>$query ="DELETE FROM tovars WHERE id = 1";</span>
							<span>$result = mysqli_query($link, $query)</span> 
							<span>or die("խնդիր " . mysqli_error($link));</span> 
							<span>if($result)</span>
							<span>{</span>
							<span class="last_span"><span>echo "հարցումների հաջող կատարում";</span></span>
							<span>}</span>
							<span>// միացման փակում</span>
							<span>mysqli_close($link);</span>
							<span class="last_span">?&gt;</span>
						</p>					
					</div>
					<p>Այս դեպքում հեռացվում է 1 համար ունեցող id-ին:</p>

				</div>
			</div>
		</div>
	</div>

<?php include "footergicpurplegreen.php"; ?>
<?php include "footer.php" ?>