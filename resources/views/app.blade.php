<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Coffee</title>
    <link rel="stylesheet" href="css/app.css">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>
<body>
    {{-- Navbar section --}}
    @include('layouts.navbar')
    {{-- Navbar section end --}}

    {{-- Content section --}}
    @yield('content')
    {{-- Content section end --}}

    {{-- Footer section --}}
    @include('layouts.footer')
    {{-- Footer section end --}}

    {{-- Scroll to top --}}
    @include('layouts.scroll')
    {{-- Scroll to top end --}}
    
    
</body>
<script src="js/app.js"></script>
</html>