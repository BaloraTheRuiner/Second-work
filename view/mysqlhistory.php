<?php include "session.php" ?>
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
					<h2>MySQL-ի ուղեցույց</h2>
					<br>
					
					
					<h2>Բովանդակություն</h2>
					<ol class="php_mysql_content taki_gic">
						<li class="parunakutyun" value="1">Ի՞նչ է MySQL-ը</li>
						<li class="parunakutyun" value="2">Տվյալների կառուցվածքի որոշում</li>
						<li class="parunakutyun" value="3">Ներկառուցված ֆունկցիաներ</li>
					</ol>

					<br>
					<h2 class="title1">Ի՞նչ է MySQL-ը</h2>
					<br>

					<h4>MYSQL-ի համառոտ պատմություն</h4>
					<br>
					<p>DBMS-ի նախնական մշակողը եղել է շվեդական MySQL AB ընկերությունը: 1995-ին նա թողարկեց MySQL-ի առաջին մակետը: 2008-ին MySQL AB-ը ձեռք բերվեց Sun Microsystems-ի կողմից, իսկ 2010-ին Oracle-ը ձեռք բերեց Sun-ը և դրանով իսկ ձեռք բերեց MySQL ապրանքային նշանի իրավունքները: Հետևաբար, MySQL-ն այսօր զարգանում է Oracle-ի հովանու ներքո:</p>
					<p>DBMS-ի ներկայիս արդի տարբերակը 8.0-ն է, որը թողարկվել է 2018-ի հունվարին: MySQL-ը բազմապլատֆորմային է, կան բաշխումներ տարբեր գործառնական համակարգերի համար, ներառյալ Linux-ի, Windows-ի, MacOS-ի ամենատարածված տարբերակները:.</p>
					<p>Ծրագրի պաշտոնական կայքն է․ <a href="https://www.mysql.com/." target="_block">https://www.mysql.com/.</a></p>
					<br>

					<h4>Այսպիսով, ի՞նչ է իրականում MySQL-ը:</h4>
					<br>
					<p>Այն ունի իր ծրագրային լեզվի սինտաքսիսը, առանձնահատկությունները:</p>
					<p>Սովորաբար MySQL-ը առանձին չի օգտագործվում, այն լայնորեն կիրառվում է web ծրագրավորման բնագավառում տվյալների հուսալի բազա ստեղծելու և դրանից օգտվելու համար:</p>
					<p>Բազմաթիվ սերվերային ծրագրերի հետ համատեղելի է, բայց շատերը համարում են, որ MySQL-ը ստեղծված է PHP-ի համար: MyQSL-ի հիմնական առավելություններն են նրա աշխատանքային արագությունը, բազմահոսքությունը, ինտերակտիվ կառավարման ճկունությունը, անվտանգությունը:</p>
					<p>Այն տալիս է հնարավորություն կազմել մեծածավալ աղյուսակներ հիերարխիկ բնույթի, տվյալները խմբավորել ըստ զանազան գործոնների, հաստատել կապ տարբեր տվյալների միջև, աշխատել տվյալնեի տարբեր տիպերի հետ (թվային, տեքստային, բինարային, ամսաթվային և այլն):</p>
					<br>
					
					<h2 class="title2">Տվյալների կառուցվածքի որոշում</h2>
					<br>

					<h4>Տվյալների բազաների ստեղծում և ջնջում</h4>
					<br>
					<p>Տվյալների բազան ստեղծելու համար օգտագործվում է CREATE DATABASE հրամանը: Այն ունի հետևյալ շարահյուսությունը.:</p>
					<p>Առաջին ձևը (CREATE DATABASE բազայի_անվանում) փորձում է ստեղծել տվյալների բազա, բայց եթե այդպիսի տվյալների բազա արդեն գոյություն ունի, գործողությունը կվերադարձնի սխալ:</p>
					<p class="span_left span_left_green">
						<span>CREATE DATABASE բազայի_անվանում;</span>
					</p>
					<p>Երկրորդ ձևը (CREATE DATABASE IF NOT EXISTS բազայի_անվանում) փորձում է ստեղծել տվյալների բազա, եթե սերվերում չկա նույն անունով տվյալների բազա:</p>
					<p class="span_left span_left_green">
						<span>CREATE DATABASE [IF NOT EXISTS] բազայի_անվանում;</span>
					</p>
					<p>Հրամանն ավարտվում է տվյալների շտեմարանի անունով: </p>
					<p>Տվյալների բազան ջնջելու համար օգտագործվում է DROP DATABASE հրամանը, որն ունի հետևյալ շարահյուսությունը.</p>
					<p>Առաջին ձևը (DROP DATABASE  բազայի_անվանում) փորձում է բազան ջնջել, բայց եթե սերվերում այդպիսի տվյալների շտեմարան գոյություն չունի, գործողությունը կվերադարձնի սխալ:</p>
					<p class="span_left span_left_green">
						<span>DROP DATABASE  բազայի_անվանում;</span>
					</p>
					<p>Երկրորդ ձևը (DROP DATABASE IF EXISTS բազայի_անվանում) փորձում է բազան ջնջել, եթե սերվերն ունի նույն անունով բազա:</p>
					<p class="span_left span_left_green">
						<span>DROP DATABASE [IF EXISTS] բազայի_անվանում;</span>
					</p>
					<br>

					<h4>Աղյուսակների ստեղծում և ջնջում</h4>
					<br>
					<p>Աղյուսակներ ստեղծելու համար օգտագործվում է CREATE TABLE հրամանը: Այս հրամանն օգտագործում է մի շարք օպերատորներ, որոնք սահմանում են աղյուսակի սյուններն ու դրանց հատկությունները:Ընդհանուր ֆորմալ գրելաձև CREATE TABLE:</p>
					<p class="span_left span_left_green">
						<span>CREATE TABLE աղյուսակի_անվանում</span>
						<span>(սյան_անվանում1 տվյալների_տեսակը սյան_հատկանիշներ1,</span>
						<span>սյան_անվանում2  տվյալների_տեսակը սյան_հատկանիշներ2,</span>
						<span>................................................</span>
						<span>սյան_անվանումN տվյալների_տեսակը սյան_հատկանիշներN,</span>
						<span>атрибуты_уровня_таблицы</span>
						<span>)</span>
					</p>
					<p>CREATE TABLE հրամանին հաջորդում է աղյուսակի անվանումը: Աղյուսակի անվանումը իդենտիֆիկատորի դեր է կատարում տվյալների բազայում, ուստի այն պետք է եզակի լինի: Այնուհետև փակագծերում նշվում են սյունների անունները, դրանց տվյալների տեսակները և հատկանիշները:
					</p>
					<p>Եթե ​​աղյուսակ ստեղծելուց հետո ցանկանում ենք վերանվանել այն, ապա դրա համար հարկավոր է օգտագործել RENAME TABLE հրամանը․</p>
					<p class="span_left span_left_green">
						<span>RENAME TABLE հին_անվանում TO նոր_անվանում;</span>
					</p>
					<p>Տվյալներն ամբողջությամբ ջնջելու համար, պետք է օգտագործել TRUNCATE TABLE հրամանը</p>
					<p class="span_left span_left_green">
						<span>TRUNCATE TABLE աղյուսակի_անվանում;</span>
					</p>
					<p>Տվյալների բազայից աղյուսակ ջնջելու համար օգտագործեք DROP TABLE հրամանը, որից հետո նշվում է ջնջվող աղյուսակի անվանումը:</p>
					<p class="span_left span_left_green">
						<span>DROP TABLE աղյուսակի_անվանում;</span>
					</p>
					<br>

					<h4>MySQL տվյալների տեսակները</h4>
					<br>
					<p>Աղյուսակի սյունները որոշելիս պետք է նշել տվյալների տեսակը նրանց համար: Յուրաքանչյուր սյունակ պետք է ունենա տվյալների տեսակ: Տվյալների տեսակը որոշում է, թե ինչ արժեքներ կարող են պահվել սյունակում, որքան տեղ են նրանք կզբաղեցնեն հիշողության մեջ:</p>
					<p>MySQL-ը ներկայացնում է տվյալների հետևյալ տեսակները, որոնք կարող են դասակարգվել մի շարք խմբերի:</p>
					<br>

					<p><b>Սիմվոլային տիպեր</b></p>

					<ol class="php_mysql_content">
						<li><b>CHAR։</b> Ֆիքսված երկարությամբ տող է, որն ունի 1-ից 255 սիմվոլ։</li>
						<li><b>VARCHAR։</b> Փոփոխվող երկարությամբ տող է, որն ունի 1-ից 255 սիմվոլ։VARCHAR դաշտ ստեղծելիս պետք է որոշենք երկարությունը:</li>
						<li><b>TINYTEXT։</b> Ներկայացնում է տեքստ մինչև 255 բայթ։</li>
						<li><b>TEXT։</b> Ներկայացնում է տեքստ մինչև 65 ԿԲ երկարությամբ:</li>
						<li><b>MEDIUMTEXT։</b> Ներկայացնում է տեքստ մինչև 16 ՄԲ։</li>
						<li><b>LARGETEXT։</b> Ներկայացնում է տեքստ մինչև 4 ԳԲ երկարություն։</li>
					</ol>

					<p><b>Թվային տիպեր</b></p>

					<ol class="php_mysql_content">
						<li><b>TINYINT։</b> Շատ փոքր ամբողջ թիվ է, որը կարող է ունենալ նշան (signed) կամ լինել առանց նշանի (unsigned): Եթե ունի նշան, ապա թույլատրելի արժեքների միջակայքը –128-ից 127-ն է, եթե առանց նշանի է` 0-ից 255-ը: Կարելի է նշել մինչև քառանիշ թիվ:</li>
						<li><b>BOOL։</b> Ըստ էության, այն չի ներկայացնում առանձին տեսակ, այլ միայն կեղծանուն է TINYINT (1) տիպի համար և կարող է պահպանել երկու արժեք 0 և 1։ Սակայն այս տեսակը կարող է նաև վերցնել ներկառուցված հաստատունները TRUE (ներկայացնում է թիվ 1) և FALSE (տրամադրում է 0 թիվը) որպես արժեք:</li>
						<li><b>TINYINT UNSIGNED:</b> Ներկայացնում է 0-ից 255 ամբողջ թվեր, զբաղեցնում է 1 բայթ։</li>
						<li><b>SMALLINT:</b> Ներկայացնում է ամբողջ թվեր -32768-ից 32767, զբաղեցնում է 2 բայթ։</li>
						<li><b>SMALLINT UNSIGNED:</b> Ներկայացնում է 0-ից 65535 ամբողջական թվեր, զբաղեցնում է 2 բայթ։</li>
						<li><b>MEDIUMINT:</b> Ներկայացնում է ամբողջ թվեր -8388608- ից 8388607, զբաղեցնում է 3 բայթ։</li>
						<li><b>MEDIUMINT UNSIGNED:</b> Ներկայացնում է 0-ից 16777215 ամբողջ թվեր, զբաղեցնում է 3 բայթ։</li>
						<li><b>INT:</b> ներկայացնում է ամբողջ թվեր -2147483648- ից 2147483647, զբաղեցնում է 4 բայթ։</li>
						<li><b>INT UNSIGNED:</b> Ներկայացնում է 0-ից 4294967295 ամբողջ թվեր, զբաղեցնում է 4 բայթ։</li>
						<li><b>BIGINT:</b> Ներկայացնում է ամբողջ թվեր -9 223 372 036 854 775 808-ից 9 223 372 036 854 775 807 թվերից, զբաղեցնում է 8 բայթ։</li>
						<li><b>BIGINT UNSIGNED:</b> Ներկայացնում է 0-ից 18 446 744 073 709 551 615 ամբողջ թվեր, զբաղեցնում է 8 բայթ։
						</li>
						<li><b>DECIMAL:</b> Թվերը պահում է ֆիքսված ճշգրտությամբ: Այս տիպը կարող է ստանալ երկու պարամետր՝ precision և scale:</b> DECIMAL(precision, scale)։</li>
						<li><b>FLOAT:</b> Պահպանում է մեկ ճշգրիտ սահող կետի համարները -3.4028 * 1038-ից 3.4028 * 1038, զբաղեցնում է 4 բայթ։ Կարող է ունենալ FLOAT (M, D) ձևը, որտեղ M թվանշանների ընդհանուր թիվն է, իսկ D տասնանիշից հետո թվանշանների քանակը:</li>
						<li><b>DOUBLE:</b> Կրկնակի ճշգրիտ սահող կետերի համարները պահում է -1.7976 * 10308- ից 1.7976 * 10308, զբաղեցնում է 8 բայթ: Այն կարող է նաև ունենալ DOUBLE (M, D) ձև, որտեղ M թվանշանների ընդհանուր թիվն է, իսկ D ՝ տասնորդական կետից հետո թվանշանների քանակը։</li>
					</ol>
					
					<p><b>Ամսաթվի և ժամի հետ աշխատելու տիպերը</b></p>

					<ol class="php_mysql_content">
						<li><b>DATE:</b> Ամսաթիվն է YYYY-MM-DD ձևաչափով 1000-01-01-ի և 9999-12-31-ի միջև, զբաղեցնում է 3 բայթ։ Օրինակ` 1973 թվականի դեկտեմբերի 30-ը կլինի 1973-12-30: </li>
						<li><b>TIME:</b> Ժամանակը պահվում է HH:MM:SS ձևաչափով, զբաղեցնում է 3 բայթ։</li>
						<li><b>DATETIME:</b> Ամսաթիվի և ժամանակի համադրությունն է YYYY-MM-DD HH:MM:SS ձևաչափով 1000-01-01 00:00:00-ի և 9999-12-31 23:59:59-ի միջև, զբաղեցնում է 8 բայթ։</li>
						<li><b>TIMESTAMP:</b> Ամսաթիվի և ժամանակի նշումն է YYYYMMDDHHMMSS ձևաչափով 1970 թվականի հունվարի 1-ի կեսգիշերի և 2037 թվականի ինչ-որ ժամանակի միջև, զբաղեցնում է 4 բայթ։</li>
						<li><b>YEAR:</b>  Տարին պահպանում է երկնիշ կամ քառանիշ ձևաչափով: Եթե երկարությունը սահմանվել է 2 (օրինակ` YEAR(2)), YEAR-ը կարող է լինել 1970-ից 2069 (70-ից 69): Եթե երկարությունը սահմանել ենք 4, YEAR-ը կարող է լինել 1901-ից 2155, զբաղեցնում է 1 բայթ։</li>
					</ol>

					<p><b>Բինար տիպեր</b></p>

					<ol class="php_mysql_content">
						<li><b>TINYBLOB:</b> Բինար տվյալները պահպանում են, որպես տող մինչև 255 բայթ:</li>
						<li><b>BLOB:</b> Բինար տվյալները պահում են, որպես 65KB երկարության տող:</li>
						<li><b>MEDIUMBLOB:</b> Պահպանում է բինար տվյալները, որպես տող մինչև 16ՄԲ։</li>
						<li><b>LARGEBLOB:</b> Պահպանում է բինար տվյալները,որպես տող մինչև 4 Գբ երկարության։</li>
					</ol>

					<h4>Աղյուսակների և սյունակների հատկանիշները</h4>
					<br>
					<p>Հատկանիշների օգնությամբ կարող ենք կարգավորել սյունակները։</p>
					Օրինակ՝
					<p class="span_left span_left_green">
						<span>CREATE TABLE Customers</span>
						<span>(</span>
					    <span><span>Id INT PRIMARY KEY AUTO_INCREMENT,</span></span>
					    <span><span>Age INT DEFAULT 18,</span></span>
					    <span><span>FirstName VARCHAR(20) NOT NULL,</span></span>
					    <span><span>LastName VARCHAR(20) NULL,</span></span>
					    <span><span>Email VARCHAR(30) CHECK(Email !=''),</span></span>
					    <span><span>Phone VARCHAR(13) UNIQUE</span></span>
						<span>);</span>
					</p>

					<ol class="php_mysql_content">
						<li><b>PRIMARY KEY:</b> Նշում է աղյուսակի հիմնական բանալին:</li>
						<li><b>AUTO_INCREMENT:</b> Թույլ է տալիս հստակեցնել, որ սյունակի արժեքը ավտոմատ կերպով կավելացվի, երբ նոր տող ավելացվի:</li>
						<li><b>UNIQUE:</b> Նշում է, որ սյունակը կարող է պահպանել միայն եզակի արժեքներ:</li>
						<li><b>NULL и NOT NULL:</b> Սյունակը կարող է լինել զրո, սյունը սահմանելիս կարող եք սյունակի հատկությունը դնել NULL կամ NOT NULL: Եթե ​​այս հատկանիշը հստակորեն չի օգտագործվել, ապա սյունակը լռելյայն կլինի անվավեր:</li>
						<li><b>DEFAULT:</b> Որոշում է սյունակի լռելյայն արժեքը: Եթե ​​տվյալներ ավելացնելիս սյունակի համար արժեք չի տրամադրվում, դրա համար կկիրառվի լռելյայն արժեք:</li>
						<li><b>CHECK:</b> Սյունակում սահմանում է արժեքների տիրույթի սահմանափակում: Դա անելու համար, CHECK-ից հետո, փակագծում նշվում է մի պայման, որը սյունը կամ մի քանի սյունակները պետք է համապատասխանեն:</li>
					</ol>

					<h2 class="title3">Ներկառուցված ֆունկցիաներ</h2>
					<br>
					<h4>Տողերի հետ աշխատելու ֆունկցիաներ</h4>
					
					<ol class="php_mysql_content">
						<li><b>CONCAT։</b> Միացնում է տողերը: Որպես պարամետր, այն ընդունում է 2 կամ ավելի տողեր, որոնք պետք է միացված լինեն:
							<p class="span_left span_left_green">
								<span>SELECT CONCAT('Tom', ' ', 'Smith')  -- Tom Smith</span>
							</p>
						</li>
						<li><b>CONCAT_WS։</b> Նույնպես միացնում է տողերը, բայց առաջին պարամետրով ստանում է առանձնացնող գործողություն, որը կմիացնի տողերը:
							<p class="span_left span_left_green">
								<span>SELECT CONCAT_WS(' ', 'Tom', 'Smith', 'Age:', 34)  -- Tom Smith Age: 34</span>
							</p>
						</li>
						<li><b>LENGTH։</b> Վերադարձնում է տողի նիշերի քանակը: Որպես պարամետր, ֆունկցիային փոխանցվում է տող, որի համար անհրաժեշտ է գտնել երկարությունը։
							<p class="span_left span_left_green">
								<span>SELECT LENGTH('Tom Smith')  -- 9</span>
							</p>
						</li>
						<li><b>LTRIM։</b> Ջնջում է սկզբնական բացատները տողից։ Ինչպես պարամետր ընդունում է տող։
							<p class="span_left span_left_green">
								<span>SELECT LTRIM('  Apple')</span>
							</p>
						</li>
						<li><b>RTRIM:</b> Ջնջում է վերջնական բացատները տողից։ Ինչպես պարամետր ընդունում է տող:
							<p class="span_left span_left_green">
								<span>SELECT RTRIM(' Apple    ')</span>
							</p>
						</li>
						<li><b>TRIM:</b> Ջնջում է սկզբնական և վերջնական բացատները տողից։ Ինչպես պարամետր ընդունում է տող:
							<p class="span_left span_left_green">
								<span>SELECT TRIM('  Tom Smith   ')</span>
							</p>
						</li>
						<li><b>LOCATE(find, search [, start])։</b> Վերադարցնում է դիրքը առաջի մուտքի ենթատողի find-ից search տող։ start լրացուցիչ պարամետրը թույլ է տալիս նշել դիրքը search տողում, որից սկսվում է փնտրվել find ենթատողը։ Եթե search ենթատողը չի գտնվում, ապա վերադարձվում է 0։
							<p class="span_left span_left_green">
								<span>SELECT LOCATE('om', 'Tom Smith');       -- 2</span>
								<span>SELECT LOCATE('m', 'Tom Smith');        -- 3</span>
								<span>SELECT LOCATE('m', 'Tom Smith', 4);     -- 6</span>
								<span>SELECT LOCATE('mig', 'Tom Smith');      -- 0</span>
							</p>
						</li>
						<li><b>LEFT։</b> Տողի սկզբից կտրում է որոշված քանակությամբ սիմվոլներ։ Ֆունկցիայի առաջին պարամետրը տող է, իսկ երկրորդ ֆունկցիան սիմվոլներ քանակությունը, որոնք պետք է կտրել տողի սկզբից:
							<p class="span_left span_left_green">
								<span>SELECT LEFT('Apple', 3) -- App</span>
							</p>
						</li>
						<li><b>RIGHT։</b> Տողի վերջից կտրում է որոշված քանակությամբ սիմվոլներ։ Ֆունկցիայի առաջին պարամետրը տող է, իսկ երկրորդ ֆունկցիան սիմվոլներ քանակությունը, որոնք պետք է կտրել տողի վերջից:
							<p class="span_left span_left_green">
								<span>SELECT RIGHT('Apple', 3)    -- ple</span>
							</p>
						</li>
						<li><b>SUBSTRING(str, start [, length])։</b> Տողից կտրում է str ենթատողը, սկսած start դիրքից. Երրորդ ոչ կարևոր պարամետրը փոխանցում է կտրվող սիմվոլների քանակը։
							<p class="span_left span_left_green">
								<span>SELECT SUBSTRING('Galaxy S8 Plus', 8),          -- S8 Plus</span>
								<span>(SELECT SUBSTRING('Galaxy S8 Plus', 8, 2) );    -- S8</span>
							</p>
						</li>
						<li><b>SUBSTRING_INDEX(str, delimiter, count)։</b> Տողից կտրում է str ենթատողը։ delimiter պարամետր-ը որոշում է կտրել տողի մեջ։ count պարամետրը որոշում է միջև որտեղ կտրել ենթատողը. Եթե count-ը դրական է, ապա ենթատողը կտրվում է սկզբից, եթե count-ը բացասական է, ապա str տողի վերջից:
							<p class="span_left span_left_green">
								<span>SELECT SUBSTRING_INDEX('Galaxy S8 Plus', ' ', 1),           -- Galaxy</span>
								<span>(SELECT SUBSTRING_INDEX('Galaxy S8 Plus', ' ', 2) ),        -- Galaxy S8</span>
								<span>(SELECT SUBSTRING_INDEX('Galaxy S8 Plus', ' ', -2) );           -- S8 Plus</span>
							</p>
						</li>
						<li><b>REPLACE(search, find, replace):</b> Փոխարինում է find տողում  search ենթատողը replace ենթատողով։ Ֆունկցիայի առաջին պարամետրը տող է, երկրորդը և երրորդը փոխարինվող ենթատողեր։
							<p class="span_left span_left_green">
								<span>SELECT REPLACE('Galaxy S8 Plus', 'S8 Plus', 'Note 8')   -- Galaxy Note 8</span>
							</p>
						</li>
						<li><b>INSERT(str, start, length, insert)։</b> Տեղադրում է str տողը, փոխարինելով length սիմվոլները start  դիրքով և insert ենթատողով. Առաջին ֆունկցիայի պարամետրը տողն է, երկրորդը դիրքը, որով պետք է փոխարինել,երրորդ թե քանի սիմվոլ start դիրքից պետք է փոխարինել միացվող ենթատողով, չորրորդ պարամետրը դա միացվող ենթատողն է:
							<p class="span_left span_left_green">
								<span>SELECT INSERT('Galaxy S9', 8, 3, 'Note 9');   -- Galaxy Note 9</span>
							</p>
						</li>
						<li><b>REVERSE։ </b> Սարքում է տողը հակարակ ուղղությամբ:
							<p class="span_left span_left_green">
								<span>SELECT REVERSE('123456789') -- 987654321</span>
							</p>
						</li>
						<li><b>LOWER։</b> Տողը վերափոխում է փոքրատառի:
							<p class="span_left span_left_green">
								<span>SELECT LOWER('Apple')   -- apple</span>
							</p>
						</li>
						<li><b>UPPER։</b> Տողը վերափոխում է մեծատառի:
							<p class="span_left span_left_green">
								<span>SELECT UPPER('Apple')   -- APPLE</span>
							</p>
						</li>
						<br><li><b>SPACE։</b> Վերադարձնում է տող, որը պարունակում է նշված քանակի բացատներ:</li><br>
						<li><b>REPEATE(str, count)։</b> Վերադարձնում է տող, որը պարունակում է նշված քանակի կրկնվող str ենթատողեր։
							<p class="span_left span_left_green">
								<span>SELECT REPEAT('ab', 5);   -- ababababab</span>
							</p>
						</li>
						<li><b>LPAD(str, length, pad)։</b> str տողի ձախից ավելացնում է որոշակի քանակությամբ սիմվոլներ, որոնք որոշված են pad պարամետրում։ Ավելացվող սիմվոլների քանակը հաշվվում է հետևյալ ֆունկցիայով length - LENGTH(str)։
							<p class="span_left span_left_green">
								<span>SELECT LPAD('Tom Smith', 13, '*');   -- ****Tom Smith</span>
							</p>
						</li>
						<li><b>RPAD(str, length, pad)։</b> str տողի աջից ավելացնում է որոշակի քանակությամբ սիմվոլներ, որոնք որոշված են pad պարամետրում։ Ավելացվող սիմվոլների քանակը հաշվվում է հետևյալ ֆունկցիայով length - LENGTH(str)։
							<p class="span_left span_left_green">
								<span>SELECT RPAD('Tom Smith', 13, '*');   -- Tom Smith****</span>
							</p>
						</li>
					</ol>

					<h4>Թվերի հետ աշխատելու ֆունկցիաներ</h4>
					<ol class="php_mysql_content">
						<li><b>ROUND:</b> Կլորացնում է թիվը։ Որպես առաջին պարամետր ընդունվում է մի թիվ: Երկրորդ պարամետրը նշում է երկարությունը: Եթե ​​երկարությունը դրական թիվ է, ապա այն ցույց է տալիս, թե մինջև որ թիվը կլորացնել ստորակետից հետո, Եթե ​​երկարությունը բացասական թիվ է, ապա դա ցույց է տալիս, թե մինջև որ թիվը կլորացնել թվի վերջից մինջև ստորակետ։
							<p class="span_left span_left_green">
							<span>SELECT ROUND(1342.345, 2),      -- 1342.35</span>
							<span>(SELECT ROUND(1342.345, -2));   -- 1300;</span>				  			
							</p>
						</li>
						<li><b>TRUNCATE:</b> Կոտորակային մասում թողնում է սիմվոլների որոշակի քանակ:
							<p class="span_left span_left_green">
							<span>SELECT TRUNCATE(1342.345, 2);       -- 1342.34</span>				  			
							</p>
						</li>
						<li><b>ABS:</b> Վերադարձնում է թվի բացարձակ արժեքը։
							<p class="span_left span_left_green">
							<span>SELECT ABS(-123)    -- 123</span>				  			
							</p>
						</li>
						<li><b>CEILING:</b> Վերադարձնում է ամենափոքր ամբողջ թիվը, որը մեծ կամ հավասար է ընթացիկ արժեքին:
							<p class="span_left span_left_green">
							<span>SELECT CEILING(-123.45),        -- -123</span>
							<span>(SELECT CEILING(123.45));       -- 124</span>				  			
							</p>
						</li>
						<li><b>FLOOR։</b> Վերադարձնում է ամենամեծ ամբողջ թիվը, որը փոքր կամ հավասար է ընթացիկ արժեքին:
							<p class="span_left span_left_green">
							<span>SELECT FLOOR(-123.45),      -- -124</span>
							<span>(SELECT FLOOR(123.45));     -- 123</span>				  			
							</p>
						</li>
						<li><b>POWER։</b> Թիվը բարձրացնում է որոշակի աստիճանով։
							<p class="span_left span_left_green">
							<span>SELECT POWER(5, 2),     -- 25</span>
							<span>(SELECT POWER(5, 3));       -- 125</span>				  			
							</p>
						</li>
						<li><b>SQRT։</b> Ստանում է թվի քառակուսի արմատը:
							<p class="span_left span_left_green">
							<span>SELECT SQRT(225);       -- 15</span>				  			
							</p>
						</li>
						<li><b>SIGN։</b> Վերադարձնում է -1, եթե թիվը փոքր է 0-ից, և վերադարձնում է 1, եթե թիվը մեծ է 0-ից: Եթե թիվը 0 է, ապա այն վերադարձնում է 0:
							<p class="span_left span_left_green">
							<span>SELECT SIGN(-5),        -- -1</span>
								<span>(SELECT SIGN(7));       -- 1</span>				  			
							</p>
						</li>
						<li><b>RAND։</b> Առաջացնում է պատահական սահող կետով թիվ 0-ից 1-ի սահմաններում:
							<p class="span_left span_left_green">
							<span>SELECT RAND();      -- 0.707365088352935</span>
							<span>SELECT RAND();      -- 0.173808327956812</span>				  			
							</p>
						</li>
					</ol>

					<h4>Ամսաթվերի և ժամերի հետ աշխատելու ֆունկցիաներ</h4>
					<br>
					<p><b>Ամսաթվերի և ժամերի ստացումը</b></p>
					<ol class="php_mysql_content">
						<li><b>NOW(), SYSDATE(), CURRENT_TIMESTAMP():</b> Վերադարձնում են ընթացիկ տեղական ամսաթիվը և ժամանակը `հիմնվելով համակարգի ժամացույցի վրա, որպես datetime օբյեկտ։ Բոլոր երեք ֆունկցիաները վերադարձնում են նույն արժեքը։
						<p class="span_left span_left_green">
								<span>SELECT NOW();               -- 2018-05-25 21:34:55</span>
								<span>SELECT SYSDATE();           -- 2018-05-25 21:34:55</span>
								<span>SELECT CURRENT_TIMESTAMP(); -- 2018-05-25 21:32:55</span>
							</p>
						</li>
						<li>
							<b>CURDATE и CURRENT_DATE:</b> Վերադարձնում են ընթացիկ տեղական ամսաթիվը date օբյեկտի տեսքով:
							<p class="span_left span_left_green">
								<span>SELECT CURRENT_DATE();      -- 2018-05-25</span>
								<span>SELECT CURDATE();           -- 2018-05-25</span>
							</p>
						</li>
						<li>
							<b>CURTIME и CURRENT_TIME:</b> Վերադարձնում են ընթացիկ ժամանակը time օբյեկտի տեսքով:
							<p class="span_left span_left_green">
								<span>SELECT CURRENT_TIME();  -- 20:47:45</span>
								<span>SELECT CURTIME();       -- 20:47:45</span>
							</p>
						</li>
						<li>
							<b>UTC_DATE։</b> Վերադարձնում է ընթացիկ տեղական ամսաթիվը GMT-ի համեմատ:
							<p class="span_left span_left_green">
								<span>SELECT UTC_DATE();      -- 2018-05-25</span>
							</p>
						</li>
						<li>
							<b>UTC_TIME։</b> Վերադարձնում է ընթացիկ տեղական ժամանակը GMT-ի համեմատ:
							<p class="span_left span_left_green">
								<span>SELECT UTC_TIME();      -- 17:47:45</span>
							</p>
						</li>
					</ol>

					<p><b></b></p>

					<ol class="php_mysql_content">
						<li><b>DAYOFMONTH(date):</b> Վերադարձնում է ամսվա օրը՝ որպես թվային արժեք։</li>
						<li><b>DAYOFWEEK(date):</b> Վերադարձնում է շաբաթվա օրը՝ որպես թվային արժեք։</li>
						<li><b>DAYOFYEAR(date):</b> Վերադարձնում է տարվա օրվա համարը։</li>
						<li><b>MONTH(date):</b> Վերադարձնում է ամսաթվի ամիսը։</li>
						<li><b>YEAR(date):</b> Վերադարձնում է տարին ամսաթվից։</li>
						<li><b>QUARTER(date):</b> Վերադարձնում է տարվա եռամսյակի համարը։</li>
						<li><b>WEEK(date [, first]):</b> Վերադարձնում է տարվա շաբաթվա համարը: Ոչ կարևոր պարամետրը թույլ է տալիս սահմանել շաբաթվա սկզբնական օրը: Եթե ​​այդ պարամետրը 1 է, ապա առաջին օրը համարվում է երկուշաբթի, այլապես կիրակի։</li>
						<li><b>LAST_DAY(date):</b> Վերադարձնում է ամսվա վերջին օրը՝ որպես ամսաթիվ։</li>
						<li><b>DAYNAME(date):</b> Վերադարձնում է շաբաթվա օրվա անունը։</li>
						<li><b>MONTHNAME(date):</b> Վերադարձնում է ընթացիկ ամսվա անունը։</li>
						<li><b>HOUR(time):</b> Վերադարձնում է ժամանակի ժամը։</li>
						<li><b>MINUTE(time):</b> Վերադարձնում է ժամանակի րոպեն։</li>
						<li><b>SECOND(time):</b> Վերադարձնում է ժամանակի վայրկյանը։</li>
					</ol>

					<h4>CASE, IF, IFNULL, COALESCE ֆունկցիաները</h4>
					
					<ol class="php_mysql_content">
						<li><b>CASE։</b> CASE ֆունկցիան ստուգում է մի շարք պայմանների ճշմարտացիությունը և, կախված պայմանի արդյունքից, կարող է վերադարձնել այս կամ այն ​​արդյունքը: Այս ֆունկցիան ստանում է հետևյալ ձևը․
							<p class="span_left span_left_green">
								<span>CASE</span>
								    <span><span>WHEN պայման_1 THEN արդյունք_1</span></span>
								    <span><span>WHEN պայման_2 THEN արդյունք_2</span></span>
								    <span><span>.................................</span></span>
								    <span><span>WHEN պայման_N THEN արդյունք_N</span></span>
								    <span><span>[ELSE ալտերնատիվ_արդյունք]</span></span>
								<span>END</span>
							</p>
						</li>

						<li><b>IF։</b> IF ֆունկցիան, կախված պայմանական արտահայտության արդյունքից, վերադարձնում է երկու արժեքներից մեկը: Եթե ​​առաջին պարամետրով փոխանցված պայմանը ճիշտ է, ապա վերադարձվում է առաջին արժեքը, հակառակ դեպքում երկրորդ արժեքը: Ֆունկցիայի ընդհանուր ձևն ունի հետևյալ տեսքը.
							<p class="span_left span_left_green">
								<span>IF(պայման, արժեք_1, արժեք_2)</span>
							</p>
						</li>

						<li><b>IFNULL։</b> IFNULL ֆունկցիան ստուգում է որոշ արտահայտությունների արժեքը: Եթե NULL է, ապա ֆունկցիան վերադարձնում է արժեք, որն փոխանցվում է որպես երկրորդ պարամետր: 
							<p class="span_left span_left_green">
								<span>IFNULL(արտահայտություն, արժեք)</span>
							</p>
						</li>

						<li><b>COALESCE։</b> COALESCE ֆունկցիան ստանում է արժեքների ցանկ և վերադարձնում է առաջինը այն, որը որ հավասար չէ NULL:
							<p class="span_left span_left_green">
								<span>COALESCE(արտահայտություն_1, արտահայտություն_2, արտահայտություն_N)</span>
							</p>
						</li>
					</ol>




				</div>	
			</div>
		</div>
	</div>

<?php include "footergicgreen.php"; ?>
<?php include "footer.php" ?>