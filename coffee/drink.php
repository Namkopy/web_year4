<?php
include_once "head.php";
?>
<body>
    <?php
include_once "meunsbar.php";
include_once "function/db.php";
$con= new Dbconn();
  $conn=$con->DbConnect();
  $id=$_GET['id'];
  $count=0;
   $sqlQry = $conn->query("SELECT * FROM tbl_drink WHERE id=$id  ");
   if ($sqlQry->num_rows > 0) {
	$rows = $sqlQry->fetch_array();
}
	  $name=$rows['name'];
	  $type=$rows['type'];
	  $detail=$rows['detail'];
	  $price=$rows['price'];
	  $image=$rows['image'];

	  $insert_perorder="INSERT INTO tbl_perorderdrink (name,detail,type,image,price) VALUES('".$name."','".$detail."','".$type."','".$image."','".$price."')";
	   $conn->query($insert_perorder);
?>
    <!-- END nav -->
<!-- 
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/aa.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Order Drink</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
            </div>

          </div>
        </div>
      </div>
    </section> -->
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate" style="margin-top: 10px">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
							<tbody >	
									<?php
									$sqlQry = $conn->query("SELECT * FROM tbl_perorderdrink where status=0 ");
									if ($sqlQry->num_rows > 0) {
										while ($rows = $sqlQry->fetch_array()) {
											?>
									<tr class='text-center'>
										<td class='product-remove'><a href='#'><span class='icon-close'></span></a></td>            
										<td class='image-prod'><div class='img' style="background-image:url(../desboard/themesbrand.com/lexa/html/horizontal-teal/upload/drink/<?php echo $rows['image']?>)"></div></td>
										<td class='product-name'>
											<h3><?php echo $rows['name']?></h3>
											<p><?php echo $rows['detail']?></p>
										</td>
										<td class='price'><?php echo $rows['price']?>៛</td>
										
										<td class='price'>1</td>                        
										<td class='total'><?php echo $rows['price']?>៛</td>
									</tr>	
										<?php
										}
									}?>				
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
        		<div class="col col-lg-9 col-md-6 mt-5 cart-wrap ftco-animate">
						<form action="test1.php" class="billing-form ftco-bg-dark p-3 p-md-5" method="POST">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" name="fname">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="" name="lname">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Country/Province</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select id="" class="form-control" name="location">
		                  	<option value="Phnom Penh" style="color: #151111">Phnom Penh</option>
		                    <option value="Kratié" style="color: #151111">Kratié</option>
		                    <option value="Kampong Cham" style="color: #151111">Kampong Cham</option>
		                    <option value="Kampong Chhnang" style="color: #151111">Kampong Chhnang</option>
		                    <option value="Takéo" style="color: #151111">Takéo</option>
		                    <option value="Kandal" style="color: #151111">Kandal</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
			            <div class="w-100"></div>		            
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="" name="phone">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="" name="email">
	                </div>
                </div>
               </div>
               <input type="submit" class="btn btn-primary py-3 px-4"  name="btn" >
           </div>
           </form>

    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3" id="txtHint1">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
                <span>Subtotal</span>
                <?php
                   $sqlQry = $conn->query("SELECT Sum(price) total FROM tbl_perorderdrink where status=0 ");
                   if ($sqlQry->num_rows > 0) {
                       while ($rows = $sqlQry->fetch_array()) {
                           ?>
                <span><?php echo $rows['total']?>៛
              </span>
                     <?php
                       }
                   }
                      ?>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>4000៛</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>00.00៛</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<?php
                   $sqlQry = $conn->query("SELECT Sum(price) total FROM tbl_perorderdrink where status=0 ");
                   if ($sqlQry->num_rows > 0) {
                       while ($rows = $sqlQry->fetch_array()) {
                           $total= $rows['total']+4000; ?>
                <span >
                  </label value=" <?php echo $total?>" name="total">
                  <?php echo $total?>៛</span>
                     <?php
                       }
                   }
                      ?>
    					</p>
    				</div>
    				<p class="text-center">      
             
            </p>
          </div>
    		</div>
		</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Related products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A small river named Duden flows by their place and supplies</p>
    						<p class="price"><span>$5.90</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>