<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $_POST['hiddenVal']; ?></title>
    <link rel="stylesheet" href="task021.css" type="text/css"> <!--   (cssبhtml) ربط -->
    <meta name="viewport" content="width=device-width ,initial-scale=1.0,user-scalable=no">
  </head>
  <body>













    <?php
        session_start();
        $dbServername ="localhost";
        $dbUsername ="root";
        $dbPassword ="";
        $dbName ="library";    //database name
        $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("error in conection");









        $stype=$_POST['hiddenVal'];
        if ($stype=='search') {

        }
        elseif ($stype=='literary') {
          /*
          $result = mysqli_query($conn ,"SELECT * from literary");
          while ($row = mysqli_fetch_array($result)) {
            echo "<td>".$row['id'] ."</td>"."<td>".$row['book_name'] . "</td>" ."<td>".$row['book_details']."</td>";

          }*/


        }
        elseif ($stype=='religious') {
          echo "rrrrrrrrrrr";
        }
        elseif ($stype=='scientific') {
          echo "sisisisisisis";
        }
        elseif ($stype=='add') {
          echo "aaaaaaaaaaa";
        }


     ?>

  </body>
</html>
