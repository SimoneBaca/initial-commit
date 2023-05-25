<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Migration-seeder</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header></header>
    <main>
        @yield('page.main')
    </main>
    <footer></footer>
</body>

</html>