<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

?>


<?php wp_footer(); ?>
<?php do_action( 'theme4_before_closing_body' ); ?>
	<div id="footer">
		<?php echo get_theme_mod("footer_copyright" , "Theme4 Wordpress theme by <a href='//rayhan.info' target='_blank'>@KingRayhan</a>"); ?>
	</div>
</div>
</body>
</html>

