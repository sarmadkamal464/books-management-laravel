<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('website.layouts.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('website.layouts.footer')
</body>

</html>
