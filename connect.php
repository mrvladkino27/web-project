<?php
$conection = mysqli_connect('localhost', 'km','avecezar27');
$database = mysqli_select_db($conection, 'reg_iowa');
mysqli_set_charset($conection, "utf8");
?>