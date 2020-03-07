
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">RUPP<small>Cafe</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active1"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>      
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    
                    <li class="nav-item"><a href="../desboard\themesbrand.com\lexa\html\horizontal-teal\pages-login.php" class="nav-link">admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('.navbar-nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.navbar-nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')
		})
	})
	</script>