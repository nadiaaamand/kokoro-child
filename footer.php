<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kokoro
 */

?>

	</div><!-- #content -->

	<div id="instagram-footer" class="instagram-footer">

		<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-2') ) ?>
		
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info container">
		<!---Changed what the footer said-->
			<?php printf( esc_html__( 'School project made with %1$s by %2$s.', 'kokoro' ), '<i class="fa fa-heart"></i>', '<a href="http://www.cphbusiness.dk" rel="designer">cphbusiness</a>' ); ?>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>