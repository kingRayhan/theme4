<?php get_header(); ?>

<?php get_sidebar(); ?>
	<div id="content">
		<?php 
		do_action( 'theme4_before_content' );

		    if ( have_posts() ) :

		      while ( have_posts() ) : the_post();

		        get_template_part( 'template-parts/content', 'page' );
		        comment_form();

		      endwhile;

		    else :

		      get_template_part( 'template-parts/content', 'none' );

		    endif;
		do_action( 'theme4_after_content' ); 
		?>
	</div>
<?php get_footer(); ?>