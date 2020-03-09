
 <?php
include_once "head.php";
?>
<body>
    <?php
include_once "meunsbar.php";
include_once "function/db.php";
$con= new Dbconn();
  $conn=$con->DbConnect();
//    $sqlStr = ;
$count=0;
$count1=0;
$count2=0;
   $sqlQry = $conn->query("SELECT * FROM tbl_drink WHERE status='1' ORDER BY approveDate DESC ");
   $sqlQry1 = $conn->query("SELECT * FROM tbl_food WHERE status='1' ORDER BY approveDate DESC ");
   $sqlQry2 = $conn->query("SELECT * FROM tbl_cafe WHERE status='1' ORDER BY approveDate DESC ");
?>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/41593.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

	<section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>(+855) 111 2222</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>phnom Penh</h3>
                                <p> ASEAN Route 11 </p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Open Monday-Friday</h3>
                                <p>8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book p-4">
                    <h3>Book a Table</h3>
                    <form action="../desboard/themesbrand.com/lexa/html/horizontal-teal/booking.php" class="appointment-form" method="POST">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="fname">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date" name="date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time" name="time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-white py-3 px-4" name="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
				<h3 class="mb-5 heading-pricing ftco-animate">drink</h3>
				<?php if ($sqlQry->num_rows > 0) {
                while ($rows = $sqlQry->fetch_array()) {
                $count ++;
                if ($count==7) {
                    break;
                }
            echo "
                <div class='pricing-entry d-flex ftco-animate'>
                    <div class='img' style='background-image: url(../desboard/themesbrand.com/lexa/html/horizontal-teal/upload/drink/{$rows['image']});'></div>
                        <div class='desc pl-3'>
                            <div class='d-flex text align-items-center'>
                                <h3><span>{$rows['name']}</span></h3>
                                <span class='price'>{$rows['price']} ៛</span>
                                <span class='price'><a href='drink.php?id={$rows['id']}'>Buy</a></span>
                            </div>
                            <div class='d-block'>
                                <p>{$rows['detail']}</p>
                            </div>
                        </div>
                    </div>";
         }
        }?>        	
        	</div>
        	<div class="col-md-6 mb-5 pb-3">
              
        		<h3 class="mb-5 heading-pricing ftco-animate">Food</h3>        		
				<?php
                if ($sqlQry1->num_rows > 0) {
                    while ($rows = $sqlQry1->fetch_array()) {
                        $count1 ++;
                        if ($count1==7) {
                            break;
                        }
                        echo "
								<div class='pricing-entry d-flex ftco-animate'>
        							<div class='img' style='background-image: url(../desboard/themesbrand.com/lexa/html/horizontal-teal/upload/food/{$rows['image']});'></div>
        							<div class='desc pl-3'>
	        						<div class='d-flex text align-items-center'>
	        						<h3><span>{$rows['name']}</span></h3>
                            <span class='price'>{$rows['price']} ៛</span>
                            <span class='price'><a href='food.php?id={$rows['id']}'>Buy</a></span>
	        			</div>
	        			<div class='d-block'>
	        				<p>{$rows['detail']}</p>
	        			</div>
        			</div>
        		</div>";
                    }
                }?>        	
        		
        	</div>

        	<div class="col-md-12">
        		<h3 class="mb-5 heading-pricing ftco-animate" style="text-align: center" >Cafe</h3>
        		<?php
                if ($sqlQry2->num_rows > 0) {
                    while ($rows = $sqlQry2->fetch_array()) {
                        $count2 ++;
                        if ($count2==7) {
                            break;
                        }
                        echo "
								<div class='pricing-entry d-flex ftco-animate'>
        							<div class='img' style='background-image: url(../desboard/themesbrand.com/lexa/html/horizontal-teal/upload/cafe/{$rows['image']});'></div>
        							<div class='desc pl-3'>
	        						<div class='d-flex text align-items-center'>
	        						<h3><span>{$rows['name']}</span></h3>
                                    <span class='price'>{$rows['price']} ៛</span>
                                    <span class='price'><a href='cafe.php?id={$rows['id']}'>Buy</a></span>
	        			</div>
	        			<div class='d-block'>
	        				<p>{$rows['detail']}</p>
	        			</div>
        			</div>
        		</div>";
                    }
                }?>        	
        	</div>
        </div>
    	</div>
    </section> 

       <!-- ========<footer> -->
	   <?php
include_once "footer.php";
?>
   <!-- </footer>============ -->    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <?php
        include_once "script.php";
?>
  </body>
