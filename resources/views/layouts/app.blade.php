<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'AKAD - Creative Digital Agency')</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <meta name="author" content="Amine Akhouad">
    <meta name="description" content="AKAD is a creative and modern template for digital agencies">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="animsition">
    @yield('content')

    <!-- SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
