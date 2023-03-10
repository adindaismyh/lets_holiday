<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Let's Holiday Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/admin/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{ asset('assets/admin/img/sidebar-2.jpg')}}">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                        Dashboard Admin
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item @yield('wisata')">
                        <a class="nav-link" href="{{ url('admin/wisata') }}">
                            <i class="nc-icon nc-icon nc-sun-fog-29"></i>
                            <p>Wisata</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('kategori')">
                        <a class="nav-link" href="{{ url('admin/kategori') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Kategori Wisata </p>
                        </a>
                    </li>
                    <li class="nav-item @yield('hotel')">
                        <a class="nav-link" href="{{ url('admin/hotel') }}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Penginapan</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item @yield('review')">
                        <a class="nav-link" href="{{ url('admin/review') }}">
                            <i class="nc-icon nc-send"></i>
                            <p>Review</p>
                        </a>
                    </li> -->
                    <li class="nav-item @yield('berita')">
                        <a class="nav-link" href="{{ url('admin/berita') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>News</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('admin') }}">Home</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="no-icon">{{ Auth::user()->name }}</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @if (Route::has('login'))
                                    @auth
                                    <a class="nav-link" href="{{ url('admin/akun') }}">
                                        <span class="no-icon">Account</span>
                                    </a>
                                    <a class="nav-link" href="{{ url('admin/change_password/'.Auth::user()->id) }}">
                                        <span class="no-icon">Change Password</span>
                                    </a>
                                    <a class="nav-link" href="{{ route('logout') }}">
                                        <span class="no-icon">Log Out</span></a>
                                    @else
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <span class="no-icon">Log In</span>
                                    </a>
                                    @endauth
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">

                    @section('konten')
                    @show

                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ??
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/admin/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/admin/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('assets/admin/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/admin/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('assets/admin/js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/admin/js/demo.js') }}"></script>
@include('sweetalert::alert')

</html>
