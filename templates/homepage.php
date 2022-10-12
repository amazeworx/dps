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
  <div class="relative container mx-auto flex items-center xl:min-h-[540px] xl:mt-10 xl:mb-16">
    <div class="w-5/12">
      <div class="p-4 xl:py-8 xl:pr-8 xl:pl-0">
        <h1 class="font-semibold text-[48px] leading-none tracking-tight mb-4 xl:mb-8 2xl:text-[56px]">Distributor Aneka Produk Bangunan, Plafon dan Partisi</h1>
        <div>
          <a href="#brand" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'checkbox-dual', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Produk Kami
          </a>
        </div>
      </div>
    </div>
    <div class="absolute top-0 right-0 h-full w-7/12">
      <img src="<?php echo dps_asset('images/demo/hero-home-01.jpg') ?>" alt="" class="w-full h-full object-cover rounded-3xl">
    </div>
  </div>

</section>

<section class="bg-slate-50">
  <div class="container mx-auto py-20">
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-center font-bold text-4xl leading-tight mb-2">Melayani penjualan grosir dan eceran</h2>
      <p>Papan Gypsum, Sistem plafon dan partisi, Papan fiber semen, Papan silikat, Panel akustik, serta berbagai produk penunjang dan aksesoris bangunan</p>
    </div>
  </div>
  <div id="brand" class="container mx-auto pb-10 scroll-m-16">
    <h3 class="font-bold text-2xl mb-8 flex flex-nowrap items-center">
      <span class="inline-block bg-slate-50 relative z-10 pr-4">BRANDS</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="flex flex-wrap -mx-4 gap-y-8 mb-8">
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
          echo '<div class="w-1/4 px-4">';

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
    <h3 id="kategori-produk" class="font-bold text-2xl mb-8 flex flex-nowrap items-center mt-24">
      <span class="inline-block bg-slate-50 relative z-10 pr-4 whitespace-nowrap">KATEGORI PRODUK</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="flex flex-wrap -mx-4 gap-y-8 mb-8">
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
          echo '<div class="w-1/5 px-4">';
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
  <div class="container mx-auto py-24">
    <div class="flex items-center">
      <div class="w-9/12">
        <img class="shadow-xl rounded-3xl" src="<?php echo dps_asset('images/demo/home-about.jpg'); ?>" alt="">
      </div>
      <div class="w-5/12 -ml-40">
        <div class="bg-primary text-white p-16 shadow-xl rounded-3xl">
          <h3 class="text-4xl font-bold mb-8">Tentang DPS Group</h3>
          <div class="text-xl">
            <p class="mb-6">Selama lebih dari 28 tahun, DPS GROUP telah mendistribusikan beraneka produk material bangunan berkualitas serta memberikan kepuasan kepada pelanggan kami.</p>
            <p class="mb-6">DPS GROUP saat ini memiliki kantor dan jaringan distribusi di kota DKI Jakarta, Surabaya, Medan, Pekanbaru, dan Batam.</p>
          </div>
          <a href="/profil" class="inline-flex gap-x-2 px-6 py-3.5 bg-white text-primary font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            Selanjutnya
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container mx-auto pb-24">
    <div class="rounded-3xl bg-slate-100 py-12 px-16 flex items-center">
      <div class="w-2/3">
        <h3 class="text-5xl mb-4 font-semibold">Gratis Konsultasi</h3>
        <p class="text-lg">Punya pertanyaan seputar produk material bangunan?<br />
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
