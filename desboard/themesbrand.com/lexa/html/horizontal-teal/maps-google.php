<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/maps-google.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:51 GMT -->

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
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Markers</h4>
                            <p class="text-muted m-b-30">Example of google maps.</p>
                            <div id="gmaps-markers" class="gmaps"></div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Overlays</h4>
                            <p class="text-muted m-b-30">Example of google maps.</p>
                            <div id="gmaps-overlay" class="gmaps"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Street View Panoramas</h4>
                            <p class="text-muted m-b-30">Example of google maps.</p>
                            <div id="panorama" class="gmaps-panaroma"></div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Map Types</h4>
                            <p class="text-muted m-b-30">Example of google maps.</p>
                            <div id="gmaps-types" class="gmaps"></div>
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
                <div class="col-12">© 2018 - 2019 Lexa <span class="d-none d-sm-inline-block">- Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
    <!-- Gmaps file -->
    <script src="../plugins/gmaps/gmaps.min.js"></script><!-- demo codes -->
    <script src="assets/pages/gmaps.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/maps-google.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:52 GMT -->

</html>