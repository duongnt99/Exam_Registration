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
                        <h1><strong>ADMIN</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Trang Chủ</a></li>
                            <li class="active">Tài khoản Admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <!-- Thêm ca thi -->
        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
            <i class="fa fa-plus-square"></i> Tạo Tài Khoản Admin Mới
        </button>
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel" style="text-align: center"><strong>Tạo Tài Khoản Admin Mới</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo $formAction; ?>">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Họ và Tên</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="name" name="name"
                                        placeholder="Họ và Tên" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>User Name</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="user" name="user"
                                        placeholder="User Name" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Password</strong></label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password" name="password"
                                        placeholder="Password" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- !Thêm ca thi -->
        </br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh sách tài khoản Admin </strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ và tên</th>
                                    <th>Username</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php foreach ($data as $item) : ?>
                                <tr id="<?php echo $item->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $item->name ?></td>
                                    <td><?php echo $item->user ?></td>
                                    <td><a href="index.php?area=Admin&controller=UserAdmin&action=deleteUserAdmin&id=<?php echo $item->id; ?>" style="color:red;">Xóa</a></td>
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

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>
<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
    $('.input-group.date').datepicker({
        format: "dd/mm/yyyy"
    });
    $('.timepicker').timepicker();

});
</script>