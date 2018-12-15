<?php



    session_start();
    $dbServername ="localhost";
    $dbUsername ="root";
    $dbPassword ="";
    $dbName ="library";    //database name
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("error in conection");

    $bn = $_REQUEST['book_n'];
    $bd = $_REQUEST['book_d'];
    $tn = $_REQUEST['booktypeadd'];




    $sql="INSERT INTO $tn (book_name,book_details) VALUES('$bn','$bd')";

    mysqli_query($conn,$sql);
    echo "thank you to adding a new book";
    exit();








 ?>
