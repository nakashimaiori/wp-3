<!DOCTYPE HTML>
<html>
<head>
<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Uibrush Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body>
<div class="header">
  <div class="container">
	<div class="logo">
		<a href="<?php echo home_url(); ?>"><img src="images/logo.png" alt=""></a>
	</div>
    <div class="menu">
	   <a class="toggleMenu" href="#"><img src="images/menu.png" alt="" /> </a>
	   <ul class="nav" id="nav">
		 <li class="current"><a href="<?php echo home_url(); ?>">Home</a></li>
		 <li><a href="<?php echo home_url(); ?>/about">About Us</a></li>
		 <li><a href="<?php echo home_url(); ?>/services">Services</a></li>
		 <li><a href="<?php echo home_url(); ?>/portfolio">Portfolio</a></li>
		 <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
		 <li><a href="<?php echo home_url(); ?>/contact">Contact Us</a></li>								
	  </ul>
	  <script type="text/javascript" src="js/responsive-nav.js"></script>
	</div>							
    <div class="clearfix"> </div>
	<!----//End-top-nav---->
  </div>
</div>