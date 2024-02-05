<?php

    $hostname ="localhost";
    $username ="root";
    $password ="";
    $database ="phplearn";


    $conn = new mysqli($hostname, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
      
      ?>



