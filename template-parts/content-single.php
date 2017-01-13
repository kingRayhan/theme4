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

<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry content-single'); ?>>
	<figure>
		<?php the_post_thumbnail('theme4_fet',array('style' => 'width:100%;height:auto;margin-bottom:25px')); ?>
	</figure>
	<header>
		<h1><?php the_title(); ?></h1>
		<?php theme4_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>
