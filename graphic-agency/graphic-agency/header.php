<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Graphic_agency
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="icon" href="img/favicon.ico">-->

<title>
    <?php if(is_front_page() || is_home()){  echo get_bloginfo('name'); } else{ echo wp_title(''); }?>
</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="single">
<div class="row">
	<header class="site-mainheader">
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">

			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url(); ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress">
						</a>
					</div>
					
					<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
					<div class="navbar-collapse collapse">

						<?php
							wp_nav_menu( array(
								'menu'             => 'primary',
								'theme_location'   => 'header-menu',
								'depth'            => 2,
								'container'        => 'div',
								'container_class'  => 'collapse navbar-collapse navbar-ex1-collapse',
								'menu_class'       => 'nav navbar-nav navbar-right',
								'fallback_cb'      => 'wp_bootstrap_navwalker::fallback',
								'walker'           => new wp_bootstrap_navwalker(),

								//wp_bootstrap_navwalker Custom Args
								'limit_depth'      => false,
								'icon_support'     => true,
								'icon_prefix'      => 'glyphicon glyphicon-',
								'icon_slug'        => 'glyph-',
							));
						?>
					</div> 
				</div><!-- container -->
				</div>
			</div>
	</header>
	</div>