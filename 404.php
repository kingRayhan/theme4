<?php get_header(); ?>

<?php get_sidebar(); ?>
	<div id="content">
		<?php 
		do_action( 'theme4_before_content' );

		      get_template_part( 'template-parts/content', 'none' );


		do_action( 'theme4_after_content' ); 
		?>
	</div>
<?php get_footer(); ?>