<?php

require_once __DIR__ . "/../../Model/connect.php";

$result = $admin->getAllPurchase();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurchaseManagement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="flex flex-col md:flex-row">

    <?php
        include("./component/sidebar.php");
    ?>    

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Navbar -->
        <header class="flex flex-col md:flex-row justify-between items-center p-6 bg-gray-100 shadow mb-6">
            <h2 class="text-3xl font-semibold text-gray-800">Dashboard</h2>
            <div class="flex items-center space-x-4 mt-4 md:mt-0">
                <button class="p-2 bg-gray-200 rounded-full hover:bg-gray-300">
                    <span class="material-icons">notifications</span>
                </button>
                <button class="p-2 bg-gray-200 rounded-full hover:bg-gray-300">
                    <span class="material-icons">mail</span>
                </button>
                <span class="font-medium">Admin</span>
            </div>
        </header>

        <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h2>Purchase Management System</h2>
                </div>
            </div>
        </div>
    </div>   

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>OrderID</th>
                <th>OrderDate</th>
                <th>TotalAmount</th>
                <th>OrderStatus</th>
                <th>PaymentMethod</th>
                <th>ShippingtMethod</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row["OrderID"] ?></td>
                    <td class="text-center"><?php echo $row["OrderDate"] ?></td>
                    <td class="text-center"><?php echo $row["TotalAmount"] ?></td>
                    <td class="text-center"><?php echo $row["OrderStatus"] ?></td>
                    <td class="text-center"><?php echo $row["PaymentStatus"] ?></td>
                    <td class="text-center"><?php echo $row["ShippingMethod"] ?></td>
                    <td class="text-center">
                        <div class="flex justify-center space-x-2">
                            <form action="./editPurchase.php" method="POST" >
                                <input type="hidden" name="orderid" value="<?= htmlspecialchars($row['OrderID']) ?>">
                                <button type="submit" name="submit" class="bg-blue-600 text-white font-semibold px-3 py-1 rounded-full shadow-md">Edit</button>  
                            </form>
                            <form action="./adminProcess/checkDeletePurchase.php" method="POST">
                                <input type="hidden" name="orderid" value="<?= htmlspecialchars($row['OrderID']) ?>">
                                <button  onclick="return confirm('Confirm data deletion')" type="submit" name="submit" class="bg-red-600 text-white font-semibold px-3 py-1 rounded-full shadow-md">Delete</button>  
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    // DataTable
        var table = $('#example').DataTable( {
        colReorder: true,
        buttons: [
            'colvis'
        ]
    } );
} );
</script>

</body>
</html>
