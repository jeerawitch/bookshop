<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $image = $_POST["url"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $price = $_POST["price"];

    $status = $admin->addProduct($image, $title, $author, $publisher, $price);

    if($status){
        header("Location:../productManagement.php");
    }
}

?>