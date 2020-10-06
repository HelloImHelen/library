<?php
require_once 'connection.php'; 
 
if
( isset($_POST['book']) && isset($_POST['place']) && isset($_POST['aviabiliti'])) 
 {
 
  
    $link = mysqli_connect("localhost", "root", "", "library")
        or die("Ошибка " . mysqli_error($link)); 
     

    $book = htmlentities(mysqli_real_escape_string($link, $_POST['book']));
    $plce = htmlentities(mysqli_real_escape_string($link, $_POST['place']));
    $avia = htmlentities(mysqli_real_escape_string($link, $_POST['aviabiliti']));
    
     
    $z = "select id_isbn from book where name_book = '$book'";
    $resultz = mysqli_query($link,$z);

  
    $element = mysqli_fetch_assoc($resultz);
        

  
        foreach($element as $el)
        {
            echo"$el";
        }



    $query ="INSERT INTO exmpl VALUES ('default','$el','$plce',' $avia')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
       header('location: exmplr.php');
    }

    mysqli_close($link);


}
?>