<!DOCTYPE html>
<html lang="en">
<?php include('conn.php'); ?>
<?php $f_id = $_GET['c'];?>
<?php  $q_id = $_GET['k']; ?>
<?php  $r_id = $_GET['s']; ?>
<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php
	$q_1 = mysqli_query($con , "SELECT * FROM template,sub_kategori,kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and template.id_tempt = '$f_id'");
	$fetching = mysqli_fetch_assoc($q_1);

?>
<?php 
	$q_1q = mysqli_query($con , "SELECT * FROM template,sub_kategori,kategori where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and sub_kategori.id_sub = '$r_id'");
	$fetching1 = mysqli_fetch_assoc($q_1q);
?>
		<title>Checkout | <?php echo $fetching['nama_sub'];?> - Null Design</title>
		
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
										<i class="fa fa-envelope" aria-hidden="true"></i>Email: nulldevssupport@gmail.com
									</div>
									<div class="skype">
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
												<a href="user-login.html" title="Log in to your customer account"><i class="fas fa-sign-in-alt"></i>Login</a>
											</div>
											<div class="item">
												<a href="user-register.html" title="Register Account"><i class="fa fa-user"></i>Register</a>
											</div>
											<div class="item">
												<a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
											</div>
										</div>
									</div>
									
								
									
									<!--Navigasi -->
									<div class="dropdown currency">
										<div class="dropdown-toggle" data-toggle="dropdown">
										Shortcut
										</div>
										<div class="dropdown-menu">
											<div class="item">
												<a href="#">Home</a>
											</div>
											<div class="item">
												<a href="#">Wallpaper</a>
											</div>
											<div class="item">
												<a href="#">Vector</a>
                                            </div>
                                            <div class="item">
												<a href="#">Logo</a>
											</div>
                                            <div class="item">
												<a href="#">Desktop Wallpaper</a>
                                            </div>
                                            <div class="item">
												<a href="#">Facebook Wallpaper</a>
                                            </div>
                                            <div class="item">
												<a href="#">Vector Face</a>
                                            </div>
                                            <div class="item">
												<a href="#">Logo Perusahaan</a>
                                            </div>
                                            <div class="item">
												<a href="#">Logo Team</a>
											</div>
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
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
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
						</li>

							<li class="dropdown">
								<a href="#" title="Page">Menus</a>
								<div class="dropdown-menu">
									<ul>
										<li class="dropdown-submenu">
											<a href="product-grid-left-sidebar.html" title="Product List">Wallpaper</a>
											<div class="dropdown-menu level2">
												<ul>
													<li><a href="desktop_wallpaper.php">Desktop Wallpaper</a></li>
													<li><a href="facebook_wallpaper.php">Facebook Wallpaper</a></li>
													<li><a href="rand_wallpaper.php">Some Wallpaper</a></li>
												
													
	
												</ul>
											</div>
										</li>
										<li class="dropdown-submenu">
											<a href="product-detail-left-sidebar.html" title="Product List">Vector</a>
											<div class="dropdown-menu level2">
												<ul>
													<li><a href="vector_images.php">Vector Images</a></li>
													<li><a href="abstract_vector.php">Abstract Vector</a></li>
												
												</ul>
											</div>
										</li>
	
										<li class="dropdown-submenu">
											<a href="product-detail-left-sidebar.html" title="Product List">Logo</a>
											<div class="dropdown-menu level2">
												<ul>
													<li><a href="product-detail-left-sidebar.html" title="Product Detail - Left Sidebar">Logo Logoan</a></li>
													<li><a href="product-detail-full-width-1.html" title="Product List - Full Width 1">Logo Usaha</a></li>
												
												</ul>
											</div>
										</li>
	
										<li class="dropdown-submenu">
											<a href="#" title="User">User</a>
											<div class="dropdown-menu level2">
												<ul>
													<li><a href="user-login.html" title="Login">Login</a></li>
													<li><a href="user-register.html" title="Register">Register</a></li>
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
								<a href="page-contact.php">Contact</a>
							</li>
						</ul>
					</div>
				</header>
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Checkout</h2>
				
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><?php echo '<a href="category.php?x='.$fetching['id_kat'].'">'?><?php echo $fetching['nama_kategori'];?></a></li>
							<li><span><?php echo $fetching['nama_sub'];?></span></li>
						</ul>
					</div>
				</div>
			
			
				<div class="container">
					<div class="product-detail">
						<div class="products-block layout-5">
							<div class="product-item">
								<div class="product-title" style="text-transform: capitalize;">
								Related | <?php echo $fetching['nama_sub'];?> - <?php echo $fetching['nama_temp'];?>
								</div>
											
								<div class="row">
									<div class="product-left col-md-5 col-sm-5 col-xs-12">
										<div class="product-image vertical">
											<div class="main-image">
												<img class="img-responsive" src="<?php echo 'images/'.$fetching['img_tempt']; ?>" >
											</div>
											<div class="thumb-imagesz">
												<?php echo '<a href="checkout.php?c='.urlencode($fetching['id_tempt']).'&k='.urlencode($fetching['id_kat']).'&s='.urlencode($fetching['id_sub']).'">'?><img class="img-responsive" src="<?php echo 'images/'.$fetching['img_tempt']; ?>" ></a>
									<?php

									$q_2 = mysqli_query($con , "SELECT * FROM kategori,sub_kategori,template where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and template.id_sub ='$r_id' LIMIT 4");
									 while($aso = mysqli_fetch_assoc($q_2)){
									
									?>
													<?php echo '<a href="checkout.php?c='.urlencode($aso['id_tempt']).'&k='.urlencode($aso['id_kat']).'&s='.urlencode($aso['id_sub']).'">'?><img class="img-responsive" src="<?php echo 'images/'.$aso['img_tempt']; ?>" ></a>
													
									 <?php } ?>
											</div>
										</div>
									</div>
									
									<div class="product-right col-md-7 col-sm-7 col-xs-12">
										<div class="product-info">
											<div class="product-price">
												<span class="sale-price">Rp.<?php echo $fetching['harga']?></span>
												
											</div>
										
										
											
											<div class="product-short-description">
												Harga Fixed 
											</div>
											
											<div class="product-variants border-bottom">
												<div class="product-variants-item">
													<span class="control-label">Dimensions <small style="text-transform: capitalize;">!important !required</small> :</span>
													<input type="text" required name="dimensi" class="form-control" placeholder="Example: 1920x760 px" value="" />
												</div>

												<div class="product-variants-item">
														<span class="control-label">Informasi Tambahan <small style="text-transform: capitalize;">!required</small> :</span>
														<input type="text" required name="dimensi" class="form-control" value="" />
													</div>
													
												

												
												
											</div>

											<div class="product-variants border-bottom">
													<div class="product-variants-item">
														<span class="control-label">No Rekening <small style="text-transform: capitalize;">!important !required :</small> <input type="checkbox" style="background: none; " id="reveal_cc" class="far fa-eye" /> <small>Show</small></span>
														<input type="text" required name="dimensi" class="form-control" placeholder="We'll Keep It Secure" value="" />
													</div>
	
													<div class="product-variants-item">
															<span class="control-label">CCV/CVV <small style="text-transform: capitalize;">!important !required</small> :</span>
															<input type="text" required name="dimensi" class="form-control" value="" />
														</div>
															
												</div>
											
											<div class="product-add-to-cart border-bottom">
												<div class="product-variants-item">
													<span class="control-label">Confim :</span>
													<input type="checkbox" class="form-group" /> Saya Menyetujui Semua Blablabla
												</div>
												<br>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="#">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
														<span>Order Sekarang</span>
													</a>
													
													<a class="add-wishlist" href="#">
														<i class="fa fa-heart" aria-hidden="true"></i>										
													</a>
													
													</div>
											
													<div style="margin-top: 20px;" class="product-variants-item">
													<input type="text" class="form-control" style="background: none; border: none; border-top:none; display: none;" value="Pembelian Berhasil.." />
													</div>

												
											</div>
											
											<div class="product-review border-bottom">
												<div class="item">
												<?php $qwe = mysqli_query($con, "SELECT COUNT(*) as totz FROM review where id_tempt='$f_id'");?>
												<?php $asd = mysqli_fetch_assoc($qwe);?>
													<i class="zmdi zmdi-comments" aria-hidden="true"></i><span class="text">Reviews (<?php echo $asd['totz'];?>)</span>
												</div>
												
												<div class="item">
													<i class="zmdi zmdi-edit" aria-hidden="true"></i><span class="text">Write a review</span>
												</div>
											</div>
											
											<div class="product-extra">
												<div class="item">
													<span class="control-label">Review :</span><span class="control-label"><?php echo $fetching['rezv_id']?></span>
												</div>
												<div class="item">
													<span class="control-label">Categories :</span>
													<a href="#"><?php echo $fetching['nama_kategori']?></a>
												
												</div>
												<div class="item">
													<span class="control-label">Tags :</span>
													<span><?php echo $fetching['tags']?></span>
												
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="product-tab">
									<!-- Tab Navigation -->
									<div class="tab-nav">
										<ul>
											<li class="active">
												<a data-toggle="tab" href="#description">
													<span>Description</span>
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#additional-information">
													<span>Additional Information</span>
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#review">
													<span>Review</span>
												</a>
											</li>
										</ul>
									</div>
									
									<!-- Tab Content -->
									<div class="tab-content">
										<!-- Description -->
										<div role="tabpanel" class="tab-pane fade in active" id="description">
											<p><?php echo $fetching['description'];?></p>
											
										</div>
										
										<!-- Product Tag -->
										<div role="tabpanel" class="tab-pane fade" id="additional-information">
											<p><li>Dibuat Tanggal : <?php echo $fetching['tgl_tmp']?></li></p>
											<p><li>Aplikasi Yang Digunakan : <?php echo $fetching['media']?></li></p>
										</div>
										
										<!-- Review -->
										<div role="tabpanel" class="tab-pane fade" id="review">
											<div class="reviews">
<?php 

										$qz = mysqli_query($con, "SELECT * FROM review where id_tempt ='$f_id'");
										while($result = mysqli_fetch_assoc($qz)){

?>
												<div class="comments-list">
													<div class="item">
														<div class="comment-body">
															<div class="comment-meta">
																<span class="author"><?php echo $result['username']?></span> - <span class="time"><?php echo $result['tanggal'];?></span>
															</div>
															<div class="comment-content"><?php echo $result['comment'];?></div>
														</div>
													</div>
												</div>
										<?php } ?>
												
												<div class="review-form">
													<h4 class="title">Write a review</h4>
	
													<?php

											include('conn.php');
												error_reporting(0);

													if(isset($_POST['submitz'])){

														$x = htmlspecialchars(strip_tags($_POST['rev_e']));
														$a = htmlspecialchars(strip_tags($_POST['des_id']));
														$b = htmlspecialchars(strip_tags($_POST['user']));
														$c = htmlspecialchars(strip_tags($_POST['comment']));
														$d = htmlspecialchars(strip_tags($_POST['tgl_c']));
													
					if($b == NULL){
					$qq = mysqli_query($con, "INSERT INTO `review` (`rev_id`, `comment`, `tanggal`, `username`, `id_tempt`) VALUES ('$x','$c','$d','u/Guest','$a')");
					}else{
						$qq = mysqli_query($con, "INSERT INTO `review` (`rev_id`, `comment`, `tanggal`, `username`, `id_tempt`) VALUES ('$x','$c','$d','u/$b','$a')");
					}
					
		}

?>
													<form action="" method="POST" class="form-validate">
												
														<input type="hidden" name="rev_e" value="<?php echo rand(0,9999999);?>" readonly/>
														<input type="hidden" name="des_id" value="<?php echo $f_id?>" readonly/>
														<input type="hidden" name="user" value="" readonly/>
														<input type="hidden" name="tgl_c" value="<?php echo date('M d, Y');?>" readonly/>
														<div class="form-group">
															<div class="text">You review<sup class="required">*</sup></div>
															<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
														</div>
														
														<div class="form-group">
															<input type="submit" name="submitz" class="btn btn-primary" value="Submit" />
														</div>
													</form>
												</div>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<!-- Related Products -->
					<div class="products-block related-products item-4">
						<div class="block-title">
							<h2 class="title">Related <span>Templates</span></h2>
						</div>
						
						<div class="block-content">
							<div class="products owl-theme owl-carousel">
<?php
							$q_2 = mysqli_query($con , "SELECT * FROM kategori,sub_kategori,template where kategori.id_kat = sub_kategori.id_kat and sub_kategori.id_sub = template.id_sub and template.id_sub ='$r_id' LIMIT 6");
									 while($asoz = mysqli_fetch_assoc($q_2)){
										 ?>
								<div class="product-item">
									<div class="product-image">
									<?php echo '<a href="checkout.php?c='.urlencode($asoz['id_tempt']).'&k='.urlencode($asoz['id_kat']).'&s='.urlencode($asoz['id_sub']).'">'?>
											<img src="<?php echo 'images/'.$asoz['img_tempt']; ?>" alt="Product Image">
										</a>
									</div>
									
									<div class="product-title">
									<?php echo '<a href="checkout.php?c='.urlencode($asoz['id_tempt']).'&k='.urlencode($asoz['id_kat']).'&s='.urlencode($asoz['id_sub']).'">'?>
										<?php echo $asoz['nama_temp']; ?>
										</a>
									</div>
									
									<div class="product-rating">
										<span><?php echo $asoz['nama_sub']?></span>
									</div>
									
									<div class="product-price">
										<span class="sale-price">Rp.<?php echo $asoz['harga'];	?></span>
									
									</div>
									
									<div class="product-buttons">
									<?php echo '<a class="add-to-cart" href="checkout.php?c='.urlencode($asoz['id_tempt']).'&k='.urlencode($asoz['id_kat']).'&s='.urlencode($asoz['id_sub']).'">'?>
											<i class="fa fa-shopping-basket" aria-hidden="true"></i>
										</a>
										
										<a class="add-wishlist" href="#">
											<i class="fa fa-heart" aria-hidden="true"></i>												
										</a>
										
										<?php echo '<a style="quickview" href="checkout.php?c='.urlencode($asoz['id_tempt']).'&k='.urlencode($asoz['id_kat']).'&s='.urlencode($asoz['id_sub']).'">'?>
											<i class="fa fa-eye" aria-hidden="true"></i>
										</a>
									</div>
								</div>
									 <?php } ?>
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
													<h3 class="title">Pembayaran Terjamin Aman</h3>
													<div class="content">No Scam Scaman</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<div class="item d-flex">
												<div class="item-left">
													<img src="img/home1-payment-3.png" alt="Payment Intro">
												</div>
												<div class="item-right">
													<h3 class="title">We'll take your Revision</h3>
													<div class="content">Menerima Revisi 3 Kali (Maks : 5) Jika Desain Kurang Tepat</div>
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