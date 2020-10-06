<?php
require_once 'connection.php'; // подключаем скрипт
 
if
( isset($_POST['id_readers']))
 
 {
 
    // подключаемся к серверу
    $link = mysqli_connect("localhost", "root", "", "library")
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $id_rd = htmlentities(mysqli_real_escape_string($link, $_POST['id_readers']));
  
    // создание строки запроса
    $query ="delete from readers where id_reader = $id_rd";
     
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