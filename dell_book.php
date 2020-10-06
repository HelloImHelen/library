<?php
require_once 'connection.php'; // подключаем скрипт
 
if
( isset($_POST['id_book']))
 
 {
 
    // подключаемся к серверу
    $link = mysqli_connect("localhost", "root", "", "library")
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $id_bk = htmlentities(mysqli_real_escape_string($link, $_POST['id_book']));
  
    // создание строки запроса
    $query ="delete from book where id_isbn = $id_bk";
     
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