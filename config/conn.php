<?php
    $host = 'localhost';
    $user = 'root';
    $psw = '';
    $db = 'schema';
    $conn = new mysqli($host, $user, $psw, $db);
    if ($conn && $conn->connect_error) {
      echo "Connection failed: " . $conn->connect_error;
    }
 ?>
