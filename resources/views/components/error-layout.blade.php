<!DOCTYPE html>
<html lang="fe" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <link href="https://cdn.jsdelivr.net/npm/vazir-font@30.1.0/dist/font-face.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-blueGray-700 antialiased bg-blueGray-100">
    <main>
        {{ $slot }}
    </main>
</body>

</html>
