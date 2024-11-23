<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $bookid = $_POST["product_id"];
    $imageurl = $_POST["imageurl"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $price = $_POST["price"];

    echo $bookid."<br>";
    echo $imageurl."<br>";
    echo $title."<br>";
    echo $author."<br>";
    echo $publisher."<br>";
    echo $price."<br>";
}

?>