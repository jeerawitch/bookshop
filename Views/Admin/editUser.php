<?php

require_once __DIR__ . "/../../Model/connect.php";
// require_once __DIR__ . "/component/session.php";

// $userid = $_SESSION["userid"];


if(isset($_POST["submit"])){
    $customerid = $_POST["customerid"];
    $result = $user->getCustomer($customerid);
    // echo $customerid."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditUser</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <!-- <img class="mx-auto h-14 w-auto" src="../images/books.png" alt="Your Company"> -->
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Edit Product</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="./adminProcess/checkEditUser.php" method="POST">
            <div>
                <label for="Name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                <div class="mt-2">
                <input type="text" name="name" value="<?php echo htmlspecialchars($result['Name']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                <div class="mt-2">
                <input type="text" name="email" value="<?php echo htmlspecialchars($result['Email']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Phone" class="block text-sm/6 font-medium text-gray-900">Phone</label>
                <div class="mt-2">
                <input type="text" name="phone" value="<?php echo htmlspecialchars($result['Phone']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Address" class="block text-sm/6 font-medium text-gray-900">Address</label>
                <div class="mt-2">
                <input type="text" name="address" value="<?php echo htmlspecialchars($result['Address']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <input type="hidden" name="customerid" value="<?= $customerid ?>">
                <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
      </div>
    </div>

</body>
</html>

            
        