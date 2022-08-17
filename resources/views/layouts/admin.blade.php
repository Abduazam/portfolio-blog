<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/backend/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/backend/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/backend/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Chiqish') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/admin/') }}" class="brand-link">
                <img src="/backend/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="pt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link {{ request()->is('admin/category*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>Kategoriyalar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolio.index') }}" class="nav-link {{ request()->is('admin/portfolio*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-image"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('post.index') }}" class="nav-link {{ request()->is('admin/post*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>Postlar</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid pt-3">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/backend/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/backend/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/backend/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/backend/plugins/moment/moment.min.js"></script>
    <script src="/backend/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/backend/dist/js/adminlte.js"></script>
    <!-- Select2 -->
    <script src="/backend/plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/backend/dist/js/pages/dashboard.js"></script>
    <script src="/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
</body>
</html>

