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
<!-- Заголовок сайту, на інших сторінках ідентичний -->
<div class="Main_title">
    <h1>USS Iowa Class</h1>
</div>
<!-- Заголовок сторінки з назвою -->
<div class = "title">
    <h1>Головна</h1>
</div>
<!-- Блок основного контенту на якому розміщується параграфи тексту,зображення, та інше, для інших сторінок ідентичне -->
<div class="container"> 
    <p class="art"><img src="Pages/iowa2.jpg" class="text_photo" width="500">«Айова» (англ. Iowa) — тип американський лінійних кораблів, побудованих у 1940 — 43 роках на замовлення ВМС США. Всього було побудовано чотири кораблі: «Айова», «Нью-Джерсі», «Міссурі» та «Вісконсін». Лінкори, з перервами, знаходилися на службі з 1943 по 1992 рік. За цей час вони взяли участь у чотирьох війнах: Другій світовій, корейській, в'єтнамській та іракській. У 1980-х усі кораблі пройшли глибоку модернізацію, але на початку 1990-х, через скорочення військових витрат, були виведені в резерв. До 2012-го лінкори були виключені зі складу флоту, однак жоден із них не був розібраний на метал.</p><p class="art">«Айова» (англ. USS Iowa (BB-61)) — перший корабель серії з 4 лінкорів типу «Айова» ВМС США. Названий на честь штату Айова. Вступив до ладу в роки Другої світової війни, брав участь у війні з Японією на Тихому океані і в Корейській війні. Двічі (у 1951 і 1984) був реактивований після виведення в резерв. Остаточно виведений зі складу бойових кораблів в 1990 році і довгий час знаходився на стоянці резервного флоту в Сесун-Бей (шт. Каліфорнія). 28 жовтня 2011 відбуксирували в порт Річмонд, Каліфорнія для відновлення перед переходом на постійне місце базування в порту Лос-Анджелеса. Виключений зі списків плавзасобів 9 червня 2012 З 7 липня того ж року відкритий для доступу як корабель-музей. Останній в історії флоту лінійний корабель, що знаходився в строю.</p>
    <!-- Розділяюча лінія, для інших сторінок ідентичне -->
    <hr color= #7568FB>
</div>
 </body>
</html>
