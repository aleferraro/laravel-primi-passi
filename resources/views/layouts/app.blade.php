<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App - @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    @include('common.header')

    @section('main')
    @show

    @include('common.footer')

</body>
</html>