<article id="post-<?php the_ID(); ?>" <?php post_class('pb-10 lg:pb-20'); ?>>

  <section>
    <div class="relative bg-primary">
      <div class="absolute w-full h-1/4 bg-white bottom-0 left-0 right-0"></div>
      <div class="container max-w-prose mx-auto pt-6 lg:pt-10 xl:pt-16">
        <?php if (has_post_thumbnail()) {
          echo '<div class="lg:-mx-16 aspect-w-16 aspect-h-10 rounded-xl lg:rounded-3xl shadow-md lg:shadow-lg bg-white overflow-hidden">';
          the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']);
          echo '</div>';
        } ?>
      </div>
    </div>
  </section>

  <div class="container max-w-prose mx-auto">
    <header class="entry-header my-4 lg:my-6 xl:my-8">
      <h1 class="entry-title text-2xl lg:text-[34px] font-extrabold leading-tight mb-3"><?php echo get_the_title() ?></h1>
      <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-base text-gray-500 mt-4"><?php echo get_the_date('j F Y'); ?></time>
    </header>

    <div class="entry-content">
      <div class="prose max-w-none lg:prose-lg">
        <?php the_content(); ?>
      </div>

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
  </div>

</article>