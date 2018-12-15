<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="task021.css" type="text/css"> <!--   (cssبhtml) ربط -->
    <meta name="viewport" content="width=device-width ,initial-scale=1.0,user-scalable=no">
    <title>deleting</title>
  </head>
  <body>

    <input type="text" style="display:none" id="hidden2" name="hiddenVal" value="0"/>
    <?php


      session_start();
      $dbServername ="localhost";
      $dbUsername ="root";
      $dbPassword ="";
      $dbName ="library";    //database name
      $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("error in conection");

      $did=$_REQUEST['id1'];
      $tn=$_REQUEST['tn'];

      $result = mysqli_query($conn ,"DELETE from $tn WHERE id='".$did."'");


      //header("Location: http://localhost:8088/web%20progects/tasks/task02/tast.php");
     ?>




  </body>
</html>
