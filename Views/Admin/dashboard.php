<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h3 class="text-gray-500">Total Visits</h3>
                <p class="text-2xl font-bold text-green-500">+10%</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h3 class="text-gray-500">Total Page Views</h3>
                <p class="text-2xl font-bold text-red-500">-7%</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h3 class="text-gray-500">Unique Visitor</h3>
                <p class="text-2xl font-bold text-blue-500">-12%</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h3 class="text-gray-500">Bounce Rate</h3>
                <p class="text-2xl font-bold text-yellow-500">33%</p>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="p-6 bg-white rounded-lg shadow-md mb-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Site Visits Chart</h3>
            <canvas id="myChart" class="w-full h-64"></canvas>
        </div>

        <!-- Map and Visitor Stats Section (แทนที่ Data Table) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Map Section -->
            <div class="col-span-2 p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Site Visits</h3>
                <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                    <iframe class="w-full h-64" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4199.605367809995!2d100.58411927538435!3d13.964255892338642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sth!2sth!4v1733754307140!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <span class="text-gray-500">Map Placeholder</span> -->
                </div>
            </div>

            <!-- Visitor Stats -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Visitor Stats</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm">150 Visitors From Nonthaburi</p>
                        <div class="relative pt-1">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                                <div style="width:50%" class="bg-purple-500 rounded h-2"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm">170 Visitors From Pathum Thani</p>
                        <div class="relative pt-1">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                                <div style="width:80%" class="bg-green-500 rounded h-2"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm">140 Visitors From Nakhon Nayok</p>
                        <div class="relative pt-1">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                                <div style="width:40%" class="bg-blue-500 rounded h-2"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm">180 Visitors From Bangkok</p>
                        <div class="relative pt-1">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                                <div style="width:90%" class="bg-gray-700 rounded h-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional Stats -->
                <div class="flex space-x-4 mt-6">
                    <div class="flex flex-col items-center">
                        <span class="text-3xl font-bold text-red-500">75%</span>
                        <span class="text-sm text-gray-500">New Users</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-3xl font-bold text-blue-500">50%</span>
                        <span class="text-sm text-gray-500">New Purchases</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-3xl font-bold text-yellow-500">90%</span>
                        <span class="text-sm text-gray-500">Bounce Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
</script>

</body>
</html>
