a
<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v4.2.2
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2023 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    --><!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title> Perpustakaan | DIGITAL</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('src/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('src/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('src/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('src/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('src/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('src/assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('src/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('src/assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('src/assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('src/assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('src/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('src/assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('src/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('src/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('src/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('src/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('src/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('src/css/examples.css') }}" rel="stylesheet">
    <link href="{{ asset('src/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('src/assets/brand/coreui.svg#full') }}"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('src/assets/brand/coreui.svg#signet') }}"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
            <li class="nav-title">Menu</li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
                    </svg> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('kategori') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg> Kategori</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('buku') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg> Data Buku</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('peminjaman') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg> Data Peminjaman</a></li>
            <li class="nav-divider"></li>
            <li class="nav-title">Settings</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-star') }}"></use>
                    </svg> Pages</a>
                <ul class="nav-group-items">

                    <a class="nav-item" <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
            </li>
        </ul>
        </li>

        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex fs-3 fw-bold">
                    <li class="nav-item"><a class="nav-link">FIRMAN | DEV</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-bell') }}">
                                </use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}">
                                </use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use
                                    xlink:href="{{ asset('src/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                </use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img rounded-circle"
                                    src="{{ asset('src/assets/img/avatars/3.jpg') }}" alt="user@email.com">
                            </div>
                        </a>

                    </li>
                </ul>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            @yield('content')
        </div>
        <footer class="footer">
            <div><a href="https://coreui.io">Firman|PerpustakaanDigital </a><a href="https://coreui.io">SMKN 1
                    Maja</a> ©
                2024 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">Firman|Devlover</a></div>
        </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('src/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('src/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('src/vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('src/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('src/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('src/js/main.js') }}"></script>
    <script></script>

</body>

</html>
