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
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here</h1>
                    <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from the harsh elements of a world that doesn't care if you live or die.</p>
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
                                            <img src="https://blog.symphonia.io/posts/2020-04-01_programming_aws_lambda_book/images/1.png" alt="" class="h-full w-full object-cover object-center">
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

                        <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop Collection</a>
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
                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Desk and Office
                </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
            </div>
            <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Self-Improvement
                </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
            </div>
            <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://tailwindui.com/plus/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Travel
                </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
            </div>
            </div>
        </div>
        </div>
  </div>

    <?php
        include("./component/footer.php")
    ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');

        // Toggle menu visibility
        menuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu when clicking the close button
        closeMenu.addEventListener('click', function () {
            mobileMenu.classList.add('hidden');
        });
    });
</script>

</body>
</html>