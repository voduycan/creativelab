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
	session_start();
?>

		<footer>
			
			<!--
			<ul>
				<li><a class="icon-facebook" href="" target="_blank"></a></li>
				<li><a class="icon-twitter" href="" target="_blank"></a></li>
			</ul>
			 -->
			
			<p><?php the_field('copy_right'.$_SESSION['lang'], 'options'); ?></p>
		</footer>
<?php wp_footer(); ?>

</body>
</html>
