<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'PoC')</title>
</head>
<body>
    <main class="container mt-3">
        @yield('main', 'Page under construction')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('script-after')
</body>
</html>

