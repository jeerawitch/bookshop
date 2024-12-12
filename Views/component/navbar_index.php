<div class="bg-white">
    <!-- <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

        <div class="fixed inset-0 z-40 flex">
            <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                <div class="flex px-4 pb-2 pt-5">
                    <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="./index.php" class="-m-2 block p-2 font-medium text-gray-900">Home</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Product</a>
                    </div>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                </div>
                </div>

                <div class="border-t border-gray-200 px-4 py-6">
                <a href="#" class="-m-2 flex items-center p-2">
                    <img src="https://tailwindui.com/plus/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 shrink-0">
                    <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                    <span class="sr-only">, change currency</span>
                </a>
                </div>
            </div>
        </div>
    </div> -->

    <header class="relative bg-white">
    <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">
        Welcome To Bookshop
    </p>

    <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
            <div class="flex h-16 items-center">
                <!-- Mobile menu button -->
                <button id="menuButton" type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <!-- Logo -->
                <div class="ml-4 flex lg:ml-0">
                    <a href="./index.php">
                        <span class="sr-only">Your Company</span>
                        <img class="h-10 w-auto" src="./images/books.png" alt="Logo">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                    <div class="flex h-full space-x-8">
                        <a href="./index.php" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Home</a>
                        <a href="./Views/product.php" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Product</a>
                    </div>
                </div>

                <!-- Actions -->
                <div class="ml-auto flex items-center">
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <?php if (isset($_SESSION["userid"])): ?>
                            <a href="./Views/process/checkLogout.php" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign out</a>
                        <?php else: ?>
                            <a href="./Views/login.php" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                        <?php endif; ?>
                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                        <a href="./Views/register.php" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                    </div>

                    <!-- Admin -->
                    <div class="flex lg:ml-6">
                        <a href="./Views/adminLogin.php" class="p-2 ">
                            <span class="flex w-full justify-center rounded-md bg-purple-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-purple-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Admin</span>
                        </a>
                    </div>

                    <!-- User Profile -->
                    <div class="ml-4 flow-root lg:ml-6">
                        <?php if (isset($_SESSION["userid"])): ?>
                            <a href="./Views/customerForm.php" class="group -m-2 flex items-center p-2">
                                <img class="h-9 w-auto" src="./images/userLogin.png" alt="User logged in">
                            </a>
                        <?php else: ?>
                            <a href="./Views/login.php" class="group -m-2 flex items-center p-2">
                                <img class="h-9 w-auto" src="./images/userLogout.png" alt="User logged out">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden absolute top-0 left-0 w-full h-screen bg-white shadow-md z-50">
        <div class="p-4">
            <button id="closeMenu" type="button" class="mb-4 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <a href="./index.php" class="block text-gray-700 hover:text-gray-800 text-sm font-medium">Home</a>
            <a href="./Views/product.php" class="block mt-2 text-gray-700 hover:text-gray-800 text-sm font-medium">Product</a>
            <hr class="mt-4">
            <a href="./Views/login.php" class="block mt-2 text-gray-700 hover:text-gray-800 text-sm font-medium">Sign in</a>
            <a href="./Views/register.php" class="block mt-2 text-gray-700 hover:text-gray-800 text-sm font-medium">Create account</a>
        </div>
    </div>
</header>
</div>

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