<!-- Спеціальна сторінка для повідомлення про не прописані сторінки -->
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
	<h1> Вхід </h1>
</div>
<div class="container">
	
	<?php 
	$error = FALSE;
	
	if (isset($_POST['email']) and   isset($_POST['pass1'])){
		$password = md5($_POST['pass1']);
		$email = $_POST['email'];
		
		$query = "SELECT * FROM users WHERE email='$email' and password='$password'"; 
		$result = mysqli_query($conection,$query) or die (mysqli_error($conection));
		$count = mysqli_num_rows($result);
		if ($count == 1){
			$error = FALSE;
			$_SESSION['email'] = $email; }
		else 
			$error = TRUE;
	}
	 

	if(isset($_SESSION['email'])) { echo "<br>Перегляд галереї <a href='Gallery.php'>ТУТ</a>";  
	while ($row = mysqli_fetch_array($result)) {
			$name = $row['name'];
			$id = $row['id'];
			$city = $row['city'];
			$answer = "<p>Вітаю ".$name." з ".$city."<br>"."Ви ".$id." зареєстрований користувач</p>";
			};echo $answer; echo '<form action="logout.php"><input type="submit" value="Вихід"></form>';}
	else { 
		echo '
		<form id="form1" method="POST" action="logIn.php">
		<fieldset>
			<input type="email" name="email" placeholder="*Електронна адреса" pattern="\D[^0-9]{,20}@[a-z]{,10}.[a-z]{,5}" required>
			<input type="password" name="pass1" placeholder="*Пароль" minlength="4" required>
			<small>Пароль має складатися з не менше 4 символів</small><br>
			<br><div class="cong" id="1cong"></div>	
		</fieldset>
		<button type="submit" name="GO" value="registration">Вхід</button>
	</form>';}
	if($error){echo "Такий запис не знайдено. Чи ви зареєстровані????";
			session_destroy();}

?>

</div>	
</body>
</html>