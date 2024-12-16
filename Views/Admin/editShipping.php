<?php

require_once __DIR__ . "/../../Model/connect.php";
// require_once __DIR__ . "/component/session.php";

// $userid = $_SESSION["userid"];


if(isset($_POST["submit"])){
    $shippingid = $_POST["shippingid"];
    $result = $admin->getShippingByID($shippingid);
    // echo $shippingid."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditShipping</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <!-- <img class="mx-auto h-14 w-auto" src="../images/books.png" alt="Your Company"> -->
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Edit Customer</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="./adminProcess/checkEditShipping.php" method="POST">
            <div>
                <label for="Order" class="block text-sm/6 font-medium text-gray-900">Order</label>
                <div class="mt-2">
                <input readonly type="text" name="order" value="<?php echo htmlspecialchars($result['OrderID']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="ShippingMethod" class="block text-sm/6 font-medium text-gray-900">ShippingMethod</label>
                <div class="mt-2">
                <select name="shippingmethod" id="shippingmethod" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    <option value="<?php echo htmlspecialchars($result['ShippingMethod']); ?>" hidden><?php echo htmlspecialchars($result['ShippingMethod']); ?></option>
                    <option value="Standard">Standard</option>
                    <option value="Express">Express</option>
                </select>
                <!-- <input readonly type="text" name="paymentmethod" value="<?php echo htmlspecialchars($result['PaymentMethod']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"> -->
                </div>
            </div>

            <div>
                <label for="ShippingStatus" class="block text-sm/6 font-medium text-gray-900">ShippingStatus</label>
                <div class="mt-2">
                <select name="shippingstatus" id="shippingstatus" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    <option value="<?php echo htmlspecialchars($result['ShippingStatus']); ?>" hidden><?php echo htmlspecialchars($result['ShippingStatus']); ?></option>
                    <option value="Pending">Pending</option>
                    <option value="Complete">Complete</option>
                    <option value="Cancle">Cancle</option>
                </select>    
                <!-- <input readonly type="text" name="paymentstatus" value="<?php echo htmlspecialchars($result['PaymentStatus']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"> -->
                </div>
            </div>

            <div>
                <label for="TrackingNumber" class="block text-sm/6 font-medium text-gray-900">TrackingNumber</label>
                <div class="mt-2">
                <input type="text" name="trackingnumber" value="<?php echo htmlspecialchars($result['TrackingNumber']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <input type="hidden" name="shippingid" value="<?= $shippingid ?>">
                <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

            <div>
                <a href="./shippingManagement.php" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
            </div>
        </form>
      </div>
    </div>

</body>
</html>

            
        