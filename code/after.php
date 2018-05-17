<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Expense Tracker</title>
	<form action="" method="POST">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Expense Tracke" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
	<div class="slider">
	<div class="ccc-dott1">
		<div class="header">
			<div class="container">
				<div class="w3l_header_left">
					<ul>
						<li><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:ExpenseTracker@gmail.com">ExpenseTracker@gmail.com</a></li>
					</ul>
				</div>
				<div class="w3l_header_right">
					<div class="w3ls-social-icons">
						<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
						<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
						<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
						<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
						<div class="logo">
							<h1><a  href="after.php"><span>E</span>xpenseTracker</a></h1>
						</div>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-1" id="cl-effect-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="after.php" data-hover="Home">Home</a></li>
								
								<li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link active" data-toggle="dropdown" data-hover="Categorys" role="button" aria-haspopup="true"
									    aria-expanded="false">Categorys<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="categories.php">Enter Categorys</a></li>
										<li><a href="categoryretrive.php">View Categorys</a></li>
									</ul>
								</li>
								
								<li><a href="contact.php" data-hover="Contact">Contact</a></li>
                                    
                                   <li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link active" data-toggle="dropdown" data-hover="Categorys" role="button" aria-haspopup="true"
									    aria-expanded="false">Expense<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="enterexpense.php">Enter expense</a></li>
										<li><a href="expenseretrive.php">view expences</a></li>
									</ul>
								</li>
								<li><a href="profilqmanage.php" data-hover="Contact">Profile</a></li>
								<li><a href="bell.php" data-hover="Contact">notification</a></li>
								<li><a href="home.php" data-hover="Contact">log out</a></li>
								<li><font size=3 color="white"><?php echo  $_SESSION['fname'];?></font></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
		</div>
		<div class="container">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>

						<div class="slider-info">
							<h3></h3>
							<p></p>
						</div>
					</li>
					
				</ul>

			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Accounts</h4>
					<img src="images/g10.jpg" alt=" " class="img-responsive">					
					<p>Compare used data.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="tax">
		<div class="container">
			<h3 class="title-txt">Enter Your Expense</h3>
			<div class="col-md-6 col-sm-6 tax_left">
			<p>Worth is expensive</p>
				<div class="form-left-w3l">
					<label>Choose your category</label>
						 <select name="category" >
           <?php
 $mail=$_SESSION['usrname'];
$query="SELECT categories FROM categories WHERE email_id='$mail'";
$result=mysqli_query($con,$query);
While($row=mysqli_fetch_array($result)){
  
  ?><option><?php echo $row['categories']; ?></option><?php   
}
?>
         </select> </td> </tr>
				</div>
				
				<div class="clearfix"></div>
				<div class="form-right-w3l">
						<label>expense</label>
						<input type="text" class="top-up" name="cost" placeholder="" required="">
				</div>

				<div class="form-right-w3l">
						<label>shop name</label>
						<input type="text" class="top-up" name="shop" placeholder="" required="required">
				</div>
				<div class="clearfix"></div>
				<div class="form-left-w3l">
						<label>date</label>
						<input type="text" class="top-up" name="date" placeholder="yyyy-mm-dd" required="required">
						<button type="submit"  name="submitdetails"> Submit</button>
				</div>
 <?php
           if(isset($_POST['submitdetails'])){
           	$date=$_POST['date'];
           	$category=$_POST['category'];
            $price=$_POST['cost'];
            $shop=$_POST['shop'];
            $mail=$_SESSION['usrname'];
            $query="INSERT INTO `expence_info`(`date`, `categories`, `cost`, `shop`, `email_id`) VALUES ('$date','$category','$price','$shop','$mail')";
            $query_run = mysqli_query($con,$query);
             echo '<script type="text/javascript"> alert("details are updated") </script>';

           }
        ?>
 
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6 tax_right">
			
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="agileits-services agile-section">
		<div class="container">
			<h3 class="title-txt">Expense Services</h3>
			<div class="agileits-services-row">
				<div class="col-md-4 agileits-services-grids">
					<div class="service-grid1">
						<span class="fa fa-user effect-1" aria-hidden="true"></span>
						<h4>Property Taxes</h4>
						<p>  ........   </p>
					</div>
				</div>
				<div class="col-md-4 agileits-services-grids">
					<div class="service-grid1">
						<span class="fa fa-list-alt effect-1" aria-hidden="true"></span>
						<h4>Expense Planning</h4>
						<p>Rejecting some other greater, therefore, was selected for the consequences of these matters to this, or is obliged to heed a wise man</p>
					</div>
				</div>
				<div class="col-md-4 agileits-services-grids">
					<div class="service-grid1">
						<span class="fa fa-check effect-1" aria-hidden="true"></span>
						<h4>Expensekeeping</h4>
						<p>    ............    </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    



	<div class="price-table">
		<div class="container">
			<h3 class="title-txt">Price-Table</h3>
			<div class="agileits-ccc-grids text-center">
				<div class="col-md-4 col-sm-4 priceing-tag">
					<div class="price-tags-grid">
							<div class="agileits-ccc-grid">
								<div class="price-bg-grid">
									<h4>STARTER</h4>
								</div>
								<div class="table_cost">
									<span class="cost"> ₹999</span>
								</div>
								<div class="list-price">
									<ul>
										<li>5GBSpace amount</li>
										<li>20users</li>
										<li>20Pages</li>
										<li>No Support</li>
										
									</ul>
								</div>
								<div class="buy-buttn">
									<a class="w3_play_icon1" href="#"> Contact Now</a>
								</div>
							</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 priceing-tag">
					<div class="price-tags-grid">
						
							<div class="agileits-ccc-grid">
								<div class="price-bg-grid">
									<h4>BUSINESS</h4>
								</div>
								<div class="table_cost">
									<span class="cost clr-price"> ₹9999</span>
								</div>
								<div class="list-price">
									<ul>
										<li>10GBSpace amount</li>
										<li>Unlimited users</li>
										<li>50Pages</li>
										<li>Free Support</li>
										
									</ul>
								</div>
								<div class="buy-buttn">
									<a class="w3_play_icon1" href="#"> Contact Now</a>
								</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 priceing-tag">
					<div class="price-tags-grid">
						
							<div class="agileits-ccc-grid">
								<div class="price-bg-grid">
									<h4>ULTIMATE</h4>
								</div>
								<div class="table_cost">
									<span class="cost"> ₹99999</span>
								</div>
								<div class="list-price">
										<ul>
											<li>100GBSpace amount</li>
											<li>Unlimited users</li>
											<li>100Pages</li>
											<li>Free Support</li>
											
										</ul>
								</div>
								<div class="buy-buttn">
									<a class="w3_play_icon1" href="#"> Contact Now</a>
								</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<div class="col-md-4 w3_agile_footer_grid">
					
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="about.php">About</a></li>
						
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="contact.php">Contact</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="Login/signup.php">Login/signup</a></li>
					</ul>
				</div>
				
					
					
				<div class="clearfix"> </div>
			</div>
			<div class="w3_newsletter_footer_grids">
				<div class="w3_newsletter_footer_grid_left">
					
				
				
			</div>
		
			<div class="agileinfo_copyright">
				<p>© 2018 Accounts. All Rights Reserved | Design by <a href="https://Team6.com/">Team 6</a></p>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <script src="js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</form>
</body>
</html>
