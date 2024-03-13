<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--    <link rel="preload" as="font" href="fonts/Poppins/Poppins-Regular.ttf" type="font/ttf" crossorigin="anonymous"/>--}}

    <title>Admin panel</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="admin">
    <AdminApp></AdminApp>
</div>
</body>
</html>
