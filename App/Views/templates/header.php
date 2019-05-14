<?php if(session_status() == PHP_SESSION_NONE) 
    session_start(); ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="App/Views/templates/assets/img/favicon.png" type="image/png">
	<title>AnaKampus</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="App/Views/templates/assets/css/bootstrap.css">
	<link rel="stylesheet" href="App/Views/templates/assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="App/Views/templates/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="App/Views/templates/assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="App/Views/templates/assets/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="App/Views/templates/assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="App/Views/templates/assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="App/Views/templates/assets/vendors/jquery-ui/jquery-ui.css">

	<!-- main css -->
	<link rel="stylesheet" href="App/Views/templates/assets/css/style.css">
  <link rel="stylesheet" href="App/Views/templates/assets/css/responsive.css">
<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					
				</div>
				<div class="float-right">
					<ul class="right_side">
						<?php if(isset($_SESSION['uid'])) { ?>
						<li>
							<a href="/logout">
								Logout
							</a>
						</li>
            <?php } else { ?>
            <li>
							<a href="/register">
								Register
							</a>
						</li>
            <?php } ?>
					</ul>
				</div>
			</div>
    </div>
    
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/">
						<img src="App/Views/templates/assets/img/favicon.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item">
										<a class="nav-link" href="/">Home</a>
                  </li>
                  
									<li class="nav-item">
										<a class="nav-link" href="/show-category">shop</a>
                  </li>

                  <li class="nav-item">
										<a class="nav-link" href="/history">History</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="/contact">Contact</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="/profile" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>

									<hr>
									<li class="nav-item">
										<a href="/cart" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>
									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
  </header>
  
	<!--================Header Menu Area =================-->