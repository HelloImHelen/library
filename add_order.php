<?php
require_once 'connection.php'; 
 
if
( isset($_POST['reader']) && isset($_POST['book']) && isset($_POST['trip-end']) && isset($_POST['trip-start'])) 
 {
 
  
    $link = mysqli_connect("localhost", "root", "", "library")
        or die("Ошибка " . mysqli_error($link)); 
     

    $rb = htmlentities(mysqli_real_escape_string($link, $_POST['reader']));
    $bb = htmlentities(mysqli_real_escape_string($link, $_POST['book']));
    $ds = htmlentities(mysqli_real_escape_string($link, $_POST['trip-start']));
    $de = htmlentities(mysqli_real_escape_string($link, $_POST['trip-end']));

    
     
    $b = "select id_isbn from book where name_book = '$bb'";
    $resultb = mysqli_query($link,$b);

  
    $elementb = mysqli_fetch_assoc($resultb);

        foreach($elementb as $elb)
        {
            echo"$elb";
        }


           
    $r = "select id_reader from readers where fio_readers = '$rb'";
    $resultr = mysqli_query($link,$r);

  
    $elementr = mysqli_fetch_assoc($resultr);

        foreach($elementr as $elr)
        {
            echo"$elr";
        }





    $query ="INSERT INTO orders_book VALUES ('$elr','$elb','$ds',' $de')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
       header('location: moved.php');
    }

    mysqli_close($link);


}
?>