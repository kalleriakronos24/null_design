<!DOCTYPE html>
<html lang="zxx">
	
<?php include('conn.php'); ?>

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Homepage | Index - Null Design</title>
		
		<meta name="keywords" content="Banner, Wallpaper, Vector, Logos, Icons">
		<meta name="description" content="Null Templates Design">
		<meta name="author" content="kimberly">
		
	
		
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
										<i class="fa fa-envelope" aria-hidden="true"></i>Email: contact.nulldevs@gmail.com
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
												<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
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
										Shortcut
										</div>
										<div class="dropdown-menu">

										<?php $query_oneq = mysqli_query($con ,"SELECT * FROM kategori,sub_kategori where kategori.id_kat = sub_kategori.id_kat"); ?>
										<?php while($we = mysqli_fetch_assoc($query_oneq)){ ?>
                                            <div class="item">
												<?php echo '<a href="templates.php?xi='.$we['id_sub'].'">'?><?php echo $we['nama_sub']?></a>
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
										<?php

										$rand_uery = mysqli_query($con, "SELECT * FROM kategori where nama_kategori ='Wallpaper'");
										$fetch = mysqli_fetch_assoc($rand_uery);
										?>

									<?php echo '<a href="category.php?x='.$fetch['id_kat'].'">Wallpaper</a>' ?>
										<div class="dropdown-menu level2">
											<ul>
												<?php $query_one = mysqli_query($con ,"SELECT * FROM kategori,sub_kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.nama_sub = 'Desktop Wallpaper'"); ?>
												<?php $fetch_q = mysqli_fetch_assoc($query_one); ?>
												<li><?php echo '<a href="templates.php?xi='.$fetch_q['id_sub'].'">Desktop Wallpaper</a>' ?></li>
												
													<?php $query_onez = mysqli_query($con ,"SELECT * FROM kategori,sub_kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.nama_sub = 'Facebook Wallpaper'"); ?>
												<?php $fetch_qz = mysqli_fetch_assoc($query_onez); ?>
												<li><?php echo '<a href="templates.php?xi='.$fetch_qz['id_sub'].'">Facebook Wallpaper</a>' ?></li>


												<li><a href="#">Some Wallpaper</a></li>
											
												

											</ul>
										</div>
									</li>
									<li class="dropdown-submenu">
									<?php

$rand_ueryz = mysqli_query($con, "SELECT * FROM kategori where nama_kategori ='Vector'");
$fetchz = mysqli_fetch_assoc($rand_ueryz);
?>
										<?php echo '<a href="category.php?x='.$fetchz['id_kat'].'">Vector</a>' ?>
										<div class="dropdown-menu level2">
											<ul>
											
											<?php $query_onezq = mysqli_query($con ,"SELECT * FROM kategori,sub_kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.nama_sub = 'Vector Face'"); ?>
												<?php $fetch_qzq = mysqli_fetch_assoc($query_onezq); ?>
												<li><?php echo '<a href="templates.php?xi='.$fetch_qzq['id_sub'].'">Vector Face</a>' ?></li>
												<li><a href="#">Abstract Vector</a></li>
											
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
												<li><a href="#" title="My Account">My Account</a></li>
												
											</ul>
										</div>
									</li>
									
								</ul>
							</div>
						</li>
						
						
						<li>
							<a href="https://kimber-ly.netlify.com">About Us</a>
						</li>
						
						<li>
							<a href="https://kimber-ly.netlify.com">Contact</a>
						</li>
					</ul>
				</div>
			</header>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Slideshow -->		
				<div class="section slideshow">
					<div class="tiva-slideshow-wrapper">
						<div id="tiva-slideshow" class="nivoSlider">
							<a href="#">
								<img class="img-responsive"  src="images/bg-one.jpg" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive"  src="images/blackku.jpg" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive" src="images/intro-bg.jpg" alt="Slideshow Image">
							</a>
						</div>
					</div>
				</div>
				
				
				<!-- Intro -->
				<div class="section intro">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="intro-header">
									<h3>Null Design</h3>
									<p>Some text...Some text...Some text...Some text...Some text...Some text...Some text...Some text...Some text...Some text...</p>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="intro-left">
									<div class="intro-item">
										<p><img src="png/user-shape.png" style="width: 38px; height:42px;" alt="Intro Image"></p>
										<h4>24 Hours Service</h4>
										<p>24 jam menerima pesanan/pengerjaan</p>
									</div>
									<br>
									<br>
									<div class="intro-item">
										<p><img src="png/code.png" style="width: 38px; height:42px;" alt="Intro Image"></p>
										<h4>Some Text</h4>
										<p>Some Text</p>
									</div>
								</div>
							</div>
						
							
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="intro-right">
									<div class="intro-item">
										<p><img src="png/code.png" style="width: 38px; height:42px;" alt="Intro Image"></p>
										<h4>Some Text</h4>
										<p>Some Text Some Text</p>
									</div>
									<br>
									<br>
									<div class="intro-item">
										<p><img src="png/briefcase.png" style="width: 38px; height:42px;" alt="Intro Image"></p>
										<h4>Fast And Secure</h4>
										<p>Pengerjaan cepat dan pembayaran terjamin aman lul</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="intro-right">
									<div class="intro-item">
										<p><img src="png/wheelchair.png" style="width: 38px; height:42px;" alt="Intro Image"></p>
										<h4>100% Natural</h4>
										<p>Desain Buatan Sendiri</p>
									</div>
									<br>
									<br>
									<div class="intro-item">
										<p><img src="png/thumbs-up.png" style="width: 38px; height:42px;" alt="Intro Image"></p>
										<h4>Premium Quality</h4>
										<p>Kami MEmberikan kualitas terbaik setidaknya</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				
				
				<!-- Product - Deals Of The Day -->
				<div class="section products-block deals-of-day show-hover nav-color layout-2">
					<div class="block-title">
						<h2 class="title">Our Recomendation</h2>
						<div class="sub-title">Dummy TExt qwekqwokqwoekc	</div>
					</div>
					
					<div class="block-content">
						<div class="products owl-theme owl-carousel">
<?php

	$qq = mysqli_query($con, "SELECT * FROM kategori,sub_kategori,template where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and template.harga > 50000 ORDER BY template.harga DESC LIMIT 3");
	while($rez = mysqli_fetch_assoc($qq)){
?>
							<div class="product-item">
								<div class="row">
									<div class="col-md-6 col-xs-12 product-left">
										<div class="product-info">
											<div class="product-title">
											<?php echo '<a style="text-transform:capitalize;" href="checkout.php?c='.urlencode($rez['id_tempt']).'&k='.urlencode($rez['id_kat']).'&s='.urlencode($rez['id_sub']).'">' ?>
												<?php echo $rez['nama_temp']; ?>
												</a>
											</div>
											
											<div class="product-rating">
												<span><?php echo $rez['nama_kategori']?> - <?php echo $rez['nama_sub']?></span>
											</div>
											
											<div class="product-price">
												<span class="sale-price">Rp.<?php echo $rez['harga'];?></span>
											
											</div>
											
											<div class="product-intro"><?php echo $rez['description'];?></div>
											
										
											
											<div class="product-buttons">
											<?php echo '<a class="add-to-cart" href="checkout.php?c='.urlencode($rez['id_tempt']).'&k='.urlencode($rez['id_kat']).'&s='.urlencode($rez['id_sub']).'">' ?>
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<?php echo '<a class="quickview" href="checkout.php?c='.urlencode($rez['id_tempt']).'&k='.urlencode($rez['id_kat']).'&s='.urlencode($rez['id_sub']).'">' ?>
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
									
									<div class="col-md-6 col-xs-12 product-right">
										<div class="product-image">
											<?php echo '<a href="checkout.php?c='.urlencode($rez['id_tempt']).'&k='.urlencode($rez['id_kat']).'&s='.urlencode($rez['id_sub']).'">' ?>
												<img src="<?php echo 'images/'. $rez['img_tempt'];?>">
											</a>
										</div>
									</div>
								</div>
							</div>
	<?php } ?>
						</div>
					</div>
				</div>
				
				
				<!-- Product - Best Sellers -->
				<div class="section products-block product-tab nav-color show-hover nav-round best-sellers">
					<div class="block-title">
						<h2 class="title">Best Sellers</h2>
						<div class="sub-title">Best Sellers this Month</div>
					</div>
			
						
						<!-- Tab Content -->
						<div class="tab-content">
							<!-- All Products -->
							<div role="tabpanel" class="tab-pane fade in active" id="all-products">
								<div class="products owl-theme owl-carousel">
									<div class="product-item">
										<div class="product-image">
											<a href="#">
												<img src="images/pepesad.png" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="">
												Pepe
											</a>
										</div>
												
										<div class="product-rating">
										<span>Vector</span>
										</div>
												
										<div class="product-price">
											<span class="sale-price">Rp.80.00</span>
											
										</div>
														
										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>
											
											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>												
											</a>
											
											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>
									
									<div class="product-item">
										<div class="product-image">
											<a href="">
												<img src="images/pepesad.png" alt="Product Image">
											</a>
										</div>
										
										<div class="product-title">
											<a href="">
												Pepe
											</a>
										</div>
												
										<div class="product-rating">
											<span>Vector</span>
										</div>
												
										<div class="product-price">
											<span class="sale-price">Rp.120.00</span>
										</div>
														
										<div class="product-buttons">
											<a class="add-to-cart" href="#">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</a>
											
											<a class="add-wishlist" href="#">
												<i class="fa fa-heart" aria-hidden="true"></i>												
											</a>
											
											<a class="quickview" href="#">
												<i class="fa fa-eye" aria-hidden="true"></i>
											</a>
										</div>
									</div>	
						
									</div>
								</div>
							</div>
							
		</div>
							
												
				
			
				
				
				<!-- Product - New Arrivals -->
				<div class="section products-block new-arrivals layout-3">
					<div class="block-title">
						<h2 class="title">New <span>Templates</span></h2>
						<div class="sub-title">There are list of New Templates uploaded today</div>
					</div>
					
					<div class="block-content">
						<div class="container">
							<div class="products owl-theme owl-carousel">
								<div class="item">
			<?php 
						$date = date('d M Y');
						$some_q = mysqli_query($con , "SELECT * FROM template,sub_kategori,kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and template.tgl_tmp = '$date' ORDER BY template.tgl_tmp DESC 	LIMIT 1");

						while($f_result = mysqli_fetch_assoc($some_q)){
			
			

			?>
							
									<div class="product-item">
										<div class="product-image">
											<a href="">
												<img src="<?php echo 'images/'.$f_result['img_tempt'];?>" alt="No Data Available">
											</a>
										</div>
										
										<div class="product-info">
											<div class="product-title">
												<?php echo '<a style="text-transform: capitalize;" href="checkout.php?c='.urlencode($f_result['id_tempt']).'&k='.urlencode($f_result['id_kat']).'&s='.urlencode($f_result['id_sub']).'">' ?>
												<?php echo $f_result['nama_temp'];?>
												</a>
											</div>
											
											<div class="product-rating">
												<span><?php echo $f_result['nama_sub'];?></span>
											</div>
											
											<div class="product-price">
												<span class="sale-price">Rp.<?php echo $f_result['harga'];?></span>
												<!-- <span style="font-size: 12px; color:gray;">Dim : Based On Your Request</span> -->
											</div>
											
											<div class="product-buttons">
											<?php echo '<a class="add-to-cart" style="text-transform: capitalize;" href="checkout.php?c='.urlencode($f_result['id_tempt']).'&k='.urlencode($f_result['id_kat']).'&s='.urlencode($f_result['id_sub']).'">' ?>
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>
												
												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>												
												</a>
												
												<?php echo '<a class="quickview" style="text-transform: capitalize;" href="checkout.php?c='.urlencode($f_result['id_tempt']).'&k='.urlencode($f_result['id_kat']).'&s='.urlencode($f_result['id_sub']).'">' ?>
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
						<?php } ?>
							
								</div>
							</div>
						</div>
					</div>
				</div>
				
			
				
				<!-- Product - Category -->
				<div class="section product-category">
					<div class="block-title">
						<div class="sub-title">Discover Our Products</div>
						<h2 class="title">Shop By <span>Categories</span></h2>
					</div>
					
					<div class="block-content">
						<div class="container">
							<div class="categories owl-theme owl-carousel">
						
							
								<div class="item">
									<img src="" alt="Category 2 icon size 210x255 px">
									<div class="title">Wallpaper</div>
									<div class="category-products">
										<ul>
											<li><a href="#">Desktop Wallpaper</a></li>
											<li><a href="#">Facebook Wallpaper</a></li>
											<li><a href="#">sometext</a></li>
											<li><a href="#">sometext</a></li>
									
										</ul>
									</div>
								</div>
							
								
								<div class="item">
									<img src="" alt="Category 4 icon size 210x255 px">
									<div class="title">Vector</div>
									<div class="category-products">
										<ul>
											<li><a href="#">Vector Images</a></li>
											<li><a href="#">some text</a></li>
											<li><a href="#">some text</a></li>
											<li><a href="#">sometext</a></li>
										
										</ul>
									</div>
								</div>

								<div class="item">
									<img src="" alt="Category 4 icon size 210x255 px">
									<div class="title">Logo</div>
									<div class="category-products">
										<ul>
											<li><a href="#">Logo Usaha</a></li>
											<li><a href="#">Logo Team</a></li>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">Coming Soon</a></li>
											
										</ul>
									</div>
								</div>

								<div class="item">
									<img src="" alt="Category 4 icon size 210x255 px">
									<div class="title">Coming Soon</div>
									<div class="category-products">
										<ul>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">Coming Soons</a></li>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">Coming Soon</a></li>
										
										</ul>
									</div>
								</div>

								<div class="item">
									<img src="" alt="Category 4 icon size 210x255 px">
									<div class="title">Coming Soon</div>
									<div class="category-products">
										<ul>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">Coming Soon</a></li>
										
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				</div>
			
				
			
			
			
			<!-- Footer -->
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
												<div class="content">Dummy Text qwekljqwelkjlxckjalsdkjqweoiquweoiqwe</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="img/handshake.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Kami Menerima Revisi Anda 3 Kali (Maks :5)</h3>
												<div class="content">Kami Merevisi ulang jika Desain Kurang Tepat</div>
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
									<img src="" alt="BCA - BTN .png images taro sini">
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