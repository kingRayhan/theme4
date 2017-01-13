<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry content-page'); ?>>
  <figure>
    <?php the_post_thumbnail('theme4_fet',array('style' => 'width:100%;height:auto;margin-bottom:25px')); ?>
  </figure>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php theme4_entry_meta(); ?>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <footer>
    <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
  </footer>
</article>
