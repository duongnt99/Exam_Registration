<?php
// load file layout vao day
$this->fileLayout = "Views/Admin/Layout.php";
?>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><strong>TRANG CHỦ</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="#">Trang chủ</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <!-- <span class="currency float-left mr-1">$</span> -->
                                <span class="count"><?php echo $dataKi;?></span>
                            </h3>
                            <p class="text-light mt-1 m-0">Kì Thi</p>
                        </div><!-- /.card-left -->
                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-display2"></i>
                        </div><!-- /.card-right -->
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count"><?php echo $dataSV;?></span>
                            </h3>
                            <p class="text-light mt-1 m-0">Sinh viên</p>
                        </div><!-- /.card-left -->
                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-users"></i>
                        </div><!-- /.card-right -->
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count"><?php echo $dataAd;?></span>
                            </h3>
                            <p class="text-light mt-1 m-0">Admin</p>
                        </div><!-- /.card-left -->
                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-config"></i>
                        </div><!-- /.card-right -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count"><?php echo $datalistno;?></span><span>  /  </span> <span class="count"><?php echo $datalist;?></span>
                            </h3>
                            <p class="text-light mt-1 m-0">Cấm Thi / Được Thi</p>
                        </div><!-- /.card-left -->
                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-study"></i>
                        </div><!-- /.card-right -->
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-normal">
        <div>
            <h2>Team profile</h2>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">Nguyễn Chí Đạt</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> K62-CD</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="https://www.facebook.com/nguyenchidat1108"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://github.com/ChiDatNguyen"><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">Nguyễn Thái Dương</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> K62-CD</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="https://www.facebook.com/duongnt27"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://github.com/duongnt99"><i class="fab fa-github-square"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">Bùi Huỳnh Đức</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> K62-CD</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="https://www.facebook.com/bui.duc.2012"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://github.com/buihuynhduc"><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- .animated -->
</div>