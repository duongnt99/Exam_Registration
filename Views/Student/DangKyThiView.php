<?php
//load file layout vao day
$this->fileLayout = "Views/Student/Layout.php";
?>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><strong>ĐĂNG KÝ MÔN THI</strong></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Đăng ký môn thi</li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh sách môn</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table" id="dataTable1">
                            <thead>
                                <tr >
                                    <th class="serial">Chọn</th>
                                    <th class="avatar">Học phần</th>
                                    <th>Mã môn học</th>
                                    <th>Ngày thi</th>
                                    <th>Phòng thi</th>
                                    <th>Giờ bắt đầu</th>
                                    <th>Giờ kết thúc</th>
                                    <th>Số lượng sinh viên</th>
                                    <th>Đã đăng ký</th>
                                    <th>Ca thi</th>
                                </tr>
                            </thead>
                            <tbody id="ddReferences">
                                <?php foreach ($data as $item) : ?>
                                    <tr class="fixketqua" id="<?php echo $item['id']; ?>">
                                        <td style="text-align: center;" id="input"><input type="checkbox" value="<?php echo $item['id']; ?>"></td>
                                        <td data-target="hocphan"><?php echo $item['SubjectName'] ?></td>
                                        <td data-target="mahocphan"><?php echo $item['SubjectID'] ?></td>
                                        <td data-target="ngaythi"><?php echo $item['Date'] ?></td>
                                        <td data-target="phongthi"><?php echo $item['Room'] ?></td>
                                        <td data-target="giobatdau"><?php echo $item['Start'] ?></td>
                                        <td data-target="gioketthuc"><?php echo $item['End'] ?></td>
                                        <td style="text-align: center;" data-target="soluong"><b><?php echo $item['Amount'] ?></b></td>
                                        <td style="color: #e53935; text-align: center;" data-target="dadangky"><b><?php echo $item['DaDangKy'] ?></b></td>
                                        <td style="text-align: center;" data-target="cathi"><?php echo $item['IDClasses'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->

                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh sách môn đã đăng ký hoặc đã chọn</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table" id="dataTable2">
                            <thead>
                                <tr>
                                    <th class="serial">STT</th>
                                    <th class="avatar">Học phần</th>
                                    <th>Mã môn học</th>
                                    <th>Ngày thi</th>
                                    <th>Phòng thi</th>
                                    <th>Giờ bắt đầu</th>
                                    <th>Giờ kết thúc</th>
                                    <th>Ca thi</th>
                                    <th>Xóa/Hủy</th>
                                </tr>
                            </thead>
                            <tbody id="ketqua">
                                <?php $i=1; ?>
                                <?php foreach ($datakq as $item1) : ?>
                                    <tr id="<?php echo $item1['id']; ?>">
                                        <td><?php echo $i;?></td>
                                        <td data-target="hocphan"><?php echo $item1['SubjectName'] ?></td>
                                        <td data-target="mahocphan"><?php echo $item1['SubjectID'] ?></td>
                                        <td data-target="ngaythi"><?php echo $item1['Date'] ?></td>
                                        <td data-target="phongthi"><?php echo $item1['Room'] ?></td>
                                        <td data-target="giobatdau"><?php echo $item1['Start'] ?></td>
                                        <td data-target="gioketthuc"><?php echo $item1['End'] ?></td>
                                        <td style="text-align:center;" data-target="cathi"><?php echo $item1['IDClasses'] ?></td>
                                        <td style="text-align:center;"><a id="<?php echo $item1['id']; ?>" data-role='delete' data-id="<?php echo $item1['id_ca']; ?>" href="" class="btn btn-warning" style="color: red; padding: 1px 5px;">xóa</a></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
                <hr class="hr-normal">
                <div class="row">
                    <div class="col-md-4">Tổng số môn học đã đăng ký: <?php echo $i-1;?></div>
                    <div class="col-md-6"> </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success" id="save"><i class="fa fa-save"></i>&nbsp; Ghi Nhận</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- .animated -->
</div>
<script>
$('#save').click(function() {
    var id = $('#ddReferences').find('input[type="checkbox"]:checked').val();
    //alert($('#dataTable1').find('input[type="checkbox"]:checked').val());
    var hocphan = $('#' + id).children('td[data-target=hocphan]').text();
    var mahocphan = $('#' + id).children('td[data-target=mahocphan]').text();
    var ngaythi = $('#' + id).children('td[data-target=ngaythi]').text();
    var giobatdau = $('#' + id).children('td[data-target=giobatdau]').text();
    var gioketthuc = $('#' + id).children('td[data-target=gioketthuc]').text();
    var phongthi = $('#' + id).children('td[data-target=phongthi]').text();
    var soluong = $('#' + id).children('td[data-target=soluong]').text();
    var cathi = $('#' + id).children('td[data-target=cathi]').text();
    //alert(cathi);
    $.ajax({
        url: 'addmonthi',
        method: 'post',
        data: {
            hocphan: hocphan,
            mahocphan: mahocphan,
            ngaythi: ngaythi,
            giobatdau: giobatdau,
            gioketthuc: gioketthuc,
            phongthi: phongthi,
            cathi: cathi,
            id_ca: id,
        },
        success: function(response) {

        }
    });

    $.ajax({
        url: 'update-soluong',
        method: 'post',
        data: {
            id: id
        },
        success: function(data) {
            location.reload();

        }
    });
});
$(document).on('click', 'a[data-role=delete]', function() {
    var id = this.id;
    var id_ca = $(this).data('id');
    if (confirm('Bạn muốn xóa ca thi này!')) {
        $.ajax({
            url: 'xoa-cathi',
            method: 'post',
            data: {
                id: id,
                id_ca: id_ca,
            },
            success: function(data) {
                location.reload();
            }
        });
    }

});
</script>