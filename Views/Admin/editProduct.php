<?php

require_once __DIR__ . "/../../Model/connect.php";
// require_once __DIR__ . "/component/session.php";

// $userid = $_SESSION["userid"];


if(isset($_POST["submit"])){
    $bookid = $_POST["product_id"];
    $result = $admin->getProductByID($bookid);
    // echo $bookid."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditProduct</title>
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
        <form class="space-y-6" action="./adminProcess/checkEditProduct.php" method="POST">

            <div>
                <label for="ImageURL" class="block text-sm/6 font-medium text-gray-900">ImageURL</label>
                <div class="mt-2">
                <input type="text" name="imageurl" value="<?php echo htmlspecialchars($result['ImageURL']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                <input type="text" name="title" value="<?php echo htmlspecialchars($result['Title']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Author" class="block text-sm/6 font-medium text-gray-900">Author</label>
                <div class="mt-2">
                <input type="text" name="author" value="<?php echo htmlspecialchars($result['Author']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Publisher" class="block text-sm/6 font-medium text-gray-900">Publisher</label>
                <div class="mt-2">
                <input type="text" name="publisher" value="<?php echo htmlspecialchars($result['Publisher']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <label for="Price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                <div class="mt-2">
                <input type="text" name="price" value="<?php echo htmlspecialchars($result['Price']); ?>" class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <input type="hidden" name="product_id" value="<?= $bookid ?>">
                <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

            <div>
                <a href="./productManagement.php" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 px-1.5 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
            </div>
        </form>
      </div>
    </div>

</body>
</html>

            
        