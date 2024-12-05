<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $paymentid = $_POST["paymentid"];

    $status = $admin->deleteOrder($paymentid);

    if($status){
        header("Location:../paymentManagement.php");
    }

    // echo $paymentid."<br>";
}

?>