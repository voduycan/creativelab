<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Creative Lab - A full-service digital design agency from Ho Chi Minh City, Vietnam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="description" content="Creative Lab is a quality software outsourcing service provider based in Vietnam. We are a small team of designers and developers, who help brands with big ideas."/>
	<meta name="keywords" content="outsourcing software development mobile web engineering quality control assurance web-maintenance qc e-commerce vietnam"/>
	<meta name="author" content="Andy Cao"/>
	
	<?php wp_head(); ?>

	<link href="<?php bloginfo('template_url'); ?>/creative/less/main.less" rel="stylesheet/less" type="text/css">
	<script src="<?php bloginfo('template_url'); ?>/creative/js/less.js"></script>
	<script>less.watch();</script>

	<!-- <link href="less/main.css" rel="stylesheet" type="text/css"> -->

	<!-- Favicon -->	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/creative/images/ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_url'); ?>/creative/images/ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/creative/images/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/creative/images/ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/creative/images/ico/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/creative/images/ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/creative/images/ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<?php 
	$_SESSION['lang'] = ""; 

	if($_GET['lang'] == 'en'){
		$_SESSION['lang'] = ""; 
	}

	if($_GET['lang'] == 'jp'){
		$_SESSION['lang'] = "_jp"; 
	}

?> 

<body <?php body_class(); ?>>
	<header>
		<a href="http://www.creativelab.vn" class="nav-brand" title="Creative Lab"></a>
		
		<nav>
			<a href="#section1"><?php the_field('intro'.$_SESSION['lang'], 'options'); ?></a>
			<a href="#section2"><?php the_field('who_is'.$_SESSION['lang'], 'options'); ?></a>
			<a href="#section3"><?php the_field('our_services'.$_SESSION['lang'], 'options'); ?></a>
			<a href="#section4"><?php the_field('why_choose_us'.$_SESSION['lang'], 'options'); ?></a>
			<a href="#section5"><?php the_field('featured_works'.$_SESSION['lang'], 'options'); ?></a>
			<a class="md-trigger" data-modal="modal-contact"><?php the_field('contact'.$_SESSION['lang'], 'options'); ?></a>
			<div class="lang-div">
				<a href="<?php bloginfo('url'); ?>?lang=en" class="lang-btn lang-en""><img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/england.jpg"></a>
				<a href="<?php bloginfo('url'); ?>?lang=jp" class="lang-btn lang-jp""><img src="<?php bloginfo('template_url'); ?>/creative/images/jpg/japan.jpg"></a>
			</div>
		</nav>
		
		<a class="icon-menu"></a>
					
	</header>
