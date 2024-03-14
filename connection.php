<?php


  $host_n = 'localhost';
  $user = 'root';
  $passW ='';
  $db = 'lmms';

  $conn = new mysqli ($host_n, $user, $passW, $db);

   if($conn -> connect_error)
   {
    die("Connection failed: " . $conn->connect_error);
   }

  
?>