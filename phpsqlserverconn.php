<?php
 $servername = "DEV";
 $username = "root";
 $password = "12345";
 try{
     $conn = new PDO("mysql:host=$servername;",$username,$password);
     // set PDO error mode to exception mode
     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     echo "Connect successful";
 }catch (PDOException $e){
    echo "Connection failed ".$e->getMessage();
 }
?>