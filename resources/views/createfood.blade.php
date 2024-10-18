<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold">Create Food</h2>
            <button class="text-gray-500 text-2xl">&times;</button>
        </div>
        <form>
            <div class="mb-6">
                <input type="text" placeholder="Food Name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-6">
                <input type="file" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-6">
                <textarea placeholder="Food Description" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 transition duration-300">Create Food</button>
        </form>
    </div>
</body>
</html>