<!DOCTYPE html>
<?php
    session_start();
    require('connect.php');
    ?>
<html>
    <head>
        <link rel="icon" href="Pages/logo.png" />
        <?php
        date_default_timezone_set('Europe/Zaporozhye');
        $t = date("H");        
        if ($t < "18" && $t>"6") {
            echo '<link href="Pages/lab2.css" rel="stylesheet"/>';
        } else {
            echo '<link href="Pages/dark.css" rel="stylesheet"/>';
        }
    ?>
        <title>USS Iowa</title>
    </head>
  <body>
    <header>
        <!-- Блок меню, елементами якого є елементи списку з посиланнями на інші сторінки
        для переходу на Головну сторінку необхідно натиснути на логотип
        Для наступних сторінок header ідентичний -->
        <a href="main.php"><img src="Pages/logo.png" class = "logo"></a>
        <nav>
          <ul>
            <li><a href="lab2_construct.php">Конструкція</a></li>
            <li><a href="lab2_ships.php">Кораблі</a></li>
            <li><a href="Gallery.php">Галерея</a></li>
            <li><a href="registration.php"> Реєстрація</a></li>
            <?php if(isset($_SESSION['email'])){echo '<li><a href="php/logout.php">Вихід</a></li>';}else{echo '<li><a href="logIn.php">Вхід</a></li>';}?>
          </ul>
        </nav>  
</header>
<div class="Main_title">
	<h1>USS Iowa Class</h1>
</div>
<div class = "title">
	<h1> Конструкція </h1>
</div>
<div class="container">
	<div id="curs"><h3>Курс валют на сьогодні</h3></div>
	<script >
	fetch("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5")
.then(page => page.json())
.then(function(page){
  page.forEach(pair => {
      let el = document.createElement("div");
      el.id = pair.ccy;
      el.className = "ValutePair";
      el.innerHTML= "<ul>"+pair.ccy+"<li>Buy - "+pair.buy+" UAH</li>"+"<li>Sell -"+pair.sale+" UAH</li>"+"</ul>"
      document.getElementById('curs').appendChild(el);
  });
});
</script>
	<p>Sunt non laboris nostrud in pariatur proident non quis ad et amet in est fugiat reprehenderit eiusmod culpa enim. Amet occaecat ut esse pariatur esse non officia in pariatur cupidatat laboris proident aliqua dolor nulla adipisicing. Lorem ipsum id mollit labore pariatur laboris sed aliquip labore eu ut dolor laboris nulla proident esse ullamco exercitation laborum irure. Ut nostrud pariatur do cillum qui sed elit nisi qui commodo incididunt aliqua ea laborum minim aliqua non. Officia id elit incididunt eiusmod adipisicing laboris nisi do esse irure velit esse excepteur do. Ex laborum reprehenderit non aute ut aute duis occaecat sint dolore esse non amet laborum dolor occaecat. Proident amet in culpa in aliquip consequat magna enim dolor tempor voluptate voluptate eu ex do dolor. Aute ullamco id irure eu sit sit aliquip in nostrud dolore excepteur in in ut do ut. Dolore aliquip commodo nostrud incididunt velit eu esse laborum dolor officia velit veniam reprehenderit velit sunt aliqua labore.</p>
	<hr color= #7568FB> 
	<p> <!--Ненумерований список з вкладеннням ненумерованого списку
	Навігація по сторінці за допомою якорів-->
		<ul>
		<li><a href="#gen">Загальне</a></li>
		<li><a href="#eng">Рушійна установка</a></li>
		<li><a href="#gun">Озброєння</a>
			<ul>
				<li>Артилерія</li>
				<li>Зенітне озброення</li>
				<li>Авіація</li>
			</ul>
		</li>

	</ul></p>
	<hr color= #7568FB>
	<p><a name="gen">Загальне</a><br><br>Amet adipisicing esse mollit laboris amet consequat excepteur aliqua. Lorem ipsum enim sunt ut sunt nostrud sint dolore duis ad in velit do. Ex velit eiusmod sed sit duis id tempor eiusmod consequat duis elit ullamco nostrud minim quis elit in. Incididunt velit magna ut labore ad veniam tempor aliquip exercitation amet laborum id. Aliquip consectetur proident et in in consectetur est veniam dolor eiusmod sunt dolore labore. Reprehenderit do quis amet nulla dolore adipisicing ut mollit est cupidatat reprehenderit dolor irure. Incididunt elit quis occaecat veniam velit laborum veniam consectetur ullamco ad culpa in. Quis velit voluptate quis dolor dolor consequat dolor dolor ex sint ut et. Sed est eu commodo fugiat sit ex pariatur nisi deserunt sit tempor reprehenderit minim. Velit magna culpa aliqua exercitation dolore aliqua pariatur eu consectetur exercitation excepteur. Lorem ipsum et ut nostrud ex anim do dolore eiusmod laborum minim magna enim aliquip adipisicing sed elit id fugiat duis. Dolor dolor consectetur et irure velit officia et in nostrud. Lorem ipsum ex et veniam consequat cupidatat deserunt laborum dolore magna est nisi sed. Lorem ipsum sunt consequat quis deserunt culpa et reprehenderit occaecat anim pariatur eu nostrud nostrud in deserunt adipisicing cupidatat. Tempor aliquip consectetur labore voluptate in cupidatat elit ad est dolor tempor dolore voluptate ad et excepteur deserunt. Reprehenderit do sint sunt ea ea in anim do cillum pariatur officia in ullamco nulla. Ex anim non do ullamco amet reprehenderit ut nisi aliquip aute veniam cillum nulla do ea do. Lorem ipsum duis do proident nisi incididunt mollit in incididunt qui. Laboris et aute elit dolor sit dolore dolore duis minim elit et ad dolor in irure culpa et. Est labore et do tempor sed sed enim laborum commodo ut ut. Voluptate culpa incididunt nisi mollit esse proident est do nulla minim sit. Veniam ullamco excepteur ullamco in nulla adipisicing in cupidatat magna reprehenderit laboris nulla exercitation. Fugiat deserunt do dolore officia veniam consequat culpa duis eu voluptate velit deserunt veniam nisi. Lorem ipsum proident occaecat nostrud sed sint consectetur commodo officia proident amet eiusmod tempor id ut ex. Cillum voluptate labore in ad mollit ut ad sed mollit. Occaecat irure dolor laboris deserunt occaecat duis laborum reprehenderit officia ullamco qui ut in aliquip tempor culpa nisi. Occaecat sit cupidatat laborum sint irure anim deserunt sunt deserunt reprehenderit cupidatat veniam incididunt elit consequat. Dolore fugiat id mollit proident nostrud ut irure sunt minim labore est.</p>
	<hr color= #7568FB>
	<p><a name="eng">Рушійна установка</a><br><br>Lorem ipsum in nulla dolor aute deserunt ut et et voluptate commodo. Est enim ex minim officia in voluptate nulla sint duis fugiat ut ex sed sunt veniam. Ut nisi dolore do eu sit irure ullamco non irure tempor reprehenderit adipisicing nostrud adipisicing incididunt sunt dolore officia. Eiusmod eu adipisicing eiusmod ut ad do sit quis cupidatat cupidatat id elit anim incididunt dolore commodo. Non sed nisi sint velit incididunt eiusmod qui do sed dolor est dolor. Reprehenderit eiusmod dolore ullamco dolore cillum nisi ut incididunt et. Dolore culpa dolor in nulla dolor deserunt nostrud cupidatat dolor eu ut qui non eiusmod. Elit in esse consectetur ea duis labore commodo aliqua culpa. Lorem ipsum cupidatat consectetur eu eiusmod laborum elit officia amet reprehenderit ut sit ullamco consequat aliqua anim et. Lorem ipsum laborum nisi eu ex fugiat in minim deserunt dolor cillum sint non. Ut aute consequat dolor dolor laborum ut eiusmod duis proident do dolor tempor pariatur anim magna duis nostrud. Irure proident sint ad laboris aute dolor ut dolore tempor esse minim id tempor voluptate enim anim. Deserunt labore sit incididunt pariatur minim magna sunt sit. Laborum labore in in consectetur culpa quis cupidatat in et magna. Lorem ipsum fugiat do elit sint magna officia aliqua irure dolore proident veniam laborum sed amet ea cupidatat. Ullamco velit commodo amet aliquip dolore excepteur sed qui laborum commodo elit id quis fugiat. Ea sunt dolore non consectetur veniam ut ut laborum in est. Ullamco amet irure magna consequat aliqua dolore anim anim aliqua laborum officia sed pariatur aute. Nisi excepteur culpa cupidatat dolore anim dolor irure aliquip nostrud magna eiusmod et ut ut. Do ex labore nostrud in minim ut ex irure quis in aute sed officia aliquip tempor ex reprehenderit. Amet adipisicing deserunt ex irure elit ullamco voluptate exercitation sed in cillum duis ullamco ut nostrud cupidatat. Id voluptate consequat irure labore pariatur minim aute eu reprehenderit ex sunt in consectetur. Culpa officia consectetur non deserunt minim qui ex incididunt aliqua sed. In voluptate esse consequat officia ad proident voluptate mollit ut veniam cupidatat nulla ut. Aliqua excepteur nulla in irure enim ut sunt velit culpa sed sunt enim ex ullamco excepteur sint aute consequat. Enim excepteur non dolor aliqua cupidatat et dolor id laboris qui dolor ad proident. Fugiat fugiat veniam labore consequat minim id in quis magna. Dolore fugiat anim nostrud magna exercitation dolor dolor in consectetur officia ut veniam magna. Elit enim sed ullamco elit excepteur et ut in dolor anim duis. Ea occaecat amet voluptate sit in consequat non aliquip labore non eiusmod minim id eiusmod consequat cupidatat et. Dolor commodo ex officia ullamco occaecat ut ad esse tempor sed commodo deserunt culpa cillum do. Ut sed ad do proident ut velit duis deserunt reprehenderit sunt est ut consectetur irure. Amet culpa officia sed aliquip nulla mollit ad dolore ut duis reprehenderit in sunt quis eiusmod quis nostrud. Adipisicing incididunt amet labore id magna anim deserunt labore. Ea cupidatat aliquip eiusmod cupidatat sint occaecat cillum aliquip in. Veniam aliquip cupidatat magna laboris aliquip labore aliqua dolor nostrud officia. Consequat cillum qui fugiat officia elit labore officia qui ea nostrud ut in deserunt in sunt.</p>
	<hr color= #7568FB>
	<!-- Таблиця на три стовпчика, з переліком озброєня цього класу кораблів -->
	<table border="2" >
		<caption><a name="gun">Озброєння</a></caption>
		<tr>
			<th>Артилерія</th>
			<th>Зенітне озброення</th>
			<th>Авіація</th>
		</tr>
		<tr><td>9 х 406-мм гармат Mk 7</td><td>80 40-мм автоматичних гармат Bofors L60</td><td>3 гідролітаки OS2U Kingfisher/SC Seahawk</td></tr>
		<tr><td>20 х 127-мм гармат Mk 12</td><td>49 20-мм автоматичних гармат «Ерлікон»</td></tr>
		<tr></tr>
	</table>
</div>
</body>
</html>