<?php
require_once 'connection.php'; // подключаем скрипт
 
if
( isset($_POST['name_book']) && isset($_POST['author']) && isset($_POST['place_create']) && isset($_POST['creators']) && isset($_POST['year_creator']) && isset($_POST['count_pages']))
 
 {
 
    // подключаемся к серверу
    $link = mysqli_connect("localhost", "root", "", "library")
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name_bk = htmlentities(mysqli_real_escape_string($link, $_POST['name_book']));
    $author_bk = htmlentities(mysqli_real_escape_string($link, $_POST['author']));
    $place_creators_bk = htmlentities(mysqli_real_escape_string($link, $_POST['place_create']));
    $creators_bk = htmlentities(mysqli_real_escape_string($link, $_POST['creators']));
    $yer_bk = htmlentities(mysqli_real_escape_string($link, $_POST['year_creator']));
    $pages_bk = htmlentities(mysqli_real_escape_string($link, $_POST['count_pages']));
     
    // создание строки запроса
    $query ="INSERT INTO book VALUES ('default','$name_bk','$author_bk',' $place_creators_bk','$creators_bk','$yer_bk','$pages_bk')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
       header('location: index.php');
    }
    // закрываем подключение
    mysqli_close($link);


}
?>