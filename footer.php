<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quored
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">			
			<?php if( get_theme_mod( 'footer_text_block') != "" ) { ?>
				<?php echo get_theme_mod( 'footer_text_block'); ?>
			<?php } else { ?>
				<p align="center"><small>Quored Theme · By: <a href="https://www.sidneysacchi.com" target="_blank" title="Web Design &amp; Web Consulting">Sidney Sacchi</a> · Inspired by Quora style · Based on <a href="http://underscores.me/">Underscores.me</a> Theme</small></p>
			<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
