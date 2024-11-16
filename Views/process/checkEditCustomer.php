<?php

require_once __DIR__ . "/../../Model/connect.php";
require_once __DIR__ . "/../component/session.php";

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $userid = $_SESSION["userid"];

    $result = $user->updateCustomer($name, $address, $phone, $email, $userid);

    if($result){
        header("Location:../customerForm.php");
    }
}

?>