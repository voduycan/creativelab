<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
		<footer>
			
			<!--
			<ul>
				<li><a class="icon-facebook" href="" target="_blank"></a></li>
				<li><a class="icon-twitter" href="" target="_blank"></a></li>
			</ul>
			 -->
			
			<p><?php the_field('copy_right'.$_SESSION["lan"], 'options'); ?></p>
		</footer>
<?php wp_footer(); ?>
	<!-- Load JS here for greater good =============================-->
	<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery-2.0.3.min.js"></script>
	
	<!-- Parallax Effect -->
	<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.stellar.min.js"></script>

	<!-- Waypoint & Modal Effect -->
	<script src="<?php bloginfo('template_url'); ?>/creative/js/classie.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.easing.min.js"></script>		
	<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.waypoints.v2.0.2.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/creative/js/jquery.debouncedresize.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/creative/js/global.js"></script>

	<!-- contact form -->
	<script type="text/javascript">
		$('#ip-fullname').prop('placeholder','<?php the_field('full_name'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');
		$('#ip-company').prop('placeholder','<?php the_field('your_company_name'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');
		$('#ip-email').prop('placeholder','<?php the_field('email'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');
		$('#ip-phone').prop('placeholder','<?php the_field('phone_number'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');
		$('#ip-text').prop('placeholder','<?php the_field('short_intro'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');

		$('#btn-close').prop('type','button');
		$('#btn-close').prop('value','<?php the_field('close_p6'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');

		$('#submit-btn').prop('value','<?php the_field('send'.$_SESSION["lan"], get_field('contact',$post->ID)); ?>');
		
		$('#label-close span.ajax-loader').removeClass('ajax-loader');
		$('.wpcf7-form-control-wrap .wpcf7-form-control').click(function(){
			if($('.wpcf7-form-control-wrap .wpcf7-form-control').hasClass('wpcf7-not-valid')){
				$(this).removeClass('wpcf7-not-valid');
			}
		});
		$('#label-send').click(function(){
			$('#label-send .ajax-loader').addClass('icon-loading');

		});
	</script>
	<script src="<?php bloginfo('template_url'); ?>/creative/js/contact-form.js"></script>
</body>
</html>
