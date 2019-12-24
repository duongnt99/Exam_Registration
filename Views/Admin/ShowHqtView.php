<?php
//load file layout vao day
$this->fileLayout = "Views/Admin/Layout.php";
?>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><strong>HỆ QUẢN TRỊ CƠ SỞ DỮ LIỆU</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Môn Thi</a></li>
                            <li><a href="#">Hệ quản trị cơ sở dữ liệu</a></li>
                            <li class="active">Được thi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="danh-sach-hqt-duoc-thi"><button type="button" class="btn btn-success btn-lg">Được Thi</button></a>
                        <a href="danh-sach-hqt-cam-thi"><button type="button" class="btn btn-danger btn-lg">Cấm Thi</button></a>
                        <!-- <div class="row form-group" style="margin-left: 0px;margin-right: 0px;margin-bottom: 5px;margin-top: 5px;">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Thêm danh sách sinh viên</label></div>
                                    <div class="col-12 col-md-8"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                    <button type="submit" class="btn btn-primary btn-sm ">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div> -->
                    </div>


                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã SV</th>
                                    <th>Họ và tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Lớp khóa học</th>
                                    <th>Mã học phần</th>
                                    <th>Học phần</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php foreach ($dataHqt1 as $item) : ?>
                                <tr id="<?php echo $item->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $item->StudentID ?></td>
                                    <td><?php echo $item->StudentName ?></td>
                                    <td><?php echo $item->DateOfBirth ?></td>
                                    <td><?php echo $item->Class ?></td>
                                    <td><?php echo $item->SubjectID ?></td>
                                    <td><?php echo $item->SubjectName ?></td>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->







<!-- Right Panel -->

<!-- Scripts -->


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
});
</script>