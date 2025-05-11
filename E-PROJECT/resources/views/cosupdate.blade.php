<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../skydash-style/vendors/feather/feather.css" />
    <link rel="stylesheet" href="../skydash-style/vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="../skydash-style/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../skydash-style/vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="../skydash-style/vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="../skydash-style/js/select.dataTables.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../skydash-style/css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../skydash-style/css/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo ml-2" style="font-weight: bolder;" href="/dashboard">Mini_Dashboard</a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="skydash-style/css/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search" />
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">
                                Notifications
                            </p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">
                                        Application Error
                                    </h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">
                                        New user registration
                                    </h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="skydash-style/css/images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title mt-1">USER PAGE</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/userlogin">
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false"
                            aria-controls="tables">
                            <i class="icon-grid-2 menu-icon"></i>
                            <span class="menu-title">CONTACT PAGE</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/contactlogin">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#mini" aria-expanded="false"
                            aria-controls="tables">
                            <i class="icon-grid-2 menu-icon"></i>
                            <span class="menu-title">MINIPRODUCT</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="mini">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/dash_mini">
                                        PRODUCT_DETAILS
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/minishop_FETCH">
                                        PRODUCT_VIEW
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">COSMATICPRODUCT</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/dash_cosmatic">
                                        PRODUCT_DETAILS
                                    </a></li>
                                <li class="nav-item"><a class="nav-link" href="/cosmatic_FETCH">
                                        PRODUCT_VIEW
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#jeweller-proo" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">JEWELLERYPRODUCT</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="jeweller-proo">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/dash_jewellery">
                                        PRODUCT_DETAILS
                                    </a></li>
                                <li class="nav-item"><a class="nav-link" href="/jewellery_FETCH">
                                        PRODUCT_VIEW
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#sale-proo" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">SALEPRODUCT</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sale-proo">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="/dash_sale">
                                        TOP_PRODUCT_DETAILS
                                    </a></li>
                                <li class="nav-item"><a class="nav-link" href="/sale_FETCH">
                                        TOP_PRODUCT_VIEW
                                    </a></li>
                                <li class="nav-item"><a class="nav-link" href="/dash_client">
                                        TOP_CLIENT_DETAILS
                                    </a></li>
                                <li class="nav-item"><a class="nav-link" href="/client_FETCH">
                                        TOP_CLIENT_VIEW
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-panel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="container">
                            <div style="width: 70%;">
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ URL::TO('/cosupdate/' . $cosdata->id) }}">
                                    @csrf
                                    <input type="file" class="mt-5 ml-5 form-control w-100" name="proimg">
                                    <input type="text" placeholder="PRODUCT_NAME"
                                        class="mt-4 ml-5 form-control w-100" name="proName">
                                    <input type="text" placeholder="PRODUCT_PRICE"
                                        class="mt-4 ml-5 form-control w-100" name="proPrice">
                                    <button class="ml-5 mt-5 btn btn-primary">ADD_COS_PRODUCT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <img src="../{{ $cosdata->product_image }}" alt="img-2" class="img-fluid"
                                        style="margin-top: 10px; width: 60%;">
                                    <h4 class="mt-3" style="font-weight: bolder;">{{ $cosdata->product_name }}</h4>
                                    <p>{{ $cosdata->product_price }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium
                            <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a>
                            from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with
                            <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by
                            <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
    </div>
    <script src="../skydash-style/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../skydash-style/vendors/chart.js/Chart.min.js"></script>
    <script src="../skydash-style/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../skydash-style/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../skydash-style/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../skydash-style/js/off-canvas.js"></script>
    <script src="../skydash-style/js/hoverable-collapse.js"></script>
    <script src="../skydash-style/js/template.js"></script>
    <script src="../skydash-style/js/settings.js"></script>
    <script src="../skydash-style/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../skydash-style/js/dashboard.js"></script>
    <script src="../skydash-style/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
