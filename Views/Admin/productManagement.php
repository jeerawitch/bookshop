<?php

require_once __DIR__ . "/../../Model/connect.php";

$result = $admin->getProduct();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductManagement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

        <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Product</h2>
                <a href="./addProduct.php" class="bg-blue-600 text-white font-semibold px-3 py-1 rounded-full shadow-md ">Add Product</a>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                <?php while ($product = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="<?= htmlspecialchars($product['ImageURL']) ?>" alt="<?= htmlspecialchars($product['Title']) ?>" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <!-- <span aria-hidden="true" class="absolute inset-0"></span> -->
                                        <?= htmlspecialchars($product['Title']) ?>
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($product['Publisher']) ?></p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$<?= htmlspecialchars($product['Price']) ?></p>
                        </div>

                        <div class="mt-4 flex justify-between">
                            <form action="./editProduct.php" method="POST" >
                                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['BookID']) ?>">
                                <button type="submit" name="submit" class="bg-blue-600 text-white font-semibold px-3 py-1 rounded-full shadow-md">Edit</button>  
                            </form>

                            <form action="./adminProcess/checkDeleteProduct.php" method="POST">
                                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['BookID']) ?>">
                                <button  onclick="return confirm('Confirm data deletion')" type="submit" name="submit" class="bg-red-600 text-white font-semibold px-3 py-1 rounded-full shadow-md">Delete</button>  
                            </form>
                            
                        </div>
                        
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://wesmckinney.com/book/images/cover.png" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                            <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Python for Data Analysis
                            </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">สำนักพิมพ์</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-blue-600 text-white font-semibold px-3 py-1 rounded-full shadow-md ">Edit</button>
                        <button class="bg-red-600 text-white font-semibold px-3 py-1 rounded-full shadow-md ">Delete</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Visitors',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> -->

<!-- <script>
   
    const menuToggle = document.getElementById("menu-toggle");
    const mobileSidebar = document.getElementById("mobile-sidebar");
    const sidebar = document.getElementById("sidebar");

    menuToggle.addEventListener("click", () => {
        mobileSidebar.classList.toggle("hidden");
    });
</script> -->

</body>
</html>
