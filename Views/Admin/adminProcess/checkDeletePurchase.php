<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $orderid = $_POST["orderid"];

    $status = $admin->deleteOrder($orderid);

    if($status){
        header("Location:../purchaseManagement.php");
    }

    // echo $orderid."<br>";
}

?>