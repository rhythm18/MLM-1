<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dhanyog.in-Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Accrue a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
	<link href="css/site-style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body>
	<!--/banner-->
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<h1 class="logo">
					<a class="navbar-brand" href="index.php">
						Dhanyog
					</a>
				</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="product.php">Products</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="business-plan.php">Business Plan</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="index.php#signupform">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="user_login.php">Login</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
						<!--
						<li class="search">
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
								<i class="fas fa-search"></i>
							</a>
							<div id="small-dialog" class="mfp-hide">
								<div class="search-top">
									<div class="search-inn">
										<form action="#" method="post" class="disply-flex">
											<input class="form-control" type="search" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											<button class="btn2">
												<i class="fas fa-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
				<!-- <form class="form-inline my-2 my-lg-0">
							  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							</form> -->
			</nav>
		</header>

	<!-- //header -->
	<!-- banner-text -->
	<div class="slider-content">
		<div class="wrapper-slider text-left">
			<!-- Slideshow 1 -->
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<div class="banner-info">
							<h3>Find the Best Daily Income Plan</h3>
							<p>Platform providing you best possibility of earning</p>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
		<div id="signupform" class="ban-form text-left" style="margin-bottom: 10px;">
			<h5>Sign-Up</h5>
			<form action="reg.php" class="mt-4" method="post">
				<?php

				if (isset($_GET['refid']))
					$spid=$_GET['refid'];
				else
					$spid="";
				?>
				<input class="form-control" type="text" id="sponsor_id" name="sponsor_id" placeholder="Sponsor ID" value="<?php echo $spid;?>" required="" />
				<span id="sname" name="sname"></span>

				<input class="form-control" type="text" id="name" name="name" placeholder="Name" required="" />

				<input class="form-control" type="email" id="email" name="email" placeholder="Email" required="" />
				<span id="cemail" name="cemail"></span>

				<input class="form-control" type="text" id="mobile" name="mobile" placeholder="Phone Number" required="" />
				<span id="cmobile" name="cmobile"></span>

				<input class="form-control" type="password" id="password" name="password" placeholder="Password" required="" />
				<input class="form-control" type="password" id="cpass" name="cpass" placeholder="Confirm Password" required="" />

				<input class="form-control text-uppercase" name="submit" type="submit" value="Register Now !">
			</form>
		</div>

		
		<div class="clearfix"></div>
	</div>
</div>
	<!-- //banner -->
	<!--/bottom-banner-w3layouts-->
	<section class="bottom-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 about-img">
				</div>
				<div class="col-lg-6 about-info text-left">
					<div class="ab-info-text">
						<h3 class="tittle-wthree text-left">
							Thousands Of Customers Trust Our Company</h3>
						<div class="service-in text-left mt-5">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Our Vision</h5>
									<p class="card-text">Driven by its mission to enable India, ‘Live Better’.Dhanyog's goal is become the most preferred Network Marketing Company of India.
									</p>
								</div>
							</div>
						</div>
						<div class="service-in text-left mt-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Our Company</h5>
									<p class="card-text">Dhanyog is the best business opportunity for All. It is one of the India’s leading company that believes in organized Network Marketing system.
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--//bottom-banner-w3layouts-->
	
	<!--/services-->
	
	<!--//services-->

	<!--/bottom-banner-w3layouts-->
	<section class="bottom-banner-w3layouts product">
		<div class="container">
			<h3 class="tittle-wthree text-center">
				Discover the best earning opportunity.</h3>
			<div class="row inner-sec-w3ls-agileinfo">
				<div class="mid-para text-center px-lg-5 px-md-4 px-2">
				
					<div class="read inner mt-4">
						<a href="index.php#signupform" class="btn btn-sm animated-button victoria-two">Get Registered</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//-->
	<!--/process-->
	
	
			
		</div>


	</section>
	<!--//features-->
	<!--gallery  -->
	<section class="bottom-banner-w3layouts proj">
		<div class="container-fluid text-center">
			<h3 class="tittle-wthree text-center">
				Our Projects</h3>
				<!--
			<ul class="portfolio-categ filter pt-4 mb-5 text-center">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				<li class="cat-item-1">
					<a href="#" title="Category 1">Accounting</a>
				</li>
				<li class="cat-item-2">
					<a href="#" title="Category 2">Employee</a>
				</li>
				<li class="cat-item-3">
					<a href="#" title="Category 3">Banking</a>
				</li>
				<li class="cat-item-4">
					<a href="#" title="Category 4">Finacial</a>
				</li>
			</ul> -->
			<ul class="portfolio-area clearfix">
				<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
					<div>
						<span class="image-block img-hover">
							<a class="image-zoom rounded" href="images/4.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/4.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/5.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/5.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/6.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/6.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/7.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/7.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/8.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/8.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/9.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/9.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/10.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/10.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/11.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/11.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-9" data-type="cat-item-4">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/12.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/12.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-9" data-type="cat-item-3">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/13.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/13.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-10" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/4.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/4.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/9.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/9.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-9" data-type="cat-item-3">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/5.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/5.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-10" data-type="cat-item-2">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/8.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/8.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
				<li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">
					<div>
						<span class="image-block">
							<a class="image-zoom" href="images/6.jpg" data-gal="prettyPhoto[gallery]">

								<img src="images/6.jpg" class="img-fluid rounded" alt="">

							</a>
						</span>
					</div>
				</li>
			</ul>
			<!--end portfolio-area -->

		</div>
		<!-- //gallery container -->
	</section>
	<!-- //gallery -->
	<!--/testimonials-->
	
	<!--//testimonials-->
	<!--footer -->
	<footer>
		<?php include("inc/site-footer.php");?>
	</footer>
	<!-- //footer -->
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //Custom-JavaScript-File-Links -->
	<!-- js -->
	<script  src="js/jquery-2.2.3.min.js"></script>
	<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: false,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "centered-btns"
			});

		});
	</script>
	<!--//slider-->
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!--//pop-up-box-->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!--//search-bar-->

	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!-- //js -->
	<script src="js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

	 <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/site_main.js"></script>
<script>
$(document).ready(function(){
	 $("#sponsor_id").focus(); 
$("#sponsor_id").blur(function(){
//	alert("ok");
  var sid=$("#sponsor_id").val();
  
  $.get("get_sp_name.php",
  {
    id: sid
    
  },
  function(response){
    //alert("Data: " + data + "\nStatus: " + status);

    if(response==0)
    {
      $('#sname').html("<font color=red>Invalid Sponsor</font>");
      $('#sponsor_id').focus();
    }
    else
    {
      $('#sname').html(response);
    }

  });
});

$("#mobile").blur(function(){
  var mobile=$("#mobile").val();
  
  $.get("get_mobile.php",
  {
    mobile: mobile
    
  },
  function(response){
   // alert("Data: " + data + "\nStatus: " + status);

    if(response==0)
     { 
         $('#cmobile').html("<font color='red'>Mobile already in use.</font>");
         $('#mobile').focus();
    }
     if(response==1)
     { 
       $('#cmobile').html("");
    }

  });
});


$("#email").blur(function(){
  var email=$("#email").val();
  
  $.get("get_email.php",
  {
    email: email
    
  },
  function(response){
   // alert("Data: " + data + "\nStatus: " + status);

    if(response==0)
     { 
         $('#cemail').html("<font color='red'>Email already in use.</font>");
         $('#email').focus();
    }
     if(response==1)
     { 
       $('#cemail').html("");
    }

  });
});


}); 
</script>
</body>

</html>