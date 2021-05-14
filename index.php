<?php
  require_once('config/conn.php');
 ?>
<!DOCTYPE html>
<html lang="it-IT" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $sql = "SELECT * FROM stanze";
      $result = $conn->query($sql);
     ?>
     <ul id="rooms">
       <?php
          while($row = $result->fetch_assoc()) {
            ?>
            <li>
              <a href="details.php?id=<?php echo $row['id'];?>">
                <?php
                echo "ID della stanza: " . $row['id'] . "<br>";
                echo "Stanza numero: " . $row['room_number'];
                 ?>
              </a>
            </li>
          <?php
            }
          ?>
     </ul>
  </body>
</html>
