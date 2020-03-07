<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/email-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico"><!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
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
                    <!-- Left sidebar -->
                    <div class="email-leftbar card"><a href="email-compose.html"
                            class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>
                        <div class="mail-list m-t-20"><a href="#" class="active">Inbox <span
                                    class="ml-1">(18)</span></a> <a href="#">Starred</a> <a href="#">Important</a> <a
                                href="#">Draft</a> <a href="#">Sent Mail</a> <a href="#">Trash</a></div>
                        <h6 class="m-t-30">Labels</h6>
                        <div class="mail-list m-t-20"><a href="#"><span
                                    class="mdi mdi-arrow-right-drop-circle text-info float-right mt-1 m-l-10"></span>Theme
                                Support</a> <a href="#"><span
                                    class="mdi mdi-arrow-right-drop-circle text-warning float-right mt-1 m-l-10"></span>Freelance</a>
                            <a href="#"><span
                                    class="mdi mdi-arrow-right-drop-circle text-primary float-right mt-1 m-l-10"></span>Social</a>
                            <a href="#"><span
                                    class="mdi mdi-arrow-right-drop-circle text-danger float-right mt-1 m-l-10"></span>Friends</a>
                            <a href="#"><span
                                    class="mdi mdi-arrow-right-drop-circle text-success float-right mt-1 m-l-10"></span>Family</a>
                        </div>
                        <h6 class="m-t-30">Chat</h6>
                        <div class="m-t-20"><a href="#" class="media"><img class="d-flex mr-3 rounded-circle"
                                    src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">Scott Median</p>
                                    <p class="text-muted">Hello</p>
                                </div>
                            </a><a href="#" class="media"><img class="d-flex mr-3 rounded-circle"
                                    src="assets/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">Julian Rosa</p>
                                    <p class="text-muted">What about our next..</p>
                                </div>
                            </a><a href="#" class="media"><img class="d-flex mr-3 rounded-circle"
                                    src="assets/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">David Medina</p>
                                    <p class="text-muted">Yeah everything is fine</p>
                                </div>
                            </a><a href="#" class="media"><img class="d-flex mr-3 rounded-circle"
                                    src="assets/images/users/user-6.jpg" alt="Generic placeholder image" height="36">
                                <div class="media-body chat-user-box">
                                    <p class="user-title m-0">Jay Baker</p>
                                    <p class="text-muted">Wow that's great</p>
                                </div>
                            </a></div>
                    </div><!-- End Left sidebar -->
                    <!-- Right Sidebar -->
                    <div class="email-rightbar mb-3">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group"><input type="email" class="form-control" placeholder="To">
                                    </div>
                                    <div class="form-group"><input type="text" class="form-control"
                                            placeholder="Subject"></div>
                                    <div class="form-group">
                                        <div class="summernote">
                                            <h6>Hello Summer note</h6>
                                            <ul>
                                                <li>Select a text to reveal the toolbar.</li>
                                                <li>Edit rich document on-the-fly, so elastic!</li>
                                            </ul>
                                            <p>End of air-mode area</p>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar form-group mb-0">
                                        <div class=""><button type="button"
                                                class="btn btn-success waves-effect waves-light m-r-5"><i
                                                    class="far fa-save"></i></button> <button type="button"
                                                class="btn btn-success waves-effect waves-light m-r-5"><i
                                                    class="far fa-trash-alt"></i></button> <button
                                                class="btn btn-primary waves-effect waves-light"><span>Send</span> <i
                                                    class="fab fa-telegram-plane m-l-10"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- end Col-9 -->
                </div>
            </div><!-- End row -->
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
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>jQuery(document).ready(function () {

            $('.summernote').summernote({
                height: 250,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        });</script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/horizontal-teal/email-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 04:59:36 GMT -->

</html>