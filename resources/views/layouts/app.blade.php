<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Stack for before-styles -->
    @stack('before-styles')

    <!-- Main Stylesheet -->
    <link href="{{ asset('output.css') }}" rel="stylesheet">

    <!-- Custom Fonts and External Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/noscript.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/neue-plak-webfont/neue-plak.css"/>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Stack for after-styles -->
    @stack('after-styles')
</head>
<body>
    @yield('content')

    <!-- Stack for scripts -->
    @stack('after-scripts')
</body>
</html>
