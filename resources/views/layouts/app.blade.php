<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ $pageTitle }}</title> --}}
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.nav2')
    @yield('content')
    @vite('resources/js/app.js')
    @include('layouts.footer')
</body>

</html>
