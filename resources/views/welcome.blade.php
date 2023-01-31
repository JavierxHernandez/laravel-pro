<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
<div class="container mx-auto my-12">
    @php
        $type = 'danger'
    @endphp
    <x-alert2 :type="$type" id="prueba" class="mb-6">
        <x-slot:title>
            Test Title!
        </x-slot:title>
        This is a test
    </x-alert2>

    <x-alert2></x-alert2>
</div>
</body>
</html>
