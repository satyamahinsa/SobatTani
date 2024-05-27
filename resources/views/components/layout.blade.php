<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
=======
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
>>>>>>> 8ea6186a9b6223fd7bc63fa7289e18c0be28782b
    <title>{{ $title }} | Sobat Tani</title>
</head>
<body>
    <x-navbar></x-navbar>

    {{ $slot }}
</body>
</html>