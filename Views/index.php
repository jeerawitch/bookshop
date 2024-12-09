<?php

require_once __DIR__ . "/component/session.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookShop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <?php
        include("./component/navbar.php");
    ?>

    <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Everyday Technology That Drives Your Life</h1>
                    <p class="mt-4 text-xl text-gray-500">Discover a world of knowledge with books covering diverse topics such as programming, database management, artificial intelligence, and technologies shaping daily life. Find new ideas and enhance your skills here.</p>
                </div>
                <div>
                    <div class="mt-10">
                        <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img src="https://m.media-amazon.com/images/I/51wijnc-Y8L.jpg" alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="https://wesmckinney.com/book/images/cover.png" alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="https://blog.symphonia.io/posts/2020-04-01_programming_aws_lambda_book/images/1.png" alt="" class="h-full w-full object-cover object-center hidden md:block">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="https://m.media-amazon.com/images/I/91bobQSPQrL._AC_UF1000,1000_QL80_.jpg" alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="https://m.media-amazon.com/images/I/819DmGB3vhL._AC_CR0%2C0%2C0%2C0_SX352_SY330_.jpg" alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="https://m.media-amazon.com/images/I/41r-ZeMahwL.jpg" alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="https://m.media-amazon.com/images/I/71UGlGTYL6L._AC_UF1000,1000_QL80_.jpg" alt="" class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="./product.php" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
    
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
            <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://media.licdn.com/dms/image/D4E12AQGKq13jy1jk3g/article-cover_image-shrink_600_2000/0/1718276910176?e=2147483647&v=beta&t=qhmZkQz95RTCnsA1-UtN2zxspMPZdR4FvLwp3-ACCj0" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                <a href="./product.php">
                    <span class="absolute inset-0"></span>
                    Technology
                </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Programming</p>
            </div>
            <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://assets.datamation.com/uploads/2024/01/dm_20240102-types-of-data-analytics.png" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                <a href="./product.php">
                    <span class="absolute inset-0"></span>
                    Technology
                </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Data Analysis</p>
            </div>
            <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://media.npr.org/assets/img/2023/05/24/gettyimages-1358149692-39527b1e42cc64b90835222f8aa203956538fe0e.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                <a href="./product.php">
                    <span class="absolute inset-0"></span>
                    Technology
                </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Artificial Intelligence</p>
            </div>
            </div>
        </div>
        </div>
  </div>

    <?php
        include("./component/footer.php")
    ?>

</body>
</html>