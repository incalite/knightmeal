<?php 
$user = 'root';
$pass = '';
$pdo = new PDO('mysql:host=localhost;dbname=knightmeal', $user, $pass);
if (!$pdo){
    header('location:index.php');
}


