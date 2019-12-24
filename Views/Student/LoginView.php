<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login For Student</title>

    <!-- Font Icon -->
    <link rel="apple-touch-icon" href="images/logouet.png">
    <link rel="shortcut icon" href="images/logouet.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="login/css/style.css">
    
    <link rel="stylesheet" href="login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->

</head>
<body style="background-color:#B0C4DE;">


        <!-- Sign up form -->

        <!-- Sing in  Form -->
        <section class="sign-in" style="padding-top:70px;" >
            <div class="container" style="background-color: #f1f5f7;">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="login/images/signup-image.png" alt="sing up image"></figure>                  
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login For Student</h2>
                        <form class="user" method="post" action="dologin">
                            <div class="form-group">
                                <?php if (isset($error)) : ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                                <?php endif; ?>
                            </div> 
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" id="exampleInputEmail" placeholder="Student ID" name="mssv" value="<?php if(isset($_COOKIE["mssv"])) { echo $_COOKIE["mssv"]; } ?>" required style="background-color: #f1f5f7;" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="exampleInputPassword" placeholder="Password" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" style="background-color: #f1f5f7;" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="customCheck" class="agree-term" <?php if(isset($_COOKIE["rememberad"])) { echo 'checked'; } ?>/>
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button" style="align-content: center;">
                                <input type="submit" name="signin" id="signin" style="align-content: center;" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>