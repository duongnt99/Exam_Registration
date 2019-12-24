<?php
//load file layout vao day
$this->fileLayout = "Views/Student/Layout.php";
?>
<div class="container-fluid">
    <div class="animated fadeIn">
        <!-- Page Heading -->

        <div class="content">
            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Số học phần
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Được thi
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data1; ?></div>
                                </div>
                                <div class="col-auto">

                                    <i class="fab fa-accusoft fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Số học phần
                                        cấm
                                        thi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data2; ?></div>
                                </div>
                                <div class="col-auto">

                                    <i class="fas fa-stop-circle fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tỉ lệ được thi
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                <?php echo ($data1 / $data) * 100; ?> %</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: <?php echo ($data1 / $data) * 100; ?>%"
                                                    aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="<?php echo ($data1 / $data) * 100; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách môn thi</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <ul>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mã môn học</th>
                                            <th>Học phần</th>
                                        </tr>
                                    </thead>

                                    <?php foreach ($datalist as $item) : ?>
                                    <tr>
                                        <td><?php echo $item->SubjectID; ?></td>
                                        <td><?php echo $item->SubjectName; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Area Chart -->
                <div class="col-xl-6 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #ef5350">Không đủ điều kiện thi</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <ul>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mã môn học</th>
                                            <th>Học phần</th>
                                        </tr>
                                    </thead>

                                    <?php foreach ($datalistno as $item) : ?>
                                    <tr>
                                        <td><?php echo $item->SubjectID; ?></td>
                                        <td><?php echo $item->SubjectName; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Hướng dẫn đăng ký thi</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            Mỗi lần bạn chỉ đăng ký một môn thi rồi ấn nút xác nhận.<br>
                            Bạn đã đăng ký thi muốn đổi môn thì thực hiện xóa môn ở bảng kết quả thi.
                        </div>
                    </div>
                </div>

                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Thông báo</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            Thông báo lịch thi
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>