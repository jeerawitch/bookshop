<?php

require_once __DIR__ . "/../component/session.php";


if(!isset($_SESSION["userid"])){
    header("Location:./login.php");
}

?>