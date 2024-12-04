<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $orderitemid = $_POST["orderitemid"];

    $status = $admin->deleteOrder($orderitemid);

    if($status){
        header("Location:../orderManagement.php");
    }

    echo $orderitemid."<br>";
}

?>