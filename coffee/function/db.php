<?php


 class Dbconn
 {
     public function __construct()
     {
     }
     public function DbConnect()
     {
         // make sure model config and systema
         $conn = mysqli_connect('localhost', 'root', '', 'cafeshop');
         // Check connection
         if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
             exit();
         } else {
             mysqli_set_charset($conn, 'utf8');
             return $conn;
         }
     }
 }
