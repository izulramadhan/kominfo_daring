<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="<?php echo base_url()?>assets/images/logo/putih.png">
    <title>Login Magang Daring || Dinas Komunikasi dan Informatika Provinsi Jawa Tengah</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/logreg/fonts/material-icon/css/material-design-iconic-font.min.css">

     <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/logreg/css/style.css">


    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url()?>assets/logreg/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url()?>page/register" class="signup-image-link">Belum memiliki akun?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login Akun</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <!--
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            -->
                            <a input type="submit" name="signin" id="signin" href="#" class="filled-button">Login</a>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url()?>assets/logreg/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/logreg/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>