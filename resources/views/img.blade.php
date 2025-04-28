<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Gambar & Style</title>
    
    <link rel="stylesheet" href="{{ asset('styles/styleshelen.css') }}">

    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-gray-100 p-4">

    <h1 class="text-red-500 text-3xl font-bold text-center mb-6">Ini Praktikum Helena</h1>
    
    <div class="flex justify-center gap-6">
        <img src="{{ asset('images/studio 1.jpeg') }}" alt="Gambar Pertama" class="w-64 rounded shadow-md">
        <img src="{{ asset('images/studio 2.jpeg') }}" alt="Gambar Kedua" class="w-64 rounded shadow-md">
    </div>

</body>
</html>
