<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>Homepage | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-light">
<div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
        <div class="nav-scroller">
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link has-arrow  active " href="/">
                        <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Layouts & Pages</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="/" data-bs-toggle="collapse"
                       data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                        <i data-feather="layers" class="nav-icon icon-xs me-2">
                        </i> Pages
                    </a>
                    <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="/">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow   " href="/">
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/">
                                    Billing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/">
                                    Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/">
                                    404 Error
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="/" data-bs-toggle="collapse"
                       data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                        <i data-feather="lock" class="nav-icon icon-xs me-2">
                        </i> Authentication
                    </a>
                    <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="/"> Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="/"> Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/">
                                    Forget Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Layouts
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">UI Components</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="/">
                        <i data-feather="package" class="nav-icon icon-xs me-2">
                        </i> Components
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#" data-bs-toggle="collapse"
                       data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                        <i data-feather="corner-left-down" class="nav-icon icon-xs me-2">
                        </i> Menu Level
                    </a>
                    <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link has-arrow " href="#" data-bs-toggle="collapse"
                                   data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                   aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="#"> NavItem 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#"> NavItem 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow  collapsed  " href="#" data-bs-toggle="collapse"
                                   data-bs-target="#navMenuLevelThree" aria-expanded="false"
                                   aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                               data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                               aria-controls="navMenuLevelThreeOne">
                                                NavItem 1
                                            </a>
                                            <div id="navMenuLevelThreeOne" class="collapse collapse "
                                                 data-bs-parent="#navMenuLevelThree">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#">
                                                            NavChild Item 1
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#"> Nav Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Documentation</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="/">
                        <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                        </i> Docs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="/">
                        <i data-feather="git-pull-request" class="nav-icon icon-xs me-2">
                        </i> Changelog
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Page content -->
    <div id="page-content">
        <div class="header @@classList">
            <!-- navbar -->
            <nav class="navbar-classic navbar navbar-expand-lg">
                <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                <div class="ms-lg-3 d-none d-md-none d-lg-block">
                    <!-- Form -->
                    <form class="d-flex align-items-center">
                        <input type="search" class="form-control" placeholder="Search" />
                    </form>
                </div>
            </nav>
        </div>
        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0  text-white">Категории</h3>
                            </div>
                            <div>
                                <a href="#" class="btn btn-white">Добавить</a>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                            <h4 class="mb-0">Active Projects</h4>
                        </div>
                        <!-- card footer  -->
                        <div class="card-footer bg-white text-center">
                            <a href="#" class="link-primary">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
