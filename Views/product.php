<?php

require_once __DIR__ . "/../Model/connect.php";
require_once __DIR__ . "/component/session.php";

$result = $admin->getProduct();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <?php
        include("./component/navbar.php");
    ?>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Product</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <?php while ($product = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="<?= htmlspecialchars($product['ImageURL']) ?>" alt="<?= htmlspecialchars($product['Title']) ?>" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <!-- <a href="#"> -->
                                        <!-- <span aria-hidden="true" class="absolute inset-0"></span> -->
                                        <?= htmlspecialchars($product['Title']) ?>
                                    <!-- </a> -->
                                </h3>
                                <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($product['Author']) ?></p>
                                <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($product['Publisher']) ?></p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">฿<?= htmlspecialchars($product['Price']) ?></p>
                        </div>
                        <form action="./purchaseOrder.php" method="POST" class="mt-4">
                            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['BookID']) ?>">
                            <button type="submit" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-purple-600 w-full">Buy</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <?php
        include("./component/footer.php")
    ?>
    
</body>
</html>

