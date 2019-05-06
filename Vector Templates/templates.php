<!DOCTYPE html>
<html lang="en">
    <?php include('conn.php');  ?>
    <?php $id = $_GET['xi']; ?>

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php $some_qr = mysqli_query($con , "SELECT * FROM sub_kategori,kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub ='$id'");?>
        <?php $ss_soc = mysqli_fetch_assoc($some_qr);?>
		<title><?php echo $ss_soc['nama_kategori'];?> | <?php echo $ss_soc['nama_sub'];?> - Null Design</title>
		
		<meta name="keywords" content="Banner, Wallpaper, Vector, Logos, Icons">
		<meta name="description" content="Null Templates Design">
		<meta name="author" content="Kimberly">
		
		<!-- Favicon -->
	
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="libs/slider-range/css/jslider.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Template CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reponsive.css">
	</head>
	
	<body class="home home-1">
		<div id="all">
			<!-- Header -->
			<header id="header">
				<!-- Topbar -->
				<div class="topbar">
					<!-- Close Topbar -->
					<div class="close-topbar">
						<i class="zmdi zmdi-close"></i>
					</div>
					
					<!-- Topbar Content -->
					<div class="container topbar-content">
						<div class="row">
							<!-- Topbar Left -->
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="topbar-left d-flex">
									<div class="email">
										<i class="fa fa-envelope" aria-hidden="true"></i>Email: nulldevssupport@gmail.com
									</div>
									<div class="discord">
									<i class="fab fa-discord" aria-hidden="true"></i>Discord: Kimblerly#2715
									</div>
								</div>
							</div>
							
							<!-- Topbar Right -->
							<div class="col-md-5 col-sm-5 col-xs-12">
								<div class="topbar-right d-flex justify-content-end">
									<!-- My Account -->
									<div class="dropdown account">
										<div class="dropdown-toggle" data-toggle="dropdown">
											My Account
										</div>
										<div class="dropdown-menu">									
											<div class="item">
												<a href="dashboard.php" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
											</div>
											<div class="item">
												<a href="user_login.php" title="Log in to your customer account"><i class="fas fa-sign-in-alt"></i>Login</a>
											</div>
											<div class="item">
												<a href="create_account.php" title="Register Account"><i class="fa fa-user"></i>Register</a>
											</div>
											
										</div>
									</div>
								
									<!--Navigasi -->
									<div class="dropdown currency">
										<div class="dropdown-toggle" data-toggle="dropdown">
										Kategori
										</div>
										<div class="dropdown-menu">
                                            
											<div class="item">
												<a href="index.php">Home</a>
                                            </div>

                                            <?php $some_query = mysqli_query($con , "SELECT * FROM sub_kategori");?>
                                            <?php while($f_result = mysqli_fetch_assoc($some_query)){ ?>
											<div class="item">
											<?php echo "<a style='text-transform:capitalize;' href='category.php?c=".$f_result['id_sub']."'>".$f_result['nama_sub']."</a>" ?>
											</div>
                                            <?php } ?>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					
					<!-- Open Topbar -->
					<div class="container active">
						<div id="toggle-topbar"><i class="zmdi zmdi-plus"></i></div>
					</div>
				</div>
				
				<!-- Header Top -->
				<div class="header-top">
					<div class="container">
						<div class="row">
							<!-- Search -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
							</div>
							
							<!-- Logo -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="logo">
									<a href="index.php">
										<img class="img-responsive" src="" alt="Logo 186x72 Taruh Sini">
									</a>
								</div>
								
								
							</div>
							
							</div>	
						</div>
					</div>
				</div>
				
				<!-- Main Menu -->
				<div id="main-menu">
					<ul class="menu">
						<li class="dropdown">
							<a href="index.php" title="Homepage">Home</a>
							
						</li>
						
						
						<li class="dropdown">
							<a href="#" title="Page">Menus</a>
							<div class="dropdown-menu">
                            <ul>
									<li class="dropdown-submenu">
										<a href="" title="Product List">Wallpaper</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="desktop_wallpaper.php">Desktop Wallpaper</a></li>
												<li><a href="facebook_wallpaper.php">Facebook Wallpaper</a></li>
												<li><a href="rand_wallpaper.php">Some Wallpaper</a></li>
											
												

											</ul>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a href="" title="Product List">Vector</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="templates.php">Vector Images</a></li>
												<li><a href="templates.php">Abstract Vector</a></li>
											
											</ul>
										</div>
									</li>

									<li class="dropdown-submenu">
										<a href="" title="Product List">Logo</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="">Logo Logoan</a></li>
												<li><a href="">Logo Usaha</a></li>
											
											</ul>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a href="#" title="User">User</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="user_login.php" title="Login">Login</a></li>
												<li><a href="create_account.php" title="Register">Register</a></li>
												<li><a href="dashboard.php" title="My Account">My Account</a></li>
											
											</ul>
										</div>
									</li>
									
								</ul>
							</div>
						</li>
						
						
						<li>
							<a href="">About Us</a>
						</li>
						
						<li>
							<a href="">Contact</a>
						</li>
					</ul>
				</div>
			</header>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title"><?php echo $ss_soc['nama_sub'];?></h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Wallpaper"><?php echo $ss_soc['nama_kategori']; ?></a></li>
							<li><span><?php echo $ss_soc['nama_sub'];?></span></li>
						</ul>
					</div>
				</div>
			
			
				<div class="container">
					<div class="row">
						<!-- Page Content -->
						<div id="center-column" class="col-lg-12 col-md-12">
							<div class="product-category-page">
								<!-- Nav Bar -->
								<div class="products-bar">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="gridlist-toggle" role="tablist">
												<ul class="nav nav-tabs">
												
													<li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
												</ul>
											</div>
                                            <?php $f_query = mysqli_query($con, "SELECT count(*) as total FROM kategori,sub_kategori,template where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and sub_kategori.id_sub = '$id'"); ?>
                                            <?php $f_fetch = mysqli_fetch_assoc($f_query); ?> 
											<div class="total-products">There are <?php echo $f_fetch['total'] ?> products</div>
										</div>
										
										<div class="col-md-6 col-xs-6">
											<div class="filter-bar">
												<form action="#" class="pull-right">
                                                       
													<div class="select">
                                                    <input type="submit" class="form-control" value="Filter Now" />
													</div>
												</form>
												<form action="#" class="pull-right">
													<div class="select">
                                                    <select class="form-control">
															<option value="">Sort By</option>
															<option value="1">Price: Lowest first</option>
															<option value="2">Price: Highest first</option>
															<option value="3">Product Name: A to Z</option>
															<option value="4">Product Name: Z to A</option>
															
														</select>
														
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								
							
									<!-- Products List -->
									<div class="tab-pane" id="products-list">
										<div class="products-block layout-5">
                                            <?php $w_query = mysqli_query($con , "SELECT * FROM kategori,sub_kategori,template where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and sub_kategori.id_sub = '$id'"); ?>
                                            <?php while($w_assoc = mysqli_fetch_assoc($w_query)){ ?>
											<div class="product-item">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
														<div class="product-image">
															<?php echo '<a href="checkout.php?c='.urlencode($w_assoc['id_tempt']).'&s='.urlencode($w_assoc['id_sub']).'">' ?>
																<img class="img-responsive" src="<?php echo 'images/'.$w_assoc['img_tempt'];?>" alt="Product Image">
															</a>
														</div>
													</div>
													
													<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
														<div class="product-info">
															<div class="product-title">
															<?php echo "<a style='text-transform:capitalize;' href='checkout.php?c=".urlencode($w_assoc['id_tempt'])."'> ".$w_assoc['nama_temp']." </a>" ?>
															</div>
															
															<div class="product-rating">
															<span><?php echo $w_assoc['nama_sub']?></span>
															</div>
															
															<div class="product-price">
																<span class="sale-price">Rp.<?php echo $w_assoc['harga']; ?></span>
																
															</div>
																													
															<div class="product-description">
															<?php echo $w_assoc['description']; ?>
															</div>
															
															<div class="product-buttons">
															<?php echo	'<a class="add-to-cart" href="checkout.php?c='.urlencode($w_assoc['id_tempt']).'&k='.urlencode($w_assoc['id_sub']).'&s='.urlencode($w_assoc['id_sub']).'">
																	<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																	<span>Checkout</span>
																</a>' ?>
																
																<a class="add-wishlist" href="#">
																	<i class="fa fa-heart" aria-hidden="true"></i>												
																</a>
																
															<?php echo 	'<a class="quickview" href="checkout.php?c='.urlencode($w_assoc['id_tempt']).'&k='.urlencode($w_assoc['id_sub']).'&s='.urlencode($w_assoc['id_sub']).'">
																	<i class="fa fa-eye" aria-hidden="true"></i>
																</a>' ?>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <?php } ?>
											
                                <!-- Dont Disturb This -->
										</div>
									</div>
								</div>
                                <!-- ----------- -->
                                

								<!-- Pagination Bar -->
								<div class="pagination-bar">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="text">Showing 1 Of <?php echo $f_fetch['total'];?> item(s)</div>
										</div>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
            <footer id="footer">
				<div class="footer">
					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block text">
										<div class="block-content">
											<a href="index.php" class="logo-footer">
												<img src="" alt="Logo 137x40 px here">
											</a>
									
											<div class="contact">
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-home"></i>
													</div>
													<div class="item-right">
														<span>Alamat Usaha Kita</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-phone-in-talk"></i>
													</div>
													<div class="item-right">
														<span>Taruh No.hp Disini</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-email"></i>
													</div>
													<div class="item-right">
														<span>nulldevssupport@domain.com<br>nulldevs@gmail.com</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block instagram">
										<h2 class="block-title">Random Pictures</h2>
										
										<div class="block-content">
											<div class="row margin-0">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="" alt="Random .png Image 85x85 px here">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block newsletter">
										<h2 class="block-title" style="text-transform:capitalize;">How To (sometext) ?</h2>
										
										<div class="block-content">
											<p class="description">Learn About how to make a vector images (simply basic)</p>
											<form action="#" method="post">
											<input type="text" placeholder="l" value="www.youtube.com/?" readonly="true">
												<button class="btn btn-primary" onclick="window.open('https://www.youtube.com/')">Go to Link</button>
											</form>
										</div>
									</div>
										
									<div class="block social">
										<h2 class="block-title">Follow Us</h2>
										
										<div class="block-content">
											<ul>
												<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="payment-intro">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-1.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title" style="font-style: Quacksand;">Pengerjaan Cepat</h3>
												<div class="content">Some Text</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/home1-payment-2.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Secured Payment</h3>
												<div class="content">Dummy Text qwpeqkwlkslkjakejoqiwe</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/handshake.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Kami Menerima Revisi 3 Kali (Maks: 5)</h3>
												<div class="content">MEnerima Revisi Jika Desain Kurang Tepat</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Copyright -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright">Null Design 2019 @Copyright</div>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
								<div class="payment">
									<span>Payment Accept</span>
									<img src="" alt="BCA - Paypal .png images taro sini">
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</footer>
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fas fa-long-arrow-alt-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
			
		<!-- Vendor JS -->
		<script src="libs/jquery/jquery.js"></script>
		<script src="libs/bootstrap/js/bootstrap.js"></script>
		<script src="libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="libs/slider-range/js/tmpl.js"></script>
		<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="libs/slider-range/js/draggable-0.1.js"></script>
		<script src="libs/slider-range/js/jquery.slider.js"></script>
		<script src="libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="js/main.js"></script>
	</body>

</html>