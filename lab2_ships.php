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
	<h1>Кораблі</h1>
</div>
<div class="container">
<p>
	Eiusmod ea irure ut minim do culpa consequat ex ad. Lorem ipsum pariatur occaecat duis amet id ex quis amet ad veniam ut. Aliquip in reprehenderit sint veniam cillum esse ex ut culpa ut non. Consequat minim aliquip cillum ea commodo aliqua mollit qui aute eu id amet voluptate et. Lorem ipsum ad velit dolor laborum duis cupidatat veniam fugiat in ea ad voluptate pariatur est sunt qui amet adipisicing.</p>
<img src="Pages/miss2.jpg" class="text_photo" width="43%">
<hr color= #7568FB>
<script>
    var el = document.getElementsByClassName('menu-item');
    for (var i = 0; i < el.length;  i++) {
      el[i].addEventListener('mouseenter', showSub, false);
      el[i].addEventListener('mouseleave', hideSub, false);
    }

    function showSub () {
      if (this.children.length>1) {
        this.children[1].style.height = "auto";
        this.children[1].style.opacity = "1";
        this.children[1].style.overflow = "visible";
      }
      else {
        return false;
      }

    }

    function hideSub () {
      if (this.children.length>1) {
        this.children[1].style.height = "0";
        this.children[1].style.opacity = "0";
        this.children[1].style.overflow = "hidden";
      }
      else {
        return false;
      }

    }
  </script>

<p class="art"><ol class="menu">
		<li class="menu-item"><a href="#iowa">Айова</a>
		<ul class="submenu">
		<li >Історія</li>
		<li >Музей</li>	
		</ul>
		</li>
		<li class="menu-item"><a href="#newJ">Нью-Джерсі</a>
		<ul class="submenu">
		<li>Історія</li>
		<li>Музей</li>	
		</ul></li>
		<li class="menu-item"><a href="#miss">Міссурі</a>
		<ul class="submenu">
		<li>Історія</li>
		<li>Музей</li>	
		</ul></li>
		<li class="menu-item"><a href="#vis">Вісконсін</a>
		<ul class="submenu">
		<li>Історія</li>
		<li>Музей</li>	
		</ul></li>
	</ol></p>
<hr color= #7568FB>

<center><h2>Карта розміщення корблів-музеїв</h2></center>
<!-- Блок з мапою посилань на параграфи цієї сторінки
	Кожна точка на зображені карти відповідає за сьогоденішнє розташування кораблів -->
<div class="map">
	<img src="Pages/map_mus.jpg" class="map_im" usemap="#Museums" width="890" height="500" border-color="#7568FB" border="2">
<map id="Museums" name="Museums">
	<area shape="rect" alt="Перл-Харбор" title="Міссурі" coords="300,290,350,340" href="#miss" target="" />
	<area shape="rect" alt="Лос-Анжелес" title="Айова" coords="500,310,530,360" href="#iowa" target="" />
	<area shape="rect" alt="Камден" title="Нью-Джерсі" coords="830,290,850,330" href="#newJ" target="" />
	<area shape="rect" alt="Норфолк" title="Вісконсін" coords="720,210,760,250" href="#vis" target="" />
</map>
</div>
<hr color= #7568FB>
<img src="Pages/iowa3.jpg" class="text_photo" width="450">
<p class="art"><a name="iowa"><right><h2>Айова</h2></right></a>Cupidatat veniam incididunt anim in in deserunt proident reprehenderit in qui do fugiat dolore culpa sit eu. Sint exercitation cillum nisi nisi ullamco eiusmod duis adipisicing minim sed ut cupidatat reprehenderit reprehenderit commodo. Incididunt cillum duis do eiusmod in quis ea ea adipisicing incididunt nulla exercitation sed duis. Reprehenderit pariatur dolore dolore anim elit eiusmod esse veniam. Aliqua proident proident anim ut quis laborum voluptate in quis consequat id ea cillum nisi. Lorem ipsum fugiat dolore sunt ex culpa consequat eu mollit excepteur cillum duis nulla in excepteur ea. Nostrud irure dolor aute in in cillum aute in nostrud consectetur labore officia velit anim dolor. Ut deserunt commodo deserunt labore non cupidatat est ad nostrud tempor est ea. Ex ad minim ex exercitation pariatur nostrud sit eiusmod in incididunt dolor incididunt ut commodo. Duis labore nostrud in eiusmod nulla aliquip adipisicing elit ut occaecat quis veniam occaecat pariatur in. Non et id nostrud culpa excepteur minim amet et commodo quis id ut aute aute. Ex amet id quis mollit non exercitation in consequat adipisicing occaecat excepteur amet commodo dolor sunt. Cupidatat adipisicing dolor id labore in sit laborum in veniam tempor dolore sunt dolor do sunt culpa laborum. Laboris exercitation ut sed ut in aliquip aliquip dolore do sint. Dolore elit dolor elit veniam ea sunt culpa in exercitation fugiat sit ex ut. Ad nostrud incididunt duis ea esse nisi velit deserunt dolor esse ullamco labore consequat ullamco. Lorem ipsum velit ut tempor ullamco commodo ut aliqua velit esse veniam nostrud aute aliqua. In aliquip in sed labore dolor nulla amet mollit aliquip occaecat sint velit aliqua minim et. In sed duis ex tempor aliqua esse occaecat exercitation tempor laborum enim. Id dolor enim culpa cupidatat eu labore laborum aliquip non adipisicing ex magna quis consectetur excepteur occaecat ad.</p>
<hr color= #7568FB>
<img src="Pages/newJ2.jpg" class="text_photo" width="500">
<p><a name="newJ"><h2>Нью-Джерсі</h2></a>Qui in irure ut adipisicing excepteur in voluptate ex mollit excepteur. Amet occaecat qui consequat tempor excepteur nulla mollit labore duis sed fugiat ad eiusmod velit. Incididunt sed ex ullamco pariatur incididunt consequat laborum sit. Lorem ipsum nisi magna magna aliqua duis excepteur nisi magna nostrud aliquip id dolore dolor proident adipisicing cupidatat laborum. Lorem ipsum esse id dolor consectetur reprehenderit elit laboris minim consequat deserunt pariatur commodo. Lorem ipsum cillum dolor dolor in duis sunt dolor anim fugiat fugiat nisi pariatur in esse dolore sed exercitation nostrud qui. Ullamco in adipisicing deserunt ad mollit veniam exercitation dolore eiusmod ea aliqua pariatur. Occaecat labore id dolore non qui ex minim ex nostrud aliquip dolore eiusmod amet nulla nostrud irure aliqua anim. Excepteur consequat veniam irure veniam ullamco dolor eiusmod ut esse fugiat laboris.</p>
<hr color= #7568FB>
<img src="Pages/miss1.jpg" class="text_photo" width="500">
<p><a name="miss"><h2>Міссурі</h2></a><br>Lorem ipsum mollit do reprehenderit aliquip aliquip aliquip reprehenderit id sint eiusmod sint eu consectetur dolor veniam. Velit id ut excepteur dolore est esse deserunt anim ut ut eu eu occaecat in dolor sint irure nostrud. Et in tempor ut exercitation est dolor velit adipisicing. Culpa ad aliquip eu tempor eu adipisicing id nulla eu dolor do nisi incididunt commodo tempor dolore id. Aute voluptate in deserunt veniam dolore laboris nisi magna labore eu et occaecat exercitation velit officia est. Do quis non non velit do in labore magna pariatur sit qui et qui culpa reprehenderit ullamco. Proident esse eiusmod eu proident consectetur ut laborum occaecat commodo enim in laborum deserunt sed. Magna dolor eu laborum sint ut qui laborum aliquip in in sit irure mollit eu adipisicing.</p>
<hr color= #7568FB>
<img src="Pages/vis2.jpg" class="text_photo" width="500">
<p><a name="vis"><h2>Вісконсін</h2></a><br>Nulla enim in aliquip id aliquip fugiat dolore enim ullamco incididunt fugiat exercitation nulla nostrud velit. Lorem ipsum culpa mollit nostrud in in velit magna consectetur adipisicing voluptate consequat sunt. Elit et sit officia in ut incididunt velit do eiusmod proident et voluptate dolor pariatur. Officia aute ut dolore elit ex sed non deserunt in proident. Enim tempor reprehenderit minim in nulla commodo dolor occaecat ad sunt. Laboris dolor quis irure cillum pariatur in do veniam do dolore est mollit ex occaecat commodo consectetur non amet. Adipisicing ex laborum dolore incididunt qui nisi in ex in qui ut reprehenderit ut consectetur dolor in aliqua ad. Dolor dolor aliqua deserunt consectetur proident non occaecat qui incididunt duis laboris ad esse in aliqua. Dolor esse magna do id minim cupidatat nostrud est dolor ut ut et nostrud sit minim commodo ea. Tempor laborum est sit anim voluptate proident sunt et aliqua nulla eiusmod labore nisi esse sit tempor minim officia. Lorem ipsum do dolore in pariatur nulla sint proident commodo in nisi labore in commodo ullamco. In elit cupidatat aliquip dolore amet duis laboris quis dolor dolore voluptate voluptate sed elit ullamco commodo aliqua.</p>
</div>
</body>
 </html>