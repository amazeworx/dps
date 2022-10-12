<?php get_header(); ?>

<div class="container my-8 mx-auto prose lg:prose-lg">

  <?php if (have_posts()) : ?>

    <?php
    while (have_posts()) :
      the_post();
    ?>

      <?php get_template_part('parts/content', 'single'); ?>

    <?php endwhile; ?>

  <?php endif; ?>

</div>

<?php
get_footer();
