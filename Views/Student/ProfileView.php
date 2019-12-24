<?php
//load file layout vao day
$this->fileLayout = "Views/Student/Layout.php";
?>
<div class="content">
    <div class="animated fadeIn " style="padding-top:0px;">

    <section class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-md-10 col-lg-8">
                    <div class="intro">
                        <div class="profile-img"><a href="04-elements.html"><img src="profile/images/profile-1-250x250.jpg" alt=""></a></div>
                        <h4><b><a href="ho-so-sinh-vien">Thông tin cá nhân</a></b></h4>

                        <ul class="information margin-tb-30 nav justify-content-center" style="margin-top: 30px;">
                                
                            <form class="form" role="form" style="width: 500px;" >
								<div class="form-group row col">
                                    <label class="col-lg-6 text-right form-control-label">Họ và tên</label>
									<div class="col-lg-6 text-left">
                                        <?php if (isset($_SESSION["name_sv"])) {echo $_SESSION["name_sv"];} ?>
									</div>
								</div>
										
								<div class="form-group row">
                                    <label class="col-lg-6 text-right form-control-label">Mã sinh viên</label>
									<div class="col-lg-6 text-left">
                                        <?php if (isset($_SESSION["mssv"])) {echo $_SESSION["mssv"];} ?>
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-lg-6 text-right form-control-label">Ngày sinh</label>
									<div class="col-lg-6 text-left">
                                        <?php if (isset($_SESSION["ngaysinh"])) {echo $_SESSION["ngaysinh"];} ?>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-lg-6 text-right form-control-label">Giới tính</label>
									<div class="col-lg-6 text-left">
                                        <?php if (isset($_SESSION["gioitinh"])) {echo $_SESSION["gioitinh"];} ?>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-lg-6 text-right form-control-label">Quê quán</label>
									<div class="col-lg-6 text-left">
                                        <?php if (isset($_SESSION["quequan"])) {echo $_SESSION["quequan"];} ?>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-lg-6 text-right form-control-label">Lớp khóa học</label>
									<div class="col-lg-6 text-left">
                                        <?php if (isset($_SESSION["lopkhoahoc"])) {echo $_SESSION["lopkhoahoc"];} ?>
									</div>
								</div>
							</form>

                        </ul>

                    </div><!-- intro -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- intro-section -->

    <section class="btn-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading ">
                        <div class="btn btn-bg-yellow" style="width:65px;height:1px;"></div>
                        <h4><b><a href="ho-so-sinh-vien">Hồ sơ</a></b></h4>

                    </div>
                </div><!-- col-sm-4 -->
            </div><!-- row -->

            <div class="nav justify-content-center">
                <a class="btn btn-bg-yellow" href="doi-mat-khau"
                    style=" margin: 0 10px 10px; padding: 12px 30px; border-radius: 5px;">Thay đổi mật khẩu</a>
            </div>
        </div><!-- container -->
    </section><!-- btn-section -->

    </div>
</div>