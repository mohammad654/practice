<?php
//Connection to database__________________________________-
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grifland";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
//Password
//    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*";
//     echo  'Password : '.md5(substr(str_shuffle($alphabet),0,20))."<br>";

//$token = bin2hex(openssl_random_pseudo_bytes(16));
//echo'Password Token : ' .$token;