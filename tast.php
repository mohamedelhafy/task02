<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="task021.css" type="text/css"> <!--   (cssبhtml) ربط -->
    <meta name="viewport" content="width=device-width ,initial-scale=1.0,user-scalable=no">
    <title><?php echo $_POST['id1']; ?></title>
  </head>
  <body>
    <center>
      <div>

        <table>
          <tr>
            <td> <input type="text" name="search" placeholder="search" rowspan="3" > </td>
            <td> <input type="submit" name="search2" value="search" onclick="document.getElementById('hidden2').value = 'search2'" ></td>

          <tr>
            <td><input type="text" style="display:none" id="hidden2" name="id1" /></td>
          </tr>

          <tr>
            <?php

            session_start();
            $dbServername ="localhost";
            $dbUsername ="root";
            $dbPassword ="";
            $dbName ="library";    //database name
            $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("error in conection");



            $btype=$_REQUEST['id1'];
            if ($btype=='search') {

              $search=$_REQUEST['search'];
              $terms = explode(" ",$search);
              $querylr = "SELECT * from literaryr WHERE ";
              $querylk = "SELECT * from literaryk WHERE ";
              $queryr = "SELECT * from religious WHERE ";
              $querys = "SELECT * from scientific WHERE ";
              $i=0;
              foreach ($terms as $each) {
                $i++;
                if ($i==1) {
                  $querylr .="book_name LIKE '%search%'";
                  $querylk .="book_name LIKE '%search%'";
                  $queryr .="book_name LIKE '%search%'";
                  $querys .="book_name LIKE '%search%'";
                }

                else {
                  $querylr .="OR book_name LIKE '%search%'";
                  $querylk .="OR book_name LIKE '%search%'";
                  $queryr .="OR book_name LIKE '%search%'";
                  $querys .="OR book_name LIKE '%search%'";
                }
              }






              $querylr = mysqli_query($conn,$querylr);
              $numlr =mysqli_num_rows($querylr);

              if ($numlr > 0 && $search !="") {
                while ($row = mysqli_fetch_assoc($querylr)) {
                  $id = $row['id'];
                  $book_name = $row['book_name'];
                  $book_ditails = $row['book_details'];

                  echo "$book_name<br/>$book_ditails<br/>";
                }
              }else {
                echo "no result found on literaryr table <br/>";
              }



              $querylk = mysqli_query($conn,$querylk);
              $numlk =mysqli_num_rows($querylk);

              if ($numlk > 0 && $search !="") {
                while ($row = mysqli_fetch_assoc($querylk)) {
                  $id = $row['id'];
                  $book_name = $row['book_name'];
                  $book_ditails = $row['book_details'];

                  echo "$book_name<br/>$book_ditails<br/>";
                }
              }else {
                echo "no result found on literaryk table <br/>";
              }



              $queryr  = mysqli_query($conn,$queryr);
              $numr = mysqli_num_rows($queryr);

              if ($numr > 0 && $search !="") {
                while ($row = mysqli_fetch_assoc($queryr)) {
                  $id = $row['id'];
                  $book_name = $row['book_name'];
                  $book_ditails = $row['book_details'];

                  echo "$book_name<br/>$book_ditails<br/>";
                }
              }else {
                echo "no result found on religious table <br/>";
              }



              $querys  = mysqli_query($conn,$querys);
              $nums =mysqli_num_rows($querys);

              if ($nums > 0 && $search !="") {
                while ($row = mysqli_fetch_assoc($querys)) {
                  $id = $row['id'];
                  $book_name = $row['book_name'];
                  $book_ditails = $row['book_details'];

                  echo "$book_name<br/>$book_ditails<br/>";
                }
              }else {
                echo "no result found on scientific table <br/>";
              }







            }
            elseif ($btype=='literaryr') {
              $result = mysqli_query($conn ,"SELECT * from literaryr");
              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>"."<td>".$row['id'] ."  ".$row['book_name'] . "  ".$row['book_details']."</td>";
                $ids = $row['id'];
                echo "<td>"."<form action='tast.php'>"."<input type='submit' name='delete' value='delete' onclick='document.getElementById(\"hidden1\").value = $ids'>";
                echo "<td>"."<input type='text' style='display:none' id='hidden1' name='id1' />"."</td>";
                echo "</form>";


                if (isset($_REQUEST['delete'])) {
                  $ids = $_REQUEST['id1'];
                  $result = mysqli_query($conn ,"DELETE from scientific WHERE id='".$ids."'");
                }


              }
              }
            elseif ($btype=='literaryk') {
              $result = mysqli_query($conn ,"SELECT * from literaryk");
              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>"."<td>".$row['id'] ."  ".$row['book_name'] . "  ".$row['book_details']."</td>";
                $ids = $row['id'];
                $tn = "literaryk";
                $lo ="document.getElementById('hidden1').value = '$ids'"."document.getElementById('hidden2').value ='$tn' ";
                echo "<td>"."<form action='deleting.php'>";
                echo "<input type='submit' name='delete' value='delete' onclick='echo $lo'>";
                echo "<td>"."<input type='text' style='display:none' id='hidden1' name='id1' />"."</td>";
                echo "<td>"."<input type='text' style='display:none' id='hidden2' name='tn' />"."</td>";
                echo "</form>";


                /*if (isset($_REQUEST['delete'])) {
                  $ids = $_REQUEST['id1'];
                  $result = mysqli_query($conn ,"DELETE from scientific WHERE id='".$ids."'");
                }*/


              }
              }
            elseif ($btype=='religious') {
              $result = mysqli_query($conn ,"SELECT * from religious");
              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>"."<td>".$row['id'] ."  ".$row['book_name'] . "  ".$row['book_details']."</td>";
                $ids = $row['id'];
                echo "<td>"."<form action='tast.php'>"."<input type='submit' name='delete' value='delete' onclick='document.getElementById(\"hidden1\").value = $ids'>";
                echo "<td>"."<input type='text' style='display:none' id='hidden1' name='id1' />"."</td>";
                echo "</form>";


                if (isset($_REQUEST['delete'])) {
                  $ids = $_REQUEST['id1'];
                  $result = mysqli_query($conn ,"DELETE from scientific WHERE id='".$ids."'");
                }


              }
            }
            elseif ($btype=='scientific') {
              $result = mysqli_query($conn ,"SELECT * from scientific");
              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>"."<td>".$row['id'] ."  ".$row['book_name'] . "  ".$row['book_details']."</td>";
                $ids = $row['id'];
                echo "<td>"."<form action='tast.php'>"."<input type='submit' name='delete' value='delete' onclick='document.getElementById(\"hidden1\").value = $ids'>";
                echo "<td>"."<input type='text' style='display:none' id='hidden1' name='id1' />"."</td>";
                echo "</form>";


                if (isset($_REQUEST['delete'])) {
                  $ids = $_REQUEST['id1'];
                  $result = mysqli_query($conn ,"DELETE from scientific WHERE id='".$ids."'");
                }


              }
            }
            elseif ($btype=='add') {
              echo '<form type="GET" action= "adding.php" >';
              echo '<input type="text" name="book_n" placeholder="book_name" >';
              echo '<input type="text" name="book_d" placeholder="book_details" >';
              echo '<select class="choose" placeholder="type of book" name="booktypeadd">';
              echo '<option>scientific</option>';
              echo '<option>literaryk</option>';
              echo '<option>literaryr</option>';
              echo '<option>religious</option>';
              echo '</select>';
              echo '<input type = "submit" name="submit">';
              echo '</form>';
              session_destroy();


            }



             ?>
          </tr>

        </table>

    </div>

    </center>

  </body>
</html>
