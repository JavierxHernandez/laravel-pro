<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Blade Layout')</title>
    @stack('meta')
    @yield('styles')
</head>
<body>

    @section('header')
        <header>
            <h1>This is a header</h1>
        </header>
    @show

    @yield('content')
</body>
</html>
