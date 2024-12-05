<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $paymentid = $_POST["paymentid"];
    $paymentmethod = $_POST["paymentmethod"];
    $paymentstatus = $_POST["paymentstatus"];

    $status = $admin->updatePayment($paymentid, $paymentmethod, $paymentstatus);

    if($status){
        header("Location:../paymentManagement.php");
    }

    // echo $paymentid."<br>";
    // echo $paymentmethod."<br>";
    // echo $paymentstatus."<br>";
}

?>