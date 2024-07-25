<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite('resources/css/app.css')
    {{-- <link href="{{ resources('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    @include('layouts.header')
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
