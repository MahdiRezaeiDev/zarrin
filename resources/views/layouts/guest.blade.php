<!DOCTYPE html>
<html lang="fe" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'ورود به سیستم' }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/vazir-font@30.1.0/dist/font-face.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-blueGray-800 bg-full bg-no-repeat"
    style="background-image: url({{ asset('img/register_bg_2.png') }})">
    <main class="relative w-full pt-32">
        <div class="container mx-auto px-4 h-">
            <div class="flex content-center items-center justify-center h-">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
