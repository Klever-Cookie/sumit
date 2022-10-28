<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sumit
 */

?>

<!--style: header.less -->


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/produce.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/interview.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/time.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/manage.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/single-post.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/archive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/page-404.css">

	<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="menu-sumit topnav">
		<div class="container">
			<div class="logo-menu">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-sumit-195.png">
				</a>
			</div>

			<!--<div class="option">
				<a class="options active" href="/produce-it">Our Products</a>
			</div>-->
			
			<div class="option">
				<div class="dropdown">
					<button class="dropbtn">Our Products
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="/produce-it">Produce IT</a>
						<a href="/interview-it">Interview IT</a>
						<a href="/real-time-it">Real Time IT</a>
						<a href="/manage-it">Manage IT</a>
					</div>
				</div>
			</div>

			<div class="option">
				<a class="options" href="/#services">Our Services</a>	
			</div>

			<div class="option">
				<a class="options" href="/#about">About Us</a>	
			</div>

			<div class="option-last">
				<a class="options" href="#contact">
					<img class="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/globe-light.svg"> En
				</a>
				<!--<button class="talk">Let's Talk</button>-->
				<a class="talk" href="/#contact">Let's Talk</a>
			</div>
			
			
			
			<span class="hamburguer" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

			<div id="myNav" class="overlay">
				<a href="/">
					<img class="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo-sumit-195.png">
				</a>

				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				
				<div class="overlay-content">
					<h3 class="menu-title">Our Products</h3>
					<a href="/produce-it">Produce IT</a>
					<a href="/interview-it">Interview IT</a>
					<a href="/real-time-it">Real Time IT</a>
					<a href="/manage-it">Manage IT</a>

					<a href="/#services" class="menu-title" onclick="closeNav()">Our Services</a>
					<a href="/#contact" class="menu-title" onclick="closeNav()">Contact Us</a>
					<a class="language" href="#contact">
						<img class="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/	globe-light.svg"> En
					</a>
				</div>
			</div>

			<script>
				function openNav() {
				  document.getElementById("myNav").style.height = "90%";
				}

				function closeNav() {
				  document.getElementById("myNav").style.height = "0%";
				}
			</script>

		</div>

		<div class="desktop-shadow" style="position: absolute;bottom: -20px;left: 0;width: 100%;height: 20px;background-image: linear-gradient(0deg,#fff0,#888 50px);z-index: 999;pointer-events: none;"></div>
	</header>
















