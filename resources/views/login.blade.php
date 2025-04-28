<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form class="bg-white p-6 rounded shadow-md w-80">
        <h2 class="text-2xl mb-4 text-center font-bold">Login</h2>
        <input type="text" placeholder="Username" class="w-full mb-3 px-3 py-2 border rounded">
        <input type="password" placeholder="Password" class="w-full mb-4 px-3 py-2 border rounded">
        <button class="bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">Login</button>
    </form>
</body>
</html>
