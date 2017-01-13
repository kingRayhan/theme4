<?php



function theme4_post_pagination(){
	if(function_exists('wp_pagenavi')){
		wp_pagenavi();
	}else{
		the_posts_navigation(array(
			'screen_reader_text' => ' '
		));
	}

}


function theme4_title(){ ?>
	<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php }




function theme4_inline_style(){ ?>

<style id="customizer-style">
	a{
		color: <?php echo get_theme_mod('theme4_link_color' , '#3879D9'); ?>;
	}
	a:hover{
		color: <?php echo get_theme_mod('theme4_link_hover_color' , '#555'); ?>
	}
	/**
	 * Header
	 */
	#header{
		background-color: <?php echo get_theme_mod('theme4_header_background_color' , '#222'); ?>
	}
	#header a{
		color: <?php echo get_theme_mod('theme4_header_links_color' , '#fff'); ?>
	}
	/**
	 * Footer
	 */
	#footer{
		background-color: <?php echo get_theme_mod('theme4_footer_background_color' , '#222'); ?>;
		color: <?php echo get_theme_mod('theme4_footer_text_color','#fff'); ?>
	}
	#footer a{
		color: <?php echo get_theme_mod('theme4_footer_link_color' , '#fff'); ?>
	}

</style>


<?php }
add_action('wp_head','theme4_inline_style');