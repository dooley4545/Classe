<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package classe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( is_page_template('page-home.php')) :?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
<?php endif; ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizer.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<?php if ( is_page_template('page-home.php')) :?>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div id="outer-wrap">
<div id="inner-wrap">
	
	<!-- Begin Masthead -->
	<header id="masthead" class="site-nav" role="banner">
			
		<!-- SNAP Logo -->
		<div class="site-nav--home">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
		</div>
		
		<!-- Spacer for mobile - May not need -->
		<div class="site-nav--filler"></div>

		<!-- Masthead Navigation for Desktop -->
		<?php wp_nav_menu( array( 'theme_location' => '', 'menu_class' => '', 'container' => 'div', 'container_class' => 'site-nav--sections' ) ); ?>

		<!-- Search Trigger -->
		<div class="site-nav--search">
			<div class="btn-wrap">
				<!-- Button in top nav for search bar-->
				<button class="search-button" id="searchButton"><i class="material-icons">&#xE8B6;</i></button>
			</div>
		</div>

		<!-- Sidemenu button -->
		<div class="site-nav--sidemenu">
			<button class="nav-btn" id="nav_open_btn" href="#" aria-controls="primary-menu" aria-expanded="false"><i class="material-icons">&#xE5D2;</i><?php esc_html_e( '', 'classe' ); ?></button>
		</div>


	</header><!-- #masthead -->

	<!-- Search Bar Pop-up -->
	<div class="search-bar" id="searchBar">
		<?php get_search_form(); ?>
		<button class="search-close" id="searchClose"><i class="material-icons">&#xE5CD;</i></button>
	</div>
	<!-- Transparent Cover Layer when search & nav is active -->
	<div class="content-cover" id="contentCover"></div>

	<nav id="nav" class="main-navigation pushmenu-left" role="navigation">
			<div class="block">
				<div class="top-block">
					<a class="nav-btn" id="nav-close-btn" href="#" aria-controls="primary-menu" aria-expanded="false"><i class="material-icons">&#xE5CD;</i><?php esc_html_e( '', 'classe' ); ?></a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => '', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
	</nav><!-- #site-navigation -->
	<div id="content" class="site-content">
