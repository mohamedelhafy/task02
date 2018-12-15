<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>library</title>
    <link rel="stylesheet" href="task021.css" type="text/css"> <!--   (cssبhtml) ربط -->
    <meta name="viewport" content="width=device-width ,initial-scale=1.0,user-scalable=no">
  </head>
  <body>
    <center>
      <div>
        <table>
          <form class="" action="tast.php" method="post">
            <tr>
              <td> <input type="text" name="search" placeholder="search" > </td>
              <td> <input type="submit" name="search" value="search" onclick="document.getElementById('hidden').value = 'search'" ></td>
            </tr>
            <tr>
              <td> <input type="submit" name="literary" value="literaryr" onclick="document.getElementById('hidden').value = 'literaryr'"> </td>
            </tr>
            <tr>
              <td> <input type="submit" name="literary" value="literaryk" onclick="document.getElementById('hidden').value = 'literaryk'"> </td>
            </tr>
            <tr>
              <td> <input type="submit" name="religious" value="religious" onclick="document.getElementById('hidden').value = 'religious'"> </td>
            </tr>
            <tr>
              <td> <input type="submit" name="scientific" value="scientific" onclick="document.getElementById('hidden').value = 'scientific'"> </td>
            </tr>
            <tr>
              <td> <input type="submit" name="add" value="add new book" onclick="document.getElementById('hidden').value = 'add'"> </td>
            </tr>
            <tr>
              <td><input type="text" style="display:none" id="hidden" name="id1" /></td>
            </tr>
            <tr>
              <td><input type="text" style="display:none" id="hidden" name="hiddenVal" /></td>
            </tr>



          </form>
        </table>
      </div>
    </center>
  </body>
</html>
