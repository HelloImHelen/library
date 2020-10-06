<?php
include 'search.php';



if( isset( $_POST['radio'] ) )
{
    switch( $_POST['radio'] )
    {
        case '1':      
            include 'first_rt.php';
        break;
        case '2':
            include 'second_rt.php';
            break;
        case '3':
            include 'third_rt.php';
            break;
        case '4':
            include 'four_rt.php';
            break;
        case '5':
            include 'five_rt.php';
             break;
    }
}





function  get_firsts(){
  
    global $link;
    global $a;
    if($a!==null){
        echo "{$a} is in the house.";
        } 
    if($a==null){
        echo 'so bad';
    }  
    $sql= "select * from book where fio_athor = '$a'";
    $result= mysqli_query($link,$sql);
    $first = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $first; 
  
    }
  



 function get_second(){
    global $link;
    global $y;
    if($y!==null){
        echo "{$y} now.";
        } 
    if($y==null){
        echo 'so bad';
    }  
       $sql= "select name_book,fio_athor,creators from book where year_crators > $y";
        $result= mysqli_query($link,$sql);
        $second = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $second;
 }


 function get_third(){
    global $link;
       $sql= "SELECT exmpl.id_exmpl,book.name_book 
       FROM exmpl INNER JOIN book ON book.id_isbn = exmpl.id_book
       where exmpl.availability = 0";
        $result= mysqli_query($link,$sql);
        $third = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $third;
 }


 function get_four(){
    global $link;
       $sql= "select count(orders_book.id_order_book), MONTH(curdate())
       from orders_book
       where MONTH(orders_book.date_enter) = month(curdate())";
        $result= mysqli_query($link,$sql);
        $four = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $four;
 }


 function get_five(){
    global $link;
       $sql= "SELECT readers.fio_readers, readers.home_adress,readers.phone_readers,
       TO_DAYS(orders_book.date_exit) - TO_DAYS(orders_book.date_enter) 
       from orders_book 
        INNER JOIN
               readers ON readers.id_reader = orders_book.id_read_check
       where TO_DAYS(orders_book.date_exit) - TO_DAYS(orders_book.date_enter) > 20";
        $result= mysqli_query($link,$sql);
        $five = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $five;
 }




?>

