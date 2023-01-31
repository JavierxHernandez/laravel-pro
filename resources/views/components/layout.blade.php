<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--@isset($meta)
        {{ $meta }}
    @endisset--}}
    @stack('meta')
    <title>{{ $title ?? 'Laravel-pro' }}</title>
</head>
<body>
{{ $slot }}
</body>
</html>