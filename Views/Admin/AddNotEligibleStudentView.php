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
                        <h1><strong>SINH VIÊN BỊ CẤM THI</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Nhập liệu</a></li>
                            <li class="active">Thêm tài khoản sinh viên bị cấm thi</li>
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

        <div class="card">
            <div class="card-header" style="text-align: center">
                <strong class="card-title">Nhập danh sách sinh viên bị cấm thi</strong>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="index.php?area=Admin&controller=AddNotEligibleStudent&action=add">
                    <div class="custom-file">
                        <input name="file" type="file" class="custom-file-input" id="validatedCustomFile" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                        <label class="custom-file-label" for="validatedCustomFile">Chọn file excel</label>
                        <div class="invalid-feedback">Tệp không hợp lệ</div>
                    </div>
                    <input onclick="modal();" style="margin-top:10px;" type="submit" name="btnGui" value="Nhập danh sách" class="btn btn-primary">
                    <div class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                            <div class="lds-hourglass"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<script>
$('#validatedCustomFile').on('change', function() {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
})
</script>
<script>
function modal() {

    if ($('#validatedCustomFile')[0].files[0]) {
        $('.modal').modal('show');
        setTimeout(function() {
            console.log('hejsan');
            $('.modal').modal('hide');
        }, 20000);
    }

}
</script>