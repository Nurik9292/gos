<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    <link rel="preload" as="font" href="fonts/Poppins/Poppins-Regular.ttf" type="font/ttf" crossorigin="anonymous"/>--}}

    <title>Gos</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <App></App>
    </div>
</body>
</html>
