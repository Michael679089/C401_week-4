<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="text-[10px] py-4 px-2 text-green-500 header">../C401_Week 4</h1>
    <div class="text-white">
        @yield('content')
    </div>
</body>
</html>