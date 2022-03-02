<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Settings -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>@yield('title')</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
        <!-- CSS Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Css Style -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- JS Scripts -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <p>Footer &copy; 2022</p>
        </header>
        @yield('content')
        <footer>
            <p>Footer &copy; 2022</p>
        </footer>
    </body>
</html>
