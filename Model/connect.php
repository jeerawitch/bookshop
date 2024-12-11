<?php
require_once __DIR__ . "/../Controller/userController.php";
require_once __DIR__ . "/../Controller/adminController.php";

// $host = "localhost";
// $username = "root";
// $password = "";
// $db = "bookshop";
// $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

// try{
//     $pdo = new PDO($dsn, $username, $password);
//     echo "Connect Database";
// }catch(PDOException $e){
//     echo $e->getMessage();
// }

$host = "fdb1030.awardspace.net"; 
$username = "4544452_database";
$password = "6708600_bookshop"; 
$db = "4544452_database";
$port = 3306;
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$user = new User($pdo);
$admin = new Admin($pdo);
?>