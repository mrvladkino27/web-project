<!-- Сторінка регістрації на якій продемонстровано використання форми та її елементів -->
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
    <script type="text/javascript" src="JS/reg.js"></script>
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
<div class="title"><h1>Реєстрація</h1></div>
<div class="container">
	<center><p>Зареєстровані користувачі можуть завантажувати з Галереї і в Галерею фотографії по темі<br>Тому рекомендуємо Вам заповнити наступну форму</p></center><hr color= #7568FB>
	<!-- Форма, блок роботи користувача, де він може
	 зареємтруватися та налаштувати сторінку -->
	 <?php
	if (isset($_POST['name'])&&isset($_POST['pass1'])){
		$username = $_POST['name'];
		$password = md5($_POST['pass1']);
		$email = $_POST['email'];
		$age = $_POST['age'];
		$city = $_POST['city'];
		$tel_number = $_POST['tele'];
		$query = "INSERT INTO users(name,password,email,age,city,tel_number) VALUES ('$username','$password','$email','$age','$city','$tel_number')";
		$result = mysqli_query($conection,$query) or die (mysqli_error($conection));
		if ($result){$smsg = "Дякуємо за реєстрацію"; echo $smsg;} else {$fsmg = "Щось пішло не так"; echo $fsmg;}
	}
	?>
	<form id="form1" method="POST" action="registration.php">
			<!-- Блок, обмежений рамкою и присвячений темі що записана в легенді
			Перший блок наразі не є обов'язковим для заповнення -->
		<fieldset>
			<legend><h3>Розкажіть про себе</h3></legend>
			<label for="name">*Ім'я </label><input type="text" name="name" required><br><br>
			<label for="age">*Дата народження </label><input type="date" name="age" required><br><br>
			</fieldset>
		<!-- Блок на якому ми сконцентрувалися 
			при виконанні лабораторної роботи -->
		<fieldset>
			<legend><h3>Ваші контакти</h3></legend>
			<!-- Поле вибору міста, після вибору буду віведено повідомлення в залежності вибору
			Поле обов'язкове для заповнення -->
			<label for="city">*Місто </label><input type="text" name="city" onblur="congrat()" required>
			</select><br><div class="cong" id="cong1"></div><br><br>
			<!-- Поле уведення номеру телефону у заданому форматі
			з обмеженою кількістю символів
			Є обов'язковим для заповнення -->
			<input type="tel" name="tele" placeholder="*Номер телефону" pattern="[0-9]{10}" maxlength="10" required>
			<small>Номер це десять цифр: 0123456789 </small><br>
			<!-- Два поля для введення паролю
			Результат уведення виводиться у написі під полями
			Є обов'язковими для заповнення -->
			<input type="password" name="pass1" placeholder="*Пароль для завершення реєстрації" minlength="4" required>
			<input type="password" name="pass2" placeholder="*Повторіть пароль"  onblur="comparePass()" minlength="4" required>
			<small>Пароль має складатися з не менше 4 символів</small><br>
			<br><div class="cong" id="1cong"></div>
			<!-- Поле введення електронної пошти у стандартному форматі 
			В подальшому електронна пошта бути використовуватися як логін для сайту
			Є обо'язковим для заповнення -->
			<input type="email" name="email" placeholder="*Електронна адреса" pattern="\D[^0-9]{,20}@[a-z]{,10}.[a-z]{,5}" required>
		</fieldset>
	<!-- 	<fieldset>
			<legend><h3>Що думаєте про нас?</h3></legend>
			<textarea placeholder="Відгук"></textarea><br><br><br>
			<label for="ships">Який корабель вам сподобався?</label><br><br><br>
				<input type="checkbox" name="ships">USS Айова<br>
				<input type="checkbox" name="ships">USS Нью-Джерсі<br>
				<input type="checkbox" name="ships">USS Міссурі<br>
				<input type="checkbox" name="ships">USS Вісконсін<br>
		</fieldset> -->
		<!-- Кнопка завершення реєстрації -->
		
		<button type="submit" name="GO" value="registration">Готово</button>
	</form>
		
</div>
  </body>
 </html>