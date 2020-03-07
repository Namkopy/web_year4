
 <!-- Navigation Bar-->
 <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">
                <!-- Logo container-->
                <div class="logo">
                    <a href="index.php" class="logo">
                        <H1>RUPP CAFé</H1>
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras topbar-custom">
                    <ul class="float-right list-unstyled mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit">
                                        <i class="fa fa-search">

                                        </i>
                                    </button>
                                </div>
                            </form>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i style="color: #fff"><?php
                            session_start();
                             echo $_SESSION['name'];                                        
                                ?></i>
                            </a>
                            <!-- /div> -->
                        </li>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <?php    
                                 echo "<img src='upload/staff/{$_SESSION['img']}' alt='user' class='rounded-circle'>";
                                ?>
                                </a>                                
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <!-- item-->
                                    
                                    <a class="dropdown-item text-danger" href="pages-login.php">
                                        <i class="mdi mdi-power text-danger">

                                        </i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link" id="mobileToggle">
                                <div class="lines">
                                    <span>

                                    </span>
                                    <span>

                                    </span>
                                    <span>

                                    </span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->
                <div class="clearfix"></div>
            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>                                               
                    </div>
                </div>
            </div>
        </div>
        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="index.php">
                                <i class="ti-dashboard"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="fas fa-box-open"></i>
                                <span>
                                    Customer
                                </span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="custbooking.php">
                                        Booking Table
                                    </a>
                                </li>
                                <li>
                                    <a href="custordercafe.php">
                                        Order Cafe
                                    </a>
                                 </li>
                                 <li>
                                    <a href="custorderdrink.php">
                                        Order Drink
                                    </a>
                                 </li>
                                 <li>
                                    <a href="custorderfood.php">
                                        Order Food
                                    </a>
                                 </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="fas fas fa-list">

                                </i> Category
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="cafe.php">
                                        Cafe
                                    </a>
                                </li>
                                <li>
                                    <a href="drink.php">
                                        Drink
                                    </a>
                                 </li>
                                <li>
                                    <a href="food.php">
                                        Food
                                    </a>
                                </li>
                            </ul>
                        </li>
                <?php
                    if($_SESSION['rule']=='admin'){
                ?>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="fas fa-user-cog">

                                </i> User
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="staff.php">
                                        Staff
                                    </a>
                                </li>
                                <li>
                                    <a href="accountstaff.php">
                                        Account
                                    </a>
                                 </li>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php
                    if($_SESSION['rule']=='admin'){
                    ?>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="fas fa-chart-bar">
                                       
                                </i>  Report
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="reportcafe.php">
                                        cafe
                                    </a>
                                </li>
                                <li>
                                    <a href="reportdrink.php">
                                        drink
                                    </a>
                                 </li>
                                 <li>
                                    <a href="reportfood.php">
                                        Food
                                    </a>
                                 </li>
                            </ul>
                        </li>
                    <?php } ?>
                        <!-- <li class="has-submenu">
                            <a href="#">
                                <i class="fas fa-box-open">

                                </i> Email
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="email-inbox.php">
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="email-read.php">Email Read</a>
                                </li>
                                <li>
                                    <a href="email-compose.php">
                                        Email Compose
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="has-submenu">
                            <a href="#">
                                <i class="ti-support">

                                </i> UI Elements
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="ui-alerts.php">
                                                Alerts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-buttons.php">
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-badge.php">
                                                Badge
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-cards.php">
                                                Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-carousel.php">
                                                Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-dropdowns.php">
                                                Dropdowns
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <ul>
                                        <li>
                                            <a href="ui-grid.php">
                                                Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-images.php">
                                                Images
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-lightbox.php">
                                                Lightbox
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-modals.php">
                                                Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-pagination.php">
                                                Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-popover-tooltips.php">
                                                Popover & Tooltips
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <ul>
                                        <li>
                                            <a href="ui-progressbars.php">
                                                Progress Bars
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-sweet-alert.php">
                                                Sweet-Alert
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-tabs-accordions.php">
                                                Tabs &amp; Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.php">
                                                Typography
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-video.php">
                                                Video
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-submenu">
                            <a href="#">
                                <i class="ti-receipt">

                                </i> Forms
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="form-elements.php">
                                        Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="form-validation.php">
                                        Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="form-advanced.php">
                                        Advanced
                                    </a>
                                </li>
                                <li>
                                    <a href="form-editors.php">
                                        Editors
                                    </a>
                                </li>
                                <li>
                                    <a href="form-uploads.php">
                                        File Upload
                                    </a>
                                </li>
                                <li>
                                    <a href="form-xeditable.php">
                                        Xeditable
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="ti-menu-alt">

                                </i> More
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="calendar.php">
                                        Calendar
                                    </a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Icons

                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="icons-material.php">
                                                Material Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons-ion.php">
                                                Ion Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons-fontawesome.php">
                                                Font Awesome
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons-themify.php">
                                                Themify Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons-dripicons.php">
                                                Dripicons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons-typicons.php">
                                                Typicons Icons
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Tables</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="tables-basic.php">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-datatable.php">Data Table</a>
                                        </li>
                                        <li>
                                            <a href="tables-responsive.php">Responsive Table</a>
                                        </li>
                                        <li>
                                            <a href="tables-editable.php">Editable Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Maps</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="maps-google.php">Google Map</a>
                                        </li>
                                        <li>
                                            <a href="maps-vector.php">Vector Map</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="rangeslider.php">Range Slider</a>
                                </li>
                                <li>
                                    <a href="session-timeout.php">Session Timeout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="ti-pie-chart"></i> Charts
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="charts-morris.php">Morris Chart</a>
                                </li>
                                <li>
                                    <a href="charts-chartist.php">Chartist Chart</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.php">Chartjs Chart</a>
                                </li>
                                <li>
                                    <a href="charts-flot.php">Flot Chart</a>
                                </li>
                                <li>
                                    <a href="charts-c3.php">C3 Chart</a>
                                </li>
                                <li>
                                    <a href="charts-other.php">Jquery Knob Chart</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="ti-files"></i> Pages
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="pages-timeline.php">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-invoice.php">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="pages-directory.php">Directory</a>
                                        </li>
                                        <li>
                                            <a href="pages-login.php">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.php">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="pages-recoverpw.php">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.php">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-blank.php">Blank Page</a>
                                        </li>
                                        <li>
                                            <a href="pages-404.php">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.php">Error 500</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end navigation -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->