<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matchmoney
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav id="first-menu" class="navbar navbar-expand-lg text-white scrolling-navbar z-index-10 blog justify-content-center" role="navigation">
			<div class="container menu-page">
				<!-- Logo -->
				<a class="navbar-brand" href="/" >
                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lg-matchmoney.png" class="logo-header" />
            	</a>
				<!-- Collapse -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="menuMobile();">
                	<i class="fa fa-bars text-white" aria-hidden="true"></i>
                 </button>
                
                <!--menu principal -->
                <?php get_template_part('template-parts/menu-default'); ?>	
                
			</div>			
		</nav><!-- .navbar-collapse -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
