<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} @isset($title) | {{$title}} @endisset</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js',])
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('vpe.ico') }}" sizes="16x16" type="image/x-icon">
    <link rel="icon" href="{{ asset('vpe.ico') }}" sizes="32x32" type="image/x-icon">
    <link rel="icon" href="{{ asset('vpe.ico') }}" sizes="48x48" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('vpe.ico') }}" type="image/x-icon">
    <!--Style Sheets-->
    <link href="{{ asset('css/mainstyles.css') }}" rel="stylesheet">
</head>
<body>


    <footer class="footer">
        &copy; {{ date('Y') }} Vpe Healthcare, All Rights Reserved
    </footer>
    
</body>
</html>