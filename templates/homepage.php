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
?>

<div class="absolute top-0 right-0 bg-repeat h-full -z-10 xl:w-56" style="background-image: url(<?php echo dps_asset('/images/svg/custom/pattern-dot.svg'); ?>)"></div>

<section class="relative">
  <div class="relative container mx-auto flex flex-wrap items-center pb-8 xl:pb-0 xl:min-h-[540px] xl:mt-10 xl:mb-16">
    <div class="w-full lg:w-5/12 lg:order-1">
      <div class="py-8 lg:p-4 xl:py-8 xl:pr-8 xl:pl-0">
        <h1 class="font-semibold text-[32px] leading-[1.1em] tracking-tight mb-4 xl:mb-8 md:text-4xl md:max-w-screen-sm lg:text-5xl 2xl:text-[56px]">Distributor Aneka Produk Bangunan, Plafon dan Partisi</h1>
        <div>
          <a href="#brand" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-sm lg:text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'checkbox-dual', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Produk Kami
          </a>
        </div>
      </div>
    </div>
    <div class="w-full lg:order-2 lg:absolute lg:top-0 lg:right-0 lg:h-full lg:w-7/12">
      <img src="<?php echo dps_asset('images/demo/hero-home-01.jpg') ?>" alt="" class="w-full h-full object-cover rounded-xl lg:rounded-3xl">
    </div>
  </div>
</section>

<section class="bg-slate-50">
  <div class="container mx-auto py-10 lg:py-20">
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-center font-bold text-3xl leading-tight mb-2 lg:text-4xl">Melayani penjualan grosir dan eceran</h2>
      <p>Papan Gypsum, Sistem plafon dan partisi, Papan fiber semen, Papan silikat, Panel akustik, serta berbagai produk penunjang dan aksesoris bangunan</p>
    </div>
  </div>
  <div id="brand" class="container mx-auto pt-4 pb-10 scroll-m-16 lg:pb-10">
    <h3 class="font-bold text-xl mb-4 flex flex-nowrap items-center lg:text-2xl lg:mb-8">
      <span class="inline-block bg-slate-50 relative z-10 pr-4">BRANDS</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 lg:gap-5 mb-8">
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
    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 lg:gap-5 lg:mb-8">
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
          echo '<div class="">';
          echo category_card(array(
            'link' => get_the_permalink(),
            'image' => wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'),
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
  <div class="container mx-auto py-12 lg:py-24">
    <div class="flex flex-wrap items-center lg:flex-nowrap">
      <div class="w-full lg:w-9/12">
        <img class="shadow-lg rounded-t-xl lg:rounded-3xl lg:shadow-xl" src="<?php echo dps_asset('images/demo/home-about.jpg'); ?>" alt="">
      </div>
      <div class="w-full lg:w-5/12 lg:-ml-40">
        <div class="bg-primary text-white p-6 shadow-lg rounded-b-xl lg:p-16 lg:shadow-xl lg:rounded-3xl">
          <h3 class="text-2xl font-bold mb-4 lg:text-4xl lg:mb-8">Tentang DPS Group</h3>
          <div class="prose text-lg text-white mb-4 lg:mb-6 lg:text-xl">
            <p>Selama lebih dari 28 tahun, DPS GROUP telah mendistribusikan beraneka produk material bangunan berkualitas serta memberikan kepuasan kepada pelanggan kami.</p>
            <p>DPS GROUP saat ini memiliki kantor dan jaringan distribusi di kota DKI Jakarta, Surabaya, Medan, Pekanbaru, dan Batam.</p>
          </div>
          <a href="/profil" class="inline-flex gap-x-2 px-6 py-3.5 bg-white text-primary font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            Selanjutnya
          </a>
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
