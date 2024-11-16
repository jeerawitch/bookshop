<?php

require_once __DIR__ . "/../../Model/connect.php";
require_once __DIR__ . "/../component/session.php";

if(isset($_POST["submit"])){
    $userid = $_SESSION["userid"];
    $date = $_POST["date"];
    $price = $_POST["price"];
    $payment = $_POST["payment"];
    $shipping = $_POST["shipping"];

    // echo $userid."<br>";
    // echo $date."<br>";
    // echo $price."<br>";
    // echo $payment."<br>";
    // echo $shipping."<br>";

    $result = $user->insertOrder($userid, $date, $price, $payment, $shipping);

    if($result){
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login failed</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </head>
        <body>
            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Success</h5>
                        </div>
                        <div class="modal-body">
                            <p>Order Success</p>
                        </div>
                        <div class="modal-footer">
                            <a href="../product.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var myModal = new bootstrap.Modal(document.querySelector('.modal'));
                    myModal.show();
                });
            </script>

        </body>
        </html>

       <?php
    }
}
?>
