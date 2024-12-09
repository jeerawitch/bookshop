<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $shippingid = $_POST["shippingid"];
    $shippingmethod = $_POST["shippingmethod"];
    $shippingstatus = $_POST["shippingstatus"];
    $trackingnumber = $_POST["trackingnumber"];

    $status = $admin->updateShipping($shippingid, $shippingmethod, $shippingstatus, $trackingnumber);

    if($status){
        header("Location:../shippingManagement.php");
    }

    // echo $shippingid."<br>";
    // echo $shippingmethod."<br>";
    // echo $shippingstatus."<br>";
    // echo $trackingnumber."<br>";
}

?>