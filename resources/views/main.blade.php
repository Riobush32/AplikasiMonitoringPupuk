<!doctype html>
<html data-theme="rio">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/bsp-logo-png.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @livewireStyles
        @vite('resources/css/app.css')
</head>

<body class="bg-primary py-3 w-full h-full bg-opacity-30 min-h-screen">
    <div class="w-[98vw] mx-auto">
        @include('components.navbar')
        @include('components.sidebar')


        @yield('content')
    </div>


<script>
    function goBack() {
      window.history.back();
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    @livewireScripts
</body>

</html>
