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
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$_SESSION["lan"] = ""; 
	
	if(isset($_GET["lang"])){
		if($_GET["lang"] == "en"){
		$_SESSION["lan"] = ""; 
		}
		if($_GET["lang"] == "jp"){
			$_SESSION["lan"] = "_jp"; 
		}
	}
	
?> 

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Creative Lab - A full-service digital design agency from Ho Chi Minh City, Vietnam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if( have_rows('meta'.$_SESSION["lan"], 'options')): ?>
		<?php while( have_rows('meta'.$_SESSION["lan"], 'options') ): the_row(); 
			// vars
			$name = get_sub_field('mt_name'.$_SESSION["lan"]);
			$content = get_sub_field('mt_content'.$_SESSION["lan"]);
		?>
			<meta name="<?php echo $name; ?>" content="<?php echo $content; ?>"/>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_head(); ?>

	<link href="<?php bloginfo('template_url'); ?>/creative/less/main.less" rel="stylesheet/less">
	<?php if($_SESSION["lan"] == '_jp'): ?>
		
		<link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/creative/less/jp-style.less">
		
	<?php endif; ?>
	<script src="<?php bloginfo('template_url'); ?>/creative/js/less.js"></script>
	<script>less.watch();</script>
	<style>
		#label-close::before{
			content: "<?php the_field('close_p6'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>";
		}
		#label-send::before{
			content: "<?php the_field('send'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>";
		}

		#section1 {
			background: url(<?php the_field('p1_desktop'.$_SESSION["lan"], get_field('intro',$post->ID)); ?>);
		}
		
		#section2 {
			background: url(<?php the_field('p2_desktop'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?>);
		}
		#section3 {
			background: url(<?php the_field('p3_desktop'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?>);
		}
		#section4 {
			background: url(<?php the_field('p4_desktop'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?>);
		}
		#section5 {
			background: url(<?php the_field('p5_desktop'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?>);
		}
		@media only screen and (max-width: 768px) {
			#section1{ background: url(<?php the_field('p1_mobile'.$_SESSION["lan"], get_field('intro',$post->ID)); ?>); }
			#section2{ background: url(<?php the_field('p2_mobile'.$_SESSION["lan"], get_field('who_is_creative_lab',$post->ID)); ?>); }
			#section3{ background: url(<?php the_field('p3_mobile'.$_SESSION["lan"], get_field('our_services',$post->ID)); ?>); }
			#section4{ background: url(<?php the_field('p4_mobile'.$_SESSION["lan"], get_field('featured_works',$post->ID)); ?>); }
			#section5{ background: url(<?php the_field('p5_mobile'.$_SESSION["lan"], get_field('why_choose_us',$post->ID)); ?>); }
		}

	</style>

	<!-- <link href="less/main.css" rel="stylesheet"> -->

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

<body <?php body_class(); ?>>
	<header>
		<a href="http://www.creativelab.vn" class="nav-brand" title="Creative Lab"></a>
		
		<nav>
			<a href="#section1"><?php the_field('intro'.$_SESSION["lan"], 'options'); ?></a>
			<a href="#section2"><?php the_field('who_is'.$_SESSION["lan"], 'options'); ?></a>
			<a href="#section3"><?php the_field('our_services'.$_SESSION["lan"], 'options'); ?></a>
			<a href="#section4"><?php the_field('featured_works'.$_SESSION["lan"], 'options'); ?></a>
			<a href="#section5"><?php the_field('why_choose_us'.$_SESSION["lan"], 'options'); ?></a>

			<a class="md-trigger" data-modal="modal-contact"><?php the_field('contact'.$_SESSION["lan"], 'options'); ?></a>
			<div class="lang-div">
				<a href="<?php bloginfo('url'); ?>?lang=en" class="lang-btn lang-en">
					<img src="<?php bloginfo('template_url'); ?>/creative/images/svg/america.svg">
				</a>
				<a href="<?php bloginfo('url'); ?>?lang=jp" class="lang-btn lang-jp">
					<img src="<?php bloginfo('template_url'); ?>/creative/images/svg/japan.svg">
				</a>
			</div>
		</nav>
		
		<a class="icon-menu"></a>
					
	</header>
