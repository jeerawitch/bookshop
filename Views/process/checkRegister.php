<?php

require_once __DIR__ . "/../../Model/connect.php";

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $status = $user->insertUser($username, $password);

  if($status){
    header("Location:../login.php");
  }else{
    echo "Error";
  }
}

?>
