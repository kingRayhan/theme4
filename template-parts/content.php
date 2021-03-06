<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry content'); ?>>
	<figure>
		<?php the_post_thumbnail('theme4_fet',array('style' => 'width:100%;height:auto;margin-bottom:25px')); ?>
	</figure>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php theme4_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<a href="<?php the_permalink(); ?>">[<?php _e('Details' , 'theme4') ?>]</a>
		<br>
	</footer>
</article>
