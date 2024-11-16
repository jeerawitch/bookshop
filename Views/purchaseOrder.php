<?php

require_once __DIR__ . "/../Model/connect.php";
require_once __DIR__ . "/component/session.php";
require_once __DIR__ . "/process/checkUserLogin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $customerid = $_SESSION["userid"];
  $bookid = $_POST["product_id"];

  $result = $admin->getProductByID($bookid);
  $customer = $user->getCustomer($customerid);
  // echo $bookid;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurchaseOrder</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php
        include("./component/navbar.php");
    ?>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <!-- <img class="mx-auto h-14 w-auto" src="../images/books.png" alt="Your Company"> -->
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Personal Information</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="./process/checkBuyProduct.php" method="POST">

            <div>
                <label for="Date" class="block text-sm/6 font-medium text-gray-900">Date</label>
                <div class="mt-2">
                <input type="text" name="date" readonly value="<?php echo date('Y-m-d'); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Customer" class="block text-sm/6 font-medium text-gray-900">Customer Name</label>
                <div class="mt-2">
                <input type="text" readonly value="<?php echo htmlspecialchars($customer['Name']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                <div class="mt-2">
                <input type="text" name="price" readonly value="<?php echo htmlspecialchars($result['Price']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
              <label for="Payment" class="block text-sm/6 font-medium text-gray-900">Payment Method</label>
              <div class="mt-2">
                <select name="payment" id="payment" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                  <option value="Cash on Delivery">Cash on Delivery</option>
                  <option value="Bank Transfer">Bank Transfer</option>
                </select>
              </div>
            </div>

            <div>
              <label for="Shipping" class="block text-sm/6 font-medium text-gray-900">Shipping Method</label>
              <div class="mt-2">
                <select name="shipping" id="shipping" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                  <option value="Standard">Standard</option>
                  <option value="Express">Express</option>
                </select>
              </div>
            </div>

            <div>
                <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Confirm</button>
            </div>
        </form>
      </div>
    </div>

    <?php
        include("./component/footer.php")
    ?>
</body>
</html>