<?php
  if (condition) {
    session_start();
    $dbServername ="localhost";
    $dbUsername ="root";
    $dbPassword ="";
    $dbName ="library";    //database name
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("error in conection");

    $bookn = $_POST['book_n'];
    $bookd = $_POST['book_d'];
    $bookt = $_POST['booktypeadd'];




  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form type="post" action= "adding01.php" >;
    <input type="text" name="book_n" placeholder="book_name" >;
    <input type="text" name="book_d" placeholder="book_details" >;
    <select class="choose" placeholder="type of book" name="booktypeadd">;
    <option>scientific</option>;
    <option>literaryk</option>;
    <option>literaryr</option>;
    <option>religious</option>;
    </select>;
    <input type = "submit" name="submit1">;
    </form>;
  </body>
</html>
