<?php

require_once __DIR__ . "/../../Model/connect.php";
// require_once __DIR__ . "/component/session.php";

// $userid = $_SESSION["userid"];


if(isset($_POST["submit"])){
    $paymentid = $_POST["paymentid"];
    $result = $admin->getPaymentByID($paymentid);
    // echo $paymentid."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditPayment</title>
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
        <form class="space-y-6" action="./adminProcess/checkEditPayment.php" method="POST">
            <div>
                <label for="Order" class="block text-sm/6 font-medium text-gray-900">Order</label>
                <div class="mt-2">
                <input readonly type="text" name="order" value="<?php echo htmlspecialchars($result['OrderID']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="PaymentAmount" class="block text-sm/6 font-medium text-gray-900">PaymentAmount</label>
                <div class="mt-2">
                <input readonly type="text" name="paymentamount" value="<?php echo htmlspecialchars($result['PaymentAmount']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="PaymentMethod" class="block text-sm/6 font-medium text-gray-900">PaymentMethod</label>
                <div class="mt-2">
                <select name="paymentmethod" id="paymentmethod" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    <option value="<?php echo htmlspecialchars($result['PaymentMethod']); ?>" hidden><?php echo htmlspecialchars($result['PaymentMethod']); ?></option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
                <!-- <input readonly type="text" name="paymentmethod" value="<?php echo htmlspecialchars($result['PaymentMethod']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"> -->
                </div>
            </div>

            <div>
                <label for="PaymentDate" class="block text-sm/6 font-medium text-gray-900">PaymentDate</label>
                <div class="mt-2">
                <input readonly type="text" name="paymentdate" value="<?php echo htmlspecialchars($result['PaymentDate']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="PaymentStatus" class="block text-sm/6 font-medium text-gray-900">PaymentStatus</label>
                <div class="mt-2">
                <select name="paymentstatus" id="paymentstatus" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    <option value="<?php echo htmlspecialchars($result['PaymentStatus']); ?>" hidden><?php echo htmlspecialchars($result['PaymentStatus']); ?></option>
                    <option value="Pending">Pending</option>
                    <option value="Complete">Complete</option>
                    <option value="Cancle">Cancle</option>
                </select>    
                <!-- <input readonly type="text" name="paymentstatus" value="<?php echo htmlspecialchars($result['PaymentStatus']); ?>" class="block w-full rounded-md border-0 bg-gray-100 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"> -->
                </div>
            </div>

            <div>
                <input type="hidden" name="paymentid" value="<?= $paymentid ?>">
                <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

            <div>
                <a href="./paymentManagement.php" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
            </div>
        </form>
      </div>
    </div>

</body>
</html>

            
        