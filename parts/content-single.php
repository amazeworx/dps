<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header mb-4">
    <?php if (has_post_thumbnail()) {
      echo '<div class="-mx-16 aspect-video">';
      the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']);
      echo '</div>';
    } ?>
    <h1 class="entry-title text-2xl lg:text-4xl font-extrabold leading-tight mb-1"><?php echo get_the_title() ?></h1>
    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>

    <?php
    wp_link_pages(
      array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'dps') . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'dps') . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      )
    );
    ?>
  </div>

</article>