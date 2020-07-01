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
        <link href="Pages/gallery.css" rel="stylesheet"/>
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
	<h1>Галерея</h1>
</div>
<!-- Блок основного контенту на якому розміщується параграфи тексту,зображення, та інше, для інших сторінок ідентичне -->
<div class="container"> 

<?php
$current_user = (isset($_SESSION['email'])) ? $_SESSION['email'] : FALSE;


if (!isset($_SESSION['email'])) {
                echo "<p class='warning'><strong>Увійдіть, щоб мати доступ до галереї!</strong></p>";
            
            } else {
                echo "<form enctype='multipart/form-data'method='POST' action='Gallery.php'><div class='row'>
                <label class='row_label'>Оберіть фото:</label>
                <input type='file' name='userfile' >
                </div><br>
                <div class='row'>
                <label class='row_label'>Підпис:</label>
                <textarea class='caption' name='caption' rows='10'></textarea>
                </div><br>
                <button type='submit' >Опублікувати</button></form>";
            }
    if (isset($_POST['delete_photo'])) {
        $photo_id = $_POST['photo_id'];
        $filename = $_POST['filename'];

        // видаляємо фото з сервера
        unlink("gallery/".$filename);

        // видаляємо фото з бази даних, з таблиць memories i comments
        mysqli_query($conection, "DELETE FROM image_base WHERE image_id=$photo_id") or die (mysqli_error($conection));
        
            }
    if(isset($_POST['change_caption'])and isset($_POST['new_caption'])){
        $new_caption = $_POST['new_caption'];
        $post_id = $_POST['post_id'];
        $q = "UPDATE image_base SET caption='$new_caption' WHERE image_id=$post_id";
        mysqli_query($conection, $q) or die (mysqli_error($conection));}

?>
<?php function can_upload($file) {
            # Перевіряє, чи можна завантажити файл на сервер.
            
            # якщо ім'я порожнє, то файл не обрано
            if($file['name'] == '')
                return '* Ви не обрали файл!';
            
            # якщо розмір файлу -- 0, то його не пропустили налаштування
            # сервера, бо він занадто великий    
            if($file['size'] == 0)
                return '* Файл занадто великий!';
            
            // отримуємо розширення файлу
            $getMime = explode('.', $file['name']);
            $mime = strtolower(end($getMime));
            
            $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
            
            if(!in_array($mime, $types))
                return '* Недопустимий формат файлу!';
            
            return true;
        }
        
        function make_upload($file) {   
            $name = mt_rand(0, 10000) . $file['name'];

            // копіюємо файл в папку з зображеннями
            copy($file['tmp_name'], 'gallery/' . $name);

            return $name;
        }

        if(isset($_FILES['userfile'])) {
            // перевіряємо, чи можна завантажити зображення
            $check = can_upload($_FILES['userfile']);
            if ($check === true) {
                // завантажуємо зображення на сервер
                $filename = make_upload($_FILES['userfile']);
                // заносимо інформацію про фото в базу даних
                $size= $_FILES['userfile']['size'];
                $username = $_SESSION['email'];
                $date = date("d-m-Y");
                $caption = $_POST['caption'];
                $q = "INSERT INTO image_base (caption,user, image_name) 
                VALUES ('$caption', '$username', '$filename')";
                $result = mysqli_query($conection, $q) or die (mysqli_error($conection));

                if ($result){ 
                    echo "Фото успішно завантажено!";
                unset($_FILES);}
                else{
                    echo "Сталася помилка!";
                }
            }
            else {
                // виводимо повідомлення про помилку
                echo $check;  
            }
        }

             
if (isset($_SESSION['email'])) {
        if (isset($_GET['pnum'])) {
            $pnum = $_GET['pnum'];
        } else {
            $pnum = 1;
        };
        $count_of_photo = 4;
        $amount_photo = ($pnum-1) * $count_of_photo;
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        $total_pages_sql = "SELECT COUNT(*) FROM image_base";
        $rows = mysqli_query($conection,$total_pages_sql);
        $current_user = (isset($_SESSION['user'])) ? $_SESSION['user'] : FALSE;
        $publications = "";
        $q = "SELECT * FROM image_base ORDER BY `image_id` DESC LIMIT $amount_photo, $count_of_photo";
        $result = mysqli_query($conection,$q);
        $total_rows = mysqli_fetch_array($rows)[0];
        
        $total_pages = ceil($total_rows/ $count_of_photo); ?>
        <div class="gallery"> 
            <?php
            
            while($row = mysqli_fetch_array($result)){
                        $publications .= "<a href='gallery/".$row['image_name']."' download='../gallery/".$row['image_name']."'><img src='gallery/".$row['image_name']."' class='gallery_photo' /></a>
                        <p class='art'><strong>".$row['user']."</strong> ".$row['data']."</p><br>
                        <p class='art'>".$row['caption']."</p>";
                        if ($_SESSION['email'] === $row['user']) {
                            $publications .= "<form id='form1' action='Gallery.php' method='POST'>
                                <input type='hidden' name='photo_id' value='".$row['image_id']."'>
                                <input type='hidden' name='filename' value='".$row['image_name']."'>
                                <input type='submit' name='delete_photo' value='Видалити'>";
                                $publications .= "<input type='submit' name='change_caption' value='Змінити'><input type='hidden' name='post_id' value='".$row['image_id']."'>";
                        if (isset($_POST['change_caption'])){
                            $publications .= "<textarea class='caption' name='new_caption' rows='5'></textarea>";
                            
                            
                        }
                    $publications .= "</form>";}
                    
                    $publications .="<hr color= #7568FB>";

                    }
                    echo $publications; 
                    
                    
            }?>
                </div> 

            <ul class="pagination">
            <li><a href="?pnum=1">Початок</a></li>
            <li class="<?php if($pnum <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($pnum <= 1){ echo '#'; } else { echo "?pnum=".($pnum - 1); } ?>">Попередня</a>
            </li>
            <li class="<?php if($pnum >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pnum >= $total_pages){ echo '#'; } else { echo "?pnum=".($pnum + 1); } ?>">Наступна</a>
            </li>
            <li><a href="?pnum=<?php echo $total_pages; ?>">Кінець</a></li></ul>
        
   </div>   
</form>

 </body>
</html>