<?php
require_once 'connection.php'; // подключаем скрипт
 
if
( isset($_POST['fio_readers']) && isset($_POST['home_adress']) && isset($_POST['phone_readers']) && isset($_POST['education']) && isset($_POST['birthday'])) 
 {
 
    // подключаемся к серверу
    $link = mysqli_connect("localhost", "root", "", "library")
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $fio_rd = htmlentities(mysqli_real_escape_string($link, $_POST['fio_readers']));
    $home_rd = htmlentities(mysqli_real_escape_string($link, $_POST['home_adress']));
    $phone_rd = htmlentities(mysqli_real_escape_string($link, $_POST['phone_readers']));
    $ed_rd = htmlentities(mysqli_real_escape_string($link, $_POST['education']));
    $bth_rd = htmlentities(mysqli_real_escape_string($link, $_POST['birthday']));

     
    // создание строки запроса
    $query ="INSERT INTO readers VALUES ('default','$fio_rd','$home_rd',' $phone_rd','$ed_rd','$bth_rd')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
       header('location: readers.php');
    }
    // закрываем подключение
    mysqli_close($link);
}
?>