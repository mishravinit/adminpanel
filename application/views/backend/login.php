<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8"/>
    <title>Madhumitra Admin | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" sizes="32x32" type="image/png">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/essential.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/plugins/animate_css/animate.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/page_login/css/demo.css"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->
     <style>
     .error{
      color:red;
     }
    </style>
</head>
<body class="pvr_authentication theme-orange" style="overflow: auto;">
<!-- begin #page-loader -->
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>
<!-- end #page-loader -->

<!-- begin #pvr-container -->
<main>
    <!-- begin #intro -->
    <div class="content content--intro">
        <div class="frame">
            <header class="pvr__header">
                <h1 class="pvr__header__title">Madhumitra Admin</h1>
            </header>
        </div>
        <div class="content__inner">
            <h1 class="content__title">Madhumitra Admin</h1>
            <h3 class="content__subtitle" style="color:#fff;">We are happy to be a part of your journey to better health</h3>
            <a href="javascript:void(0)" class="enter"></a>
        </div>
        <div class="shape-wrap">
            <svg class="shape" width="100%" height="100vh" preserveAspectRatio="none" viewBox="0 0 1440 800"
                 >
                <path d="M -65.11,-1.008 C -38.79,8.492 -48.8,43.89 -24.09,59.91 -17.38,64.25 -7.411,68.1 2.397,67.74 19.94,67.09 30.89,61.16 46.62,50.39 64.99,37.82 92.16,36.57 112.8,41.49 141.9,48.44 153.5,80.16 178.5,78.34 194.6,77.17 205.3,67.96 216.8,48.87 224.6,35.89 230.6,20.21 251.4,19.41 278.8,18.35 288.2,28.98 298.5,67.48 303.6,86.48 308.2,97.24 316.3,102.6 329.4,111.3 340.7,106 350.5,100.2 377.5,84.13 369.6,23.41 401.2,20.7 415.9,19.43 431.7,33.86 449.9,57.07 462.7,73.41 475.5,91.96 494.9,96.72 503.8,98.9 513,97.38 521.6,90.13 532.1,81.21 532.2,62.36 551.7,62.17 565.7,62.03 569.6,72.01 575.9,89 580.5,101.3 598.1,139.1 628.6,117.5 649.1,103 641.6,81.95 658,80.67 674.4,79.39 692.2,136.3 720.8,141.4 738.9,144.6 763.5,132 771.2,119.3 782.1,101.2 783.6,81.7 799.1,81.97 829.3,82.49 818.2,122.8 838.2,143.8 858.1,164.8 875.7,158.9 886.4,155.8 910.4,149 913.1,122.8 939.2,119.6 953.9,117.9 964.8,130.2 979.7,131.6 997.3,133.3 1016,132.6 1027,121 1038,109.3 1038,80.15 1054,79.92 1071,79.67 1073,89.94 1079,106.8 1084,119.5 1089,133.9 1101,141.1 1111,147.3 1124,146.3 1136,145 1150,143.4 1160,132.7 1177,130.8 1194,128.8 1219,128.2 1236,138.8 1257,151.6 1271,147.7 1280,137.3 1291,124.1 1294,92.34 1316,90.47 1344,88.04 1348,163.9 1380,183.1 1401,195.1 1428,196.6 1451,190.6 1478,183.7 1503,161.8 1518,143 1544,109.1 1550,43.89 1551,32.49 1568,-303.4 -510,-224.1 -65.11,-1.008 Z"
                      pathdata:id="M -35.73,45.41 C -9.412,61.01 -30.93,379.4 -17.31,545.8 -12.26,607.5 -54.94,740.4 6.142,730.1 63.67,720.4 26.97,284.9 27.01,202.3 27.06,104.3 51.66,29.07 106,54.36 160.3,79.65 103.7,491.7 187.7,465.7 231.9,452 156.6,99.89 249.4,94.08 285.7,91.81 299.9,127.5 305,190.9 316,327.7 328.6,462.6 321.1,598.3 315.8,695.4 294.5,776.7 353.9,773.6 415.6,770.4 379.8,650.7 368.7,588.8 337.4,415 369.6,190.1 391.1,111 412.5,31.92 457,96.83 463.3,127.2 480.9,212.1 493.9,307.8 489,396.1 487.4,425.7 482.1,460.1 517.1,455.2 548.5,450.7 476.2,166 550.9,168.9 594.8,170.6 591.6,626.8 586.3,663.5 578.4,717.8 609.1,742.4 633.9,700.6 651.9,670.2 578.3,209.7 650.8,194.1 723.2,178.5 700.8,277.9 687.6,401.1 680.2,470 766.1,486.3 756,414.3 750.3,373.5 703.1,145.6 793.4,146.1 939.9,146.8 846.2,556.8 844,601.8 841.9,646.8 878.6,682.8 903.3,630.6 928,578.4 863.2,264.8 891.7,178.8 920.2,92.81 997.3,215.6 972,292.8 946.6,370 1030,353.1 999,295.7 985.9,271.6 977.1,119.1 1048,117.8 1119,116.5 1127,634.6 1123,682.6 1119,730.6 1110,749.8 1118,771.3 1134,815.5 1173,803.5 1164,734 1155,664.5 1139,665.8 1143,418.4 1148,170.9 1225,122 1240,215 1249,273 1202,413 1282,391.7 1324,380.7 1280,165.5 1316,159.6 1362,152 1296,358.2 1379,361.2 1462,364.2 1312,753 1444,751.2 1592,749.2 1484,458.5 1505,312.2 1518,221.3 1544,58.44 1545,39.57 1562,-514.4 -480.6,-322.6 -35.73,45.41 Z"></path>
            </svg>
        </div>
    </div>
    <!-- end #intro -->

    <!-- begin #login -->
    <div class="content content--fixed">  <!-- style="background-image: url('http://via.placeholder.com/1920x1080');" -->
        <div class="content__inner">
            <div class="auth animated fadeInDownBig">
                <div class="pvr_card">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header">
                                    <div class="logo m-t-15">
                                        <img class="w-in-22" src="<?php echo base_url();?>assets/img/logo.png" alt="PVR">
                                    </div>
                                    <h1 class="text-white">Madhumitra</h1>
                                </div>
                            </div>
                            <form class="col-lg-12" id="sign_in" action="<?php echo base_url();?>index.php/login/checkLogin" method="POST">
                                <h5 class="title f-s-20 f-w-500">Sign in to your Account</h5>
                                <div class="form-group-pvr form-float">
                                    <div class="form-line-pvr">
                                        <input type="text" name="email_id" class="form-control" value="<?php echo set_value('email_id') ?>">
                                        <label class="form-label">Email</label>
                                    </div>
                                    <span><?php echo form_error('email_id'); ?></span>
                                </div>
                                <div class="form-group-pvr form-float m-b-10">
                                    <div class="form-line-pvr">
                                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
                                        <label class="form-label">Password</label>
                                    </div>
                                    <span><?php echo form_error('password'); ?></span>
                                </div>
                                <div class="form-check pull-left">
                                    <div class="form-check-label">
                                        <div class="checkbox checkbox-primary">
                                            <input id="form-check-input" class="styled form-check-input" name="is_remember" type="checkbox"
                                                   checked>
                                            <label for="form-check-input">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 m-t-8">
                                    <button type="submit" class="btn btn-success waves-effect">Sign In</button>
                                    
                                </div>
                            </form>

                            <div class="col-lg-12 m-t-8">
                            <?php //echo base_url();?><!-- index.php/login/forgotPassword -->
                                <a class="" href="">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end #login -->
</main>
<!-- end #pvr-container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-migrate-1.4.1.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php //echo base_url();?>assets/crossbrowserjs/html5shiv.js"></script>
<script src="<?php //echo base_url();?>assets/crossbrowserjs/respond.min.js"></script>
<script src="<?php //echo base_url();?>assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-cookie/js.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?php echo base_url();?>assets/plugins/page_login/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/page_login/js/charming.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/page_login/js/anime.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pvr_ess_login_v1.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
