<?php
    function get_book(){
      global $link;
         $sql= "select * from book";
          $result= mysqli_query($link,$sql);
          $book = mysqli_fetch_all($result, MYSQLI_ASSOC);

      return $book;
   }

function get_readers(){
  global $link;
  $sql= "select * from readers";
  $result= mysqli_query($link,$sql);
  $readers = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $readers;
}

function get_exmp()
{
  global $link;
  $sql= "select * from exmplbook";
  $result= mysqli_query($link,$sql);
  $expmlq = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $expmlq;
}

function get_move()
{
  global $link;
$sql= "select * from ordbook";
$result= mysqli_query($link,$sql);
$ordbook = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $ordbook;
}

 ?>         