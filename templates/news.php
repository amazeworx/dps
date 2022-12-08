<?php

/**
 * Template Name: News
 * Template Post Type: page
 *
 */
get_header('', array('header_type' => ''));
$whatsapp_number = get_field('whatsapp_number', 'option');
$whatsapp_message = get_field('whatsapp_message', 'option');
$whatsapp_link = 'https://wa.me/' . $whatsapp_number;
if ($whatsapp_message) {
  $whatsapp_link .= '?text=' . rawurlencode($whatsapp_message);
}
$post_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div class="relative bg-black">
  <div class="absolute inset-0 bg-primary bg-opacity-50 z-0"></div>
  <div class="relative z-10">
    <div class="container mx-auto max-w-screen-md py-20 text-white">
      <h1 class="text-center text-4xl font-bold"><?php echo get_the_title() ?></h1>
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumb text-center mt-4">', '</div>');
      }
      ?>
    </div>
  </div>
</div>

<section class="relative z-10 pt-12 pb-28 bg-slate-100">
  <div class="container mx-auto prose lg:prose-lg">
    <?php echo the_content() ?>
  </div>
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) { ?>
    <div class="container max-w-screen-lg mx-auto">
      <div class="grid grid-cols-3 gap-8">
        <?php while ($the_query->have_posts()) {
          $the_query->the_post();
          $excerpt = wp_trim_words(get_the_excerpt(), $num_words = 30, $more = null);
        ?>
          <a href="<?php echo get_the_permalink() ?>" class="rounded-3xl bg-white shadow flex flex-col max-w-[320px] mx-auto hover:shadow-lg hover:-translate-y-1 transition duration-300">
            <div class="aspect-w-16 aspect-h-9 rounded-t-3xl flex flex-col items-center justify-center overflow-hidden">
              <img class="w-full h-auto" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
            </div>
            <div class="pt-4 pb-6 px-6 flex flex-col grow">
              <div>
                <h2 class="font-bold text-xl mb-2"><?php echo get_the_title() ?></h2>
                <div class="text-sm text-slate-500">
                  <?php echo $excerpt ?>
                </div>
              </div>
            </div>
          </a>
        <?php } ?>
      </div>
    </div>
  <?php } ?>
</section>


<section class="bg-white border-t border-solid border-slate-200">
  <div class="container mx-auto py-16">
    <div class="flex items-center">
      <div class="w-2/3">
        <h3 class="text-4xl text-primary mb-4 font-semibold">Gratis Konsultasi</h3>
        <p class="text-lg">Punya pertanyaan seputar produk partisi, plafon dan material bangunan?<br />
          Tanyakan saja kepada kami, dengan senang hati kami siap membantu Anda</p>
      </div>
      <div class="w-1/3 flex justify-center">
        <a href="<?php echo $whatsapp_link ?>" class="inline-flex gap-x-2 px-7 py-4 bg-primary text-white font-medium text-lg leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
          <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
          Hubungi Kami
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
