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
                        <h1><strong>KÌ THI</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Kì Thi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Thêm kì thi -->
        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
            <i class="fa fa-plus-square"></i> Tạo Kì Thi Mới
        </button>
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel" style="text-align: center"><strong>Tạo Kì Thi
                                Mới</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo $formAction ?>">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Tên Kì Thi</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="tenkithi" name="tenkithi"
                                        placeholder="Tên Kì Thi" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Năm Tổ Chức</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="namtochuc" name="namtochuc"
                                        placeholder="yyyy" class="form-control"><small
                                        class="form-text text-muted"></small>
                                </div>
                            </div>
                            <!-- <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Học Kì</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="hocki" name="hocki"
                                        placeholder="I hoặc II" class="form-control"><small
                                        class="form-text text-muted"></small></div>
                            </div> -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Học
                                            Kì</strong></label></div>
                                <div class="col-12 col-md-9">
                                    <select name="hocki" id="hocki" class="form-control">
                                        <option value="0">Chọn học kì</option>
                                        <option value="Học kì I">Học kì I</option>
                                        <option value="Học kì II">Học kì II</option>
                                        <option value="Học kì phụ">Học kì phụ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label"><strong>Ghi Chú</strong></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="ghichu" name="ghichu"
                                        placeholder="Ghi Chú" class="form-control"><small
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
        </div>
        <!-- !Thêm kì thi -->
        </br>
        
        <?php $i=1; ?>
        <?php foreach ($data as $item) : ?>
        <?php
            echo'<a href="index.php?area=Admin&controller=TaoCa&id='.$item->id.'">';
                echo'<div class="flip">';
                    echo'<div class="front" style="background-image: url(https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">';
                        echo'<h1 class="text-shadow">'.$item->HocKi.' - '.$item->Năm.'</h1>';
                    echo'</div>';
                    echo'<div class="back">';
                    echo'<h2>'.$item->TenKiThi.'</h2>';
                        echo'<p>'.$item->Note.'</p>';
                    echo'</div>';
                echo'</div>';
            echo'</a>';
            ?>
        <?php $i++; ?>
        <?php endforeach; ?>



    <!-- .animated -->
</div>
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