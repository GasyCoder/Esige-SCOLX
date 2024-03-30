<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="author" content="BEZARA Florent">
    <!-- Google Font hébergées-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">

    @livewireStyles
    @stack('styles')
</head>

<body>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Back to top -->
    <div class="back-top">
        <i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Vendors -->
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <!-- Template Functions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    
    @livewireScripts
    @stack('scripts')
</body>
</html>