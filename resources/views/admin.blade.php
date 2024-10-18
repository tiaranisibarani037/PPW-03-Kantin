<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Menu</h1>
            <div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded mr-2" onclick="openModal()">Hasil vote</button>
                
                <button class="bg-green-500 text-white px-4 py-2 rounded" onclick="window.location.href='{{ route('createfood') }}'">Create Food</button>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="A bowl of Sop Ayam with vegetables and herbs" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/VN13DYSUiKpuAF77UFaGF0zR48l8oCBQzedlqzsr5fkal9nTA.jpg" width="300"/>
                <div class="p-4">
                    <h2 class="text-xl font-bold">Sop Ayam</h2>
                    <p class="text-gray-600">Deskripsi Sop Ayam</p>
                    <div class="flex items-center mt-2 mb-4">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded">Vote</button>
                        <button class="bg-gray-500 text-white px-4 py-2 rounded">Hapus</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="A bowl of Sup Jagung with corn and vegetables" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/tyn5lr6g3lLvH54Kr7rdZfWeI1Fa7exbASM4cbmEmNxzK7PnA.jpg" width="300"/>
                <div class="p-4">
                    <h2 class="text-xl font-bold">Sup Jagung</h2>
                    <p class="text-gray-600">Deskripsi Sup Jagung</p>
                    <div class="flex items-center mt-2 mb-4">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded">Vote</button>
                        <button class="bg-gray-500 text-white px-4 py-2 rounded">Hapus</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="A bowl of Bubur with vegetables and herbs" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/81ycrPbKirZoEhaXO7v8PMOjYDQdxlH62dNVsyWb1qyVZfzJA.jpg" width="300"/>
                <div class="p-4">
                    <h2 class="text-xl font-bold">Bubur</h2>
                    <p class="text-gray-600">Deskripsi Bubur</p>
                    <div class="flex items-center mt-2 mb-4">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-green-500 text-white px-4 py-2 rounded">Vote</button>
                        <button class="bg-gray-500 text-white px-4 py-2 rounded">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="voteModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/2">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Hasil Vote</h2>
                <button class="text-gray-500" onclick="closeModal()">&times;</button>
            </div>
            <canvas id="voteChart"></canvas>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('voteModal').classList.remove('hidden');
            renderChart();
        }

        function closeModal() {
            document.getElementById('voteModal').classList.add('hidden');
        }

        function renderChart() {
            var ctx = document.getElementById('voteChart').getContext('2d');
            var voteChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Sop Ayam', 'Sup Jagung', 'Bubur'],
                    datasets: [{
                        label: 'Votes',
                        data: [12, 19, 3],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
</body>
</html>