<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/session-timeout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
   include_once 'navbarheader.php';
   ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h5 class="mt-0 header-title">Bootstrap-session-timeout</h5>
                            <p class="text-muted m-b-30">Session timeout and keep-alive control with a nice Bootstrap warning dialog.</p>
                            <div class="text-muted">
                                <p>After a set amount of idle time, a Bootstrap warning dialog is shown to the user with the option to either log out, or stay connected. If "Logout" button is selected, the page is redirected to a logout URL. If "Stay Connected" is selected the dialog closes and the session is kept alive. If no option is selected after another set amount of idle time, the page is automatically redirected to a set timeout URL.</p>
                                <p>Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.</p>
                                <p>As long as the user is active, the (optional) keep-alive URL keeps getting pinged and the session stays alive. If you have no need to keep the server-side session alive via the keep-alive URL, you can also use this plugin as a simple lock mechanism that redirects to your lock-session or log-out URL after a set amount of idle time.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">© 2018 - 2019 Lexa <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Session timeout js -->
    <script src="../plugins/bootstrap-session-timeout/bootstrap-session-timeout.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        $.sessionTimeout({
            keepAliveUrl: 'pages-blank.html',
            logoutButton: 'Logout',
            logoutUrl: 'pages-login.html',
            redirUrl: 'pages-lock-screen.html',
            warnAfter: 3000,
            redirAfter: 30000,
            countdownMessage: 'Redirecting in {timer} seconds.'
        });
    </script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/session-timeout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:55 GMT -->

</html>