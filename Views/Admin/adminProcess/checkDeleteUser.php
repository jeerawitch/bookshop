<?php

require_once __DIR__ . "/../../../Model/connect.php";

if(isset($_POST["submit"])){
    $customerid = $_POST["customerid"];

    $status = $user->deleteCustomer($customerid);

    if($status){
        header("Location:../userManagement.php");
    }
}

?>