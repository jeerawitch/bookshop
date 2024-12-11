<!-- Sidebar -->
<div class="w-full md:w-64 bg-white shadow-lg md:min-h-screen">
    <!-- Mobile Hamburger Menu Button -->
    <div class="flex justify-between items-center p-6 md:hidden">
        <h1 class="text-2xl font-bold text-blue-600">Adminator</h1>
        <button id="menu-toggle" class="text-gray-700">
            <span class="material-icons">menu</span>
        </button>
    </div>

    <!-- Sidebar Menu (Hidden on mobile) -->
    <nav id="sidebar" class="px-6 py-4 space-y-2 md:block hidden">
    <div class="p-6">
            <h1 class="text-2xl font-bold text-blue-600">Adminator</h1>
        </div>
        <a href="./dashboard.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/home.png" alt="home.png"></span> <span class="ml-2">Dashboard</span>
        </a>
        <a href="./productManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/product.png" alt="product.png"></span> <span class="ml-2">Product</span>
        </a>
        <a href="./userManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/user.png" alt="user.png"></span> <span class="ml-2">User</span>
        </a>
        <a href="./orderManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/order.png" alt="order.png"></span> <span class="ml-2">Order</span>
        </a>
        <a href="./purchaseManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/purchase.png" alt="purchase.png"></span> <span class="ml-2">Purchase</span>
        </a>
        <a href="./paymentManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/payment.png" alt="payment.png"></span> <span class="ml-2">Payment</span>
        </a>
        <a href="./shippingManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/shipping.png" alt="shipping.png"></span> <span class="ml-2">Shipping</span>
        </a>
        <a href="../../index.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/signout.png" alt="signout.png"></span> <span class="ml-2">Sign out</span>
        </a>
    </nav>

    <!-- Mobile Sidebar (Hidden on Desktop) -->
    <nav id="mobile-sidebar" class="px-6 py-4 space-y-2 md:hidden h-screen hidden">
    <a href="./dashboard.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/home.png" alt="home.png"></span> <span class="ml-2">Dashboard</span>
        </a>
        <a href="./productManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/product.png" alt="product.png"></span> <span class="ml-2">Product</span>
        </a>
        <a href="./userManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/user.png" alt="user.png"></span> <span class="ml-2">User</span>
        </a>
        <a href="./orderManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/order.png" alt="order.png"></span> <span class="ml-2">Order</span>
        </a>
        <a href="./purchaseManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/purchase.png" alt="purchase.png"></span> <span class="ml-2">Purchase</span>
        </a>
        <a href="./paymentManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/payment.png" alt="payment.png"></span> <span class="ml-2">Payment</span>
        </a>
        <a href="./shippingManagement.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/shipping.png" alt="shipping.png"></span> <span class="ml-2">Shipping</span>
        </a>
        <a href="../../index.php" class="flex items-center p-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 rounded-lg">
            <span><img class="w-6" src="../../images/signout.png" alt="signout.png"></span> <span class="ml-2">Sign out</span>
        </a>
    </nav>
</div>

<script>
    // Toggle mobile sidebar visibility
    const menuToggle = document.getElementById("menu-toggle");
    const mobileSidebar = document.getElementById("mobile-sidebar");
    const sidebar = document.getElementById("sidebar");

    menuToggle.addEventListener("click", () => {
        mobileSidebar.classList.toggle("hidden");
    });
</script>