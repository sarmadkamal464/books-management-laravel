<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('layouts.head')
</head>
<body>
@include('website.layouts.navbar')
<div class="flex">
    <div class="flex-1 p-10 text-2xl font-bold">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
@include('website.layouts.footer')
</body>
</html>
