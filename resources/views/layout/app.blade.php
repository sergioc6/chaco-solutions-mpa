<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Chaco Solutions - @yield('title')</title>

    @include('layout.styles')
</head>
<body class="hold-transition">
    @yield('content')

    @include('layout.scripts')
</body>
</html>
