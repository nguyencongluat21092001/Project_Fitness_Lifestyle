<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('/')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="frontend/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
{{-- <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet"> --}}

<!-- Custom styles for this template-->
    <link href="frontend/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url ('trang-chu') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Fitness_LifeStyle</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        {{-- <li class="nav-item active">
            <a class="nav-link">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span></span></a>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            <h5>Quản Lý</h5>
        </div>


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Thêm tiện ích:</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url ('dashboard') }}">Thêm huấn luyện viên</a>
                    <a class="collapse-item" href="{{ url ('addPricing') }}">Thêm gói tập luyện</a>
                    <a class="collapse-item" href="{{ url ('addBlog') }}">Thêm bài viết</a>
                    <a class="collapse-item" href="{{ url ('addcate') }}">Thêm Thể loại bài viết</a>
                    <a class="collapse-item" href="{{ url ('addVideo') }}">Thêm video</a>
                    <a class="collapse-item" href="{{ url ('addCode') }}">Thêm mã giảm giá</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-folder"></i>
                <span>Tùy chỉnh:</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url ('dashboard_manager') }}">All huấn luyện viên</a>
                    <a class="collapse-item" href="{{ url ('listPricing') }}">Gói tập</a>
                    <a class="collapse-item" href="{{ url ('listBlog') }}">Tất cả bài viết</a>
                    <a class="collapse-item"href="{{ url ('listVideo') }}">Tất cả video</a>
                    <a class="collapse-item"href="{{ url ('listCart') }}">khách sử dụng gói tập</a>
                    <a class="collapse-item"href="{{ url ('listCode') }}">Tuỳ chỉnh sale</a>
                    <a class="collapse-item"href="{{ url ('listContact') }}">Liên hệ khách hàng</a>

                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->


        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="frontend/admin/img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>Fitness_LifeStyle</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->

                </ul>

            </nav>

            @yield('body')


            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->

            <!-- Bootstrap core JavaScript-->
            <script src="frontend/admin/vendor/jquery/jquery.min.js"></script>
            <script src="frontend/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="frontend/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="frontend/admin/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="frontend/admin/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="frontend/admin/js/demo/chart-area-demo.js"></script>
            <script src="frontend/admin/js/demo/chart-pie-demo.js"></script>

            <script src="https://kit.fontawesome.com/1251f5f652.js" crossorigin="anonymous"></script>
</body>

</html>
