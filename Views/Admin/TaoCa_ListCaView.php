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
                        <h1><strong>CA THI</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Trang Chủ</a></li>
                            <li><a href="#">Kì Thi</a></li>
                            <li class="active">Ca Thi</li>
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
            <i class="fa fa-plus-square"></i> Tạo Ca Thi Mới
        </button>
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel" style="text-align: center"><strong>Tạo Ca Thi
                                Mới</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo $formActionCathi ?>">
                            <div class="row form-group" class="autocomplete">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Mã
                                            Học Phần</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="mahocphan" name="mahocphan"
                                        placeholder="Mã Học Phần" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Học Phần</strong></label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="hocphan" name="hocphan" placeholder="Học Phần" class="form-control"><small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Ngày Thi</strong></label></div>
                                <div class='col-12 col-md-9'>
                                    <div class="form-group">
                                        <div id="filterDate2">

                                            <!-- Datepicker as text field -->
                                            <div class="input-group date" data-date-format="dd/mm/yyyy">
                                                <input type="date" id="date" name="date" class="form-control" placeholder="dd/mm/yyyy">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group" class="autocomplete">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Phòng Thi</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="phongmay" name="phongmay"
                                        placeholder="Phòng Thi" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Số
                                            lượng SV</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="soluong" name="soluong"
                                        placeholder="Số lượng SV" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Ca
                                            Thi</strong></label></div>
                                <div class="col-12 col-md-9">
                                    <select name="cathi" id="cathi" class="form-control">
                                        <option value="0">Chọn ca thi</option>
                                        <option value="1">Ca Thi 1</option>
                                        <option value="2">Ca Thi 2</option>
                                        <option value="3">Ca Thi 3</option>
                                        <option value="4">Ca Thi 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">

                                <div class="col col-md-2"><label for="text-input"
                                        class=" form-control-label"><strong>Giờ Bắt Đầu</strong></label></div>
                                <div class='col-12 col-md-4'>
                                    <input type="text" id="hstart" name="hstart"
                                        placeholder="" class="form-control" readonly><small
                                        class="form-text text-muted"></small>
                                </div>


                                <div class="col col-md-2"><label for="text-input"
                                        class=" form-control-label"><strong>Giờ Kết Thúc</strong></label></div>
                                <div class='col-12 col-md-4'>
                                    <input type="text" id="hstop" name="hstop"
                                        placeholder="" class="form-control" readonly><small
                                        class="form-text text-muted"></small>
                                </div>

                            </div>
                            <!-- <input id="timepicker" width="276" /> -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
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
                    <strong class="card-title">Danh sách ca thi </strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã học phần</th>
                                <th>Tên học phần</th>
                                <th>Ngày thi</th>
                                <th>Phòng thi</th>
                                <th>Giờ bắt đầu</th>
                                <th>Giờ kết thúc</th>
                                <th>Số lượng sinh viên</th>
                                <th>Mã ca thi</th>
                                <th>Đã đăng ký</th>
                                <th>Mã kì thi</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $j=1; ?>
                            <?php foreach ($dataCathi as $item) : ?>
                            <tr id="<?php echo $item->id; ?>">
                                <td><?php echo $j;?></td>
                                <td><?php echo $item->SubjectID ?></td>
                                <td><?php echo $item->SubjectName ?></td>
                                <td><?php echo $item->Date ?></td>
                                <td><?php echo $item->Room ?></td>
                                <td><?php echo $item->Start ?></td>
                                <td><?php echo $item->End ?></td>
                                <td><?php echo $item->Amount ?></td>
                                <td><?php echo $item->IDClasses ?></td>
                                <td><?php echo $item->DaDangKy ?></td>
                                <td><?php echo $item->IDKiThi ?></td>
                                <td><a href="index.php?area=Admin&controller=TaoCa&action=delete&id=<?php echo $item->id; ?>" style="color:red;">Xóa</a></td>
                            </tr>
                            <?php $j++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
<script>
    $('[name=mahocphan').blur(function(){
        var mahocphan = $('[name=mahocphan').val();
        console.log(mahocphan);
        if(mahocphan=='INT3306 3'){
            $('[name=hocphan]').val('Phát triển ứng dụng Web');
        }
        else if(mahocphan=='INT3202 8'){
            $('[name=hocphan]').val('Hệ quản trị cơ sở dữ liệu');
        }
        else if(mahocphan=='INT3401 3'){
            $('[name=hocphan]').val('Trí tuệ nhân tạo');
        }
        else if(mahocphan=='MAT1101 3'){
            $('[name=hocphan]').val('Đại số');
        }
        else if(mahocphan=='INT3115 1'){
            $('[name=hocphan]').val('Thiết kế giao diện người dùng');
        }
        else if(mahocphan=='INT3115 3'){
            $('[name=hocphan]').val('Thiết kế giao diện người dùng');
        }
        else if(mahocphan=='INT3303 2'){
            $('[name=hocphan]').val('Mạng không dây');
        }
    });
</script>
<script>
    $('[name=cathi').change(function(){
        var cathi = $('[name=cathi').val();
        if(cathi==1){
            $('[name=hstart]').val('7:00');
            $('[name=hstop]').val('9:00');
        }
        if(cathi==2){
            $('[name=hstart]').val('9:00');
            $('[name=hstop]').val('11:00');
        }
        if(cathi==3){
            $('[name=hstart]').val('13:00');
            $('[name=hstop]').val('15:00');
        }
        if(cathi==4){
            $('[name=hstart]').val('15:00');
            $('[name=hstop]').val('17:00');
        }
    });
</script>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script><script  src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
            $('.input-group.date').datepicker({format: "dd/mm/yyyy"});
            // $('.input-group.time').timepicker({format: "dd/mm/yyyy"});
            
        $('.timepicker').timepicker();
    
        } );
    </script>