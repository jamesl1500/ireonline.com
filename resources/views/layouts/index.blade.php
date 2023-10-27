<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="website-main">
    <div class="header-hold">
        @include('includes.header')
    </div>
    <div class="website-content">
        @yield('content')
    </div>
    <div class="footer-hold">
        @include('includes.footer')
    </div>
    
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>