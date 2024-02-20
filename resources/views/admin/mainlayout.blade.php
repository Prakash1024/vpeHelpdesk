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
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('js/sidebar.js') }}"></script>

</head>
<body>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                  <a href="#" class="nav_logo">
                    <img src="{{ asset('vpe.ico') }}" alt="VPE" width="30" height="24">
                    <span class="nav_logo-name">Customer Care</span>
                  </a>
                  <div class="nav_list">
                    <a href="#" class="nav_link active">
                      <i class='bx bx-grid-alt nav_icon'></i>
                      <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                      <i class='bx bx-user nav_icon'></i>
                      <span class="nav_name">Users</span>
                    </a>
                    <a href="#" class="nav_link">
                      <i class='bx bx-message-square-detail nav_icon'></i>
                      <span class="nav_name">Messages</span>
                    </a>
                    <a href="#" class="nav_link">
                      <i class='bx bx-bookmark nav_icon'></i>
                      <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                      <i class='bx bx-folder nav_icon'></i>
                      <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                      <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                      <span class="nav_name">Stats</span>
                    </a>
                  </div>
                </div>
                <a href="#" class="nav_link">
                  <i class='bx bx-log-out nav_icon'></i>
                  <span class="nav_name">SignOut</span>
                </a>
              </nav>
        </div>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            <h4>Main Components</h4>
        </div>
        <!--Container Main end-->
    <section>
        <div class="main-header">
        </div>
        @yield('content')
        <footer class="footer">
            &copy; {{ date('Y') }} Vpe Healthcare, All Rights Reserved
        </footer>
    </section>
</body>
</html>

    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">