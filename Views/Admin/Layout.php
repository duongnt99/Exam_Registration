<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RegExam - BTL Web</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logouet.png">
    <link rel="shortcut icon" href="images/logouet.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/a9ea3721b5.js" crossorigin="anonymous"></script> -->
    <script src="assets/js/jquery-timepicker.js"></script>
    <script src="assets/js/auto-complete.js"></script>
    <!-- <script src="assets/js/jquery.autocomplete.min.js"></script>
    <script src="assets/js/currency-autocomplete.js"></script> -->

    <style>
    .autocomplete {
        position: relative;
        display: inline-block;
    }

    input {
        border: 1px solid transparent;
        background-color: white;
        font-size: 16px;
    }

    input[type=text] {
        background-color: white;
        width: 100%;
    }


    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
    </style>
</head>

<body id="backtotop">
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin"><i class="menu-icon fa fa-laptop"></i>Trang Chủ </a>
                    </li>
                    <li>
                        <a class="collapse-item <?php if ($_GET['controller'] == 'TaoKi') {echo 'active';} ?> "
                            href="tao-ki-thi"> <i class="menu-icon fa fa-table"></i>Kì Thi</a>
                    </li>
                    <li class="menu-title">Danh Sách</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Môn Thi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li id="mon1"><i class="fa fa-book"></i>
                                <a class="collapse-item <?php if ($_GET['controller'] == 'ShowSubject') {echo 'active';} ?> "
                                    href="danh-sach-hqt-duoc-thi">Hệ quản trị cơ sở dữ liệu</a></li>
                            <li><i class="fa fa-book"></i>
                                <a class="collapse-item <?php if ($_GET['controller'] == 'ShowSubject') {echo 'active';} ?> "
                                    href="danh-sach-web-duoc-thi">Phát triển ứng dụng Web</a></li>
                            <li><i class="fa fa-book"></i>
                                <a class="collapse-item <?php if ($_GET['controller'] == 'ShowSubject') {echo 'active';} ?> "
                                    href="danh-sach-AI-duoc-thi">Trí tuệ nhân tạo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="collapse-item <?php if ($_GET['controller'] == 'ListStudent') {echo 'active';} ?> "
                            href="dssv"> <i class="menu-icon fa fa-users"></i>Sinh Viên</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Nhập Liệu</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-square"></i>
                                <a class="collapse-item <?php if ($_GET['controller'] == 'AddUserStudent') {echo 'active';} ?> "
                                    href="them-danh-sach-sinh-vien">Tài Khoản Sinh Viên</a></li>
                            <li><i class="fa fa-plus-square"></i>
                                <a class="collapse-item <?php if ($_GET['controller'] == 'AddEligibleStudent') {echo 'active';} ?> "
                                    href="them-sv-du-dieu-kien-thi">SV được thi</a></li>
                            <li><i class="fa fa-plus-square"></i>
                                <a class="collapse-item <?php if ($_GET['controller'] == 'AddNotEligibleStudent') {echo 'active';} ?> "
                                    href="them-sv-cam-thi">SV cấm thi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="collapse-item <?php if ($_GET['controller'] == 'UserAdmin') {echo 'active';} ?> "
                            href="user-admin"> <i class="menu-icon fa fa-gears"></i>Tài Khoản Admin</a>
                    </li>
                    <li class="menu-title">In</li><!-- /.menu-title -->
                    <li>
                        <a class="collapse-item <?php if ($_GET['controller'] == 'PrintListExam') {echo 'active';} ?> "
                            href="in-danh-sach-thi"> <i class="menu-icon fa fa-print"></i>In Danh Sách Phòng Thi</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                                style="font-weight: bold; font-size: 18px;">Xin chào:
                                <?php if (isset($_SESSION["name"])) {echo $_SESSION["name"];} ?></span>
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php?area=Admin&controller=Logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->

        <!-- /.content -->
        <div class="clearfix">
            <?php
                //xuat noi dung cua view trong MVC ra day
            echo $this->view;
        ?>
        </div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-10">
                        Copyright &copy; 
                    </div>
                    <div class="col-sm-2 text-right">
                        <ul>
                            <li>Nguyễn Chí Đạt</li>
                            <li>Nguyễn Thái Dương</li>
                            <li>Bùi Huỳnh Đức</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
    <div>
        <a href="#backtotop"><i class="fas fa-angle-double-up" style="font-size: 35px;color: #555;margin-left: 90%;"></i></a>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("a[href*='#backtotop']:not([href='#backtotop])").click(function() {
            let target = $(this).attr("href");
            $('html,body').stop().animate({
                scrollTop: $(target).offset().top
            }, 500);
            event.preventDefault();
        });
    });
    </script>
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="assets\js\auto-complete.js"></script>
    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script language="javascript">
    function load1() {
        // URL 
        var url = "exam-cards.html";

        // Data lúc này cho bằng rỗng
        var data = {};

        // Success Function
        var success = function(result) {
            $('#result').html(result);
        };

        // Result Type
        var dataType = 'text';

        // Send Ajax
        $.get(url, data, success, dataType);
    }
    </script>
    <!--Local Stuff-->
    <script>
    jQuery(document).ready(function($) {

        "use strict";

    });
    </script>
</body>

</html>