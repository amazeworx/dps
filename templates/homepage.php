<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 */

get_header();
$whatsapp_number = get_field('whatsapp_number', 'option');
$whatsapp_message = get_field('whatsapp_message', 'option');
$whatsapp_link = 'https://wa.me/' . $whatsapp_number;
if ($whatsapp_message) {
  $whatsapp_link .= '?text=' . rawurlencode($whatsapp_message);
}

$hero_section = get_field('hero_section');
$hero_headline = $hero_section['headline'];
$hero_subheadline = $hero_section['subheadline'];
$hero_button = $hero_section['button'];
$hero_slider = $hero_section['slider']['image_slider'];

if ($hero_section) {
?>
  <section class="relative bg-primary bg-gradient-to-br from-primary to-[#241e54] pt-4 pb-12 xl:py-20">
    <div class="relative container mx-auto flex flex-wrap items-center">
      <div class="w-full lg:w-5/12 lg:order-1">
        <div class="py-8 lg:p-4 xl:py-8 xl:pr-8 xl:pl-0">
          <?php if ($hero_headline) { ?>
            <h1 class="font-semibold text-white text-[32px] leading-[1.1em] tracking-tight mb-4 xl:mb-8 md:text-4xl md:max-w-screen-sm lg:text-5xl 2xl:text-[56px]"><?php echo $hero_headline ?></h1>
          <?php } ?>
          <?php if ($hero_button) { ?>
            <div>
              <a href="<?php echo $hero_button['url'] ?>" class="inline-flex gap-x-2 px-6 py-3.5 bg-white text-primary font-medium text-sm lg:text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
                <?php echo dps_icon(array('icon' => 'checkbox-dual', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                <?php echo $hero_button['title'] ?>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="w-full lg:order-2 lg:h-full lg:w-7/12">
        <?php
        //preint_r($hero_slider);
        if ($hero_slider) {
          echo '<div id="hero-slider" class="swiper rounded-xl lg:rounded-3xl">';
          echo '<div class="swiper-wrapper">';
          foreach ($hero_slider as $image) {
            echo '<div class="swiper-slide">';
            echo '<div class="aspect-w-16 aspect-h-11">';
            echo '<img src="' . $image['url'] . '" alt="" class="w-full h-full object-cover">';
            echo '</div>';
            echo '</div>';
          }
          echo '</div>';
          echo '<div class="absolute bottom-2 left-2 flex gap-x-1 z-10 lg:bottom-4 lg:left-4">';
          echo '<div class="hero-slider-btn--prev bg-white text-black rounded-full p-1 lg:p-2 shadow hover:bg-primary hover:text-white transition duration-200">';
          echo dps_icon(array('icon' => 'arrow-right', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5 rotate-180'));
          echo '</div>';
          echo '<div class="hero-slider-btn--next bg-white text-black rounded-full p-1 lg:p-2 shadow hover:bg-primary hover:text-white transition duration-200">';
          echo dps_icon(array('icon' => 'arrow-right', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5'));
          echo '</div>';
          echo '</div>';
          $loop = 'false';
          if (count($hero_slider) > 1) {
            $loop = 'true';
          }
        ?>
          <script>
            const hero_slider = new Swiper('#hero-slider', {
              loop: <?php echo $loop ?>,
              autoplay: {
                delay: 5000,
              },
              navigation: {
                nextEl: '.hero-slider-btn--next',
                prevEl: '.hero-slider-btn--prev',
              },
            });
          </script>
        <?php } ?>

      </div>
    </div>
    <div class="absolute top-0 right-0 bg-repeat h-full xl:w-56 hidden" style="background-image: url(<?php echo dps_asset('/images/svg/custom/pattern-dot.svg'); ?>)"></div>
  </section>
<?php
}
?>

<section class="bg-slate-50">
  <?php
  $products_section = get_field('products_section');
  $heading = $products_section['heading'];
  $subheading = $products_section['subheading'];
  ?>
  <div class="container mx-auto py-10 lg:py-20">
    <div class="text-center max-w-3xl mx-auto">
      <?php if ($heading) { ?>
        <h2 class="text-center font-bold text-3xl leading-tight mb-2 lg:text-4xl"><?php echo $heading ?></h2>
      <?php } ?>
      <?php if ($subheading) { ?>
        <?php echo $subheading ?>
      <?php } ?>
    </div>
  </div>
  <div id="brand" class="container mx-auto pt-4 pb-10 scroll-m-16 lg:pb-10">
    <h3 class="font-bold text-xl mb-4 flex flex-nowrap items-center lg:text-2xl lg:mb-8">
      <span class="inline-block bg-slate-50 relative z-10 pr-4">BRANDS</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 lg:gap-5 mb-8 lg:mb-14 xl:grid-cols-5">
      <?php
      $args = array(
        'post_type' => 'page',
        'post_parent' => 12,
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order'   => 'ASC',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
          $the_query->the_post();
          echo '<div class="">';

          echo brand_card(array(
            'link' => get_the_permalink(),
            //'logo' => dps_asset('images/demo/logo/logo-jayaboard.jpg'),
            'logo' => get_field('product_logo')['url'],
            'alt' => get_the_title(),
            'title' => get_the_title()
          ));
          echo '</div>';
        }
      }
      wp_reset_postdata();
      ?>
    </div>
    <h3 id="kategori-produk" class="font-bold text-xl mb-4 flex flex-nowrap items-center lg:text-2xl lg:mb-8">
      <span class="inline-block bg-slate-50 relative z-10 pr-4 whitespace-nowrap">KATEGORI PRODUK</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 lg:gap-5 lg:mb-8 xl:grid-cols-5">
      <?php
      $args = array(
        'post_type' => 'page',
        'post_parent' => 58,
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order'   => 'ASC',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) {

        while ($the_query->have_posts()) {
          $the_query->the_post();
          $thumbnail = get_field('category_thumbnail', $post->ID);
          if ($thumbnail) {
            $thumbnail = $thumbnail['url'];
          } else {
            $thumbnail = '';
          }

          echo '<div>';
          echo category_card(array(
            'link' => get_the_permalink(),
            'image' => $thumbnail,
            'alt' => get_the_title(),
            'title' => get_the_title()
          ));
          echo '</div>';
        }
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<section class="bg-white">

  <?php
  $about_section = get_field('about_section');
  $heading = $about_section['heading'];
  $description = $about_section['description'];
  $button = $about_section['button'];
  $image = $about_section['image'];
  ?>
  <div class="container mx-auto py-12 lg:py-24">
    <div class="flex flex-wrap items-center lg:flex-nowrap">
      <div class="w-full lg:w-9/12">
        <?php if ($image) { ?>
          <img class="shadow-lg rounded-t-xl lg:rounded-3xl lg:shadow-xl" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <?php } else { ?>
          <img class="shadow-lg rounded-t-xl lg:rounded-3xl lg:shadow-xl" src="<?php echo dps_asset('images/demo/home-about.jpg'); ?>" alt="">
        <?php } ?>
      </div>
      <div class="w-full lg:w-5/12 lg:-ml-40">
        <div class="bg-primary text-white p-6 shadow-lg rounded-b-xl lg:p-16 lg:shadow-xl lg:rounded-3xl">
          <?php if ($image) { ?>
            <h3 class="text-2xl font-bold mb-4 lg:text-4xl lg:mb-8"><?php echo $heading ?></h3>
          <?php } ?>
          <?php if ($description) { ?>
            <div class="prose text-lg text-white mb-4 lg:mb-6 lg:text-xl">
              <?php echo $description ?>
            </div>
          <?php } ?>
          <?php if ($button) { ?>
            <a href="<?php echo $button['url'] ?>" class="inline-flex gap-x-2 px-6 py-3.5 bg-white text-primary font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
              <?php echo $button['title'] ?>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto pb-10 lg:pb-24">
    <div class="rounded-xl bg-slate-100 py-6 px-6 flex flex-wrap items-center lg:flex-nowrap lg:rounded-3xl lg:py-12 lg:px-16">
      <div class="w-full lg:w-2/3">
        <h3 class="text-3xl mb-4 font-semibold lg:text-5xl">Gratis Konsultasi</h3>
        <p class="text-base lg:text-lg">Punya pertanyaan seputar produk material bangunan?<br />
          Tanyakan saja kepada kami, dengan senang hati kami siap membantu Anda</p>
      </div>
      <div class="w-full mt-4 lg:mt-0 lg:w-1/3 lg:flex lg:justify-center">
        <a href="<?php echo $whatsapp_link ?>" class="inline-flex gap-x-2 px-7 py-4 bg-primary text-white font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg lg:text-lg">
          <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
          Hubungi Kami
        </a>
      </div>
    </div>
  </div>

</section>



<?php
get_footer();
