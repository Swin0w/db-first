<?php
  include('index.php');
 ?>
 <!DOCTYPE html>
 <html lang="it-IT" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <p>
        <?php
          echo "Piano: " . $row['floor'] . "<br>";
          echo "Camera: " . $row['beds'];
         ?>
     </p>
   </body>
 </html>
