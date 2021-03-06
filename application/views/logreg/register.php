<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="<?php echo base_url()?>assets/images/logo/putih.png">
    <title>Register Magang Daring || Dinas Komunikasi dan Informatika Provinsi Jawa Tengah</title>

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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register Akun</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="fa fa-file-text"></i></label>
                                <input type="text" name="name" id="name" placeholder="No. Induk Mahasiswa"/>
                            </div>
                             <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama Lengkap"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                                </div>
                             <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Uername"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <!--
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar"/>
                            -->
                             <a input type="submit" name="signup" id="signup" href="#" class="filled-button">Daftar</a>

                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url()?>assets/logreg/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url()?>page/login" class="signup-image-link">Sudah memiliki akun?</a>
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