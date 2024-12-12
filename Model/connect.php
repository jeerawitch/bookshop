<?php
require_once __DIR__ . "/../Controller/userController.php";
require_once __DIR__ . "/../Controller/adminController.php";

$host = "sql12.freesqldatabase.com";
$username = "sql12751536";
$password = "LE2t1AUkcf";
$db = "sql12751536";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

try{
    $pdo = new PDO($dsn, $username, $password);
    echo "Connect Database";
}catch(PDOException $e){
    echo $e->getMessage();
}

$user = new User($pdo);
$admin = new Admin($pdo);
?>