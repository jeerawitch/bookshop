<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $customerid = $_POST["customerid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $status = $user->updateCustomer($name, $address, $phone, $email, $customerid);
    
    if($status){
        header("Location:../userManagement.php");
    }

    // echo $customerid."<br>";
    // echo $name."<br>";
    // echo $email."<br>";
    // echo $phone."<br>";
    // echo $address."<br>";
}

?>