<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.main-head')
</head>
<body>
    @include('inc.main-header')
    @yield('content')
</body>
</html>
