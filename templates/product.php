<?php

/**
 * Template Name: Product
 * Template Post Type: page
 *
 */
get_header();

$id = get_the_ID();
$title = get_the_title($id);
$content = get_the_content($id);
$logo = get_field('product_logo');
$short_description = get_field('short_description');
$product_category_description = get_field('product_category_description');
$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover rounded-3xl'));
$whatsapp_number = get_field('whatsapp_number', 'option');
$whatsapp_message = get_field('whatsapp_message', 'option');
$whatsapp_link = 'https://wa.me/' . $whatsapp_number;
if ($whatsapp_message) {
  $whatsapp_link .= '?text=' . rawurlencode($whatsapp_message);
}
$featured_images = get_field('featured_images', $id);
?>

<section class="relative overflow-hidden">
  <div class="relative container mx-auto flex flex-wrap xl:flex-nowrap items-center xl:mt-10 xl:mb-16">
    <div class="w-full order-2 xl:w-5/12 xl:order-1">
      <div class="pt-4 pb-10 xl:py-8 xl:pr-10 xl:pl-0">
        <?php if ($logo) { ?>
          <div class="mb-8">
            <img class="max-w-[256px] xl:max-w-none" src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>"><span class="sr-only"><?php echo $title ?></span>
          </div>
        <?php } ?>
        <h1 class="text-[0px]">
          <?php echo $title ?>
        </h1>

        <?php if ($short_description) { ?>
          <div class="mb-8 prose">
            <?php echo $short_description ?>
          </div>
        <?php } elseif ($content) { ?>
          <div class="mb-8 prose">
            <?php echo $content ?>
          </div>
        <?php } ?>

        <div>
          <h4 class="text-primary uppercase font-bold text-xl mb-4">Informasi Harga dan Pembelian</h4>
          <a href="<?php echo $whatsapp_link ?>" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Chat Via Whatsapp
          </a>
        </div>

      </div>
    </div>
    <div class="w-full order-1 xl:w-7/12 h-full xl:order-2">
      <div class="mb-4 xl:mb-0 xl:-mr-24">
        <?php
        //preint_r($featured_images);
        if ($featured_images) {
          echo '<div id="hero-slider" class="swiper rounded-xl lg:rounded-3xl xl:rounded-r-none">';
          echo '<div class="swiper-wrapper">';
          foreach ($featured_images as $image) {
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
          if (count($featured_images) > 1) {
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
  </div>

</section>

<?php
$title_additional_description = get_field('title_additional_description');
$additional_description = get_field('additional_description');
$product_catalog = get_field('product_catalog');
$product_grid_column = get_field('product_grid_column');
$grid_mobile = $product_grid_column['product_grid_column']['mobile'];
$grid_tablet = $product_grid_column['product_grid_column']['tablet'];
$grid_laptop = $product_grid_column['product_grid_column']['laptop'];
$grid_desktop = $product_grid_column['product_grid_column']['desktop'];
$grid_class = '';
$container_class = 'max-w-screen-md';
if ($grid_mobile) {
  $grid_class .= ' grid-cols-' . $grid_mobile;
} else {
  $grid_class .= ' grid-cols-2';
}
if ($grid_tablet) {
  $grid_class .= ' md:grid-cols-' . $grid_tablet;
  if ($grid_tablet > 2) {
    $container_class = 'max-w-screen-lg';
  }
}
if ($grid_laptop) {
  $grid_class .= ' lg:grid-cols-' . $grid_laptop;
  if ($grid_laptop > 2) {
    $container_class = 'max-w-screen-lg';
  }
}
if ($grid_desktop) {
  $grid_class .= ' xl:grid-cols-' . $grid_desktop;
  if ($grid_desktop > 2) {
    $container_class = 'max-w-screen-lg';
  }
  if ($grid_desktop > 3) {
    $container_class = '';
  }
}
if ($title_additional_description || $additional_description) { ?>
  <section class="bg-slate-100">
    <div class="container mx-auto py-20 <?php echo $container_class ?>">
      <?php
      if ($title_additional_description) {
        echo '<h2 class="text-primary uppercase font-bold text-xl mb-8 text-center">' .  $title_additional_description . '</h2>';
      }
      ?>
      <?php
      if ($additional_description) { ?>
        <div class="mb-8">
          <div class="prose max-w-3xl text-center mx-auto">
            <?php echo $additional_description ?>
          </div>
        </div>
      <?php } ?>

      <?php if (have_rows('product_catalog')) : ?>
        <div class="grid gap-4 lg:gap-8<?php echo $grid_class ?>">

          <?php while (have_rows('product_catalog')) : the_row(); ?>
            <div>
              <?php
              $link = get_sub_field('link');
              $url = '';
              if ($link) {
                $url = $link['url'];
              }
              $image = get_sub_field('image');
              if ($image) {
                $image = $image['url'];
              } else {
                $image = '';
              }
              $title = get_sub_field('title');
              echo product_card(array(
                'link' => $url,
                'image' => $image,
                'title' => $title
              ));
              ?>
            </div>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>
    </div>
  </section>

<?php } ?>

<?php if (have_rows('kategori_produk')) : ?>
  <section class="bg-slate-100">
    <div class="container mx-auto py-20">
      <h2 class="text-primary uppercase font-bold text-xl mb-8">KATEGORI PRODUK <?php echo $title ?></h2>

      <?php if ($product_category_description) { ?>
        <div class="mb-8">
          <div class="prose">
            <?php echo $product_category_description ?>
          </div>
        </div>
      <?php } ?>
      <div class="flex flex-wrap -mx-4 gap-y-10 mb-8">

        <?php while (have_rows('kategori_produk')) : the_row(); ?>

          <div class="w-1/4 px-4">
            <?php
            $link = get_sub_field('url');
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            echo product_card(array(
              'link' => $link,
              'image' => $image['url'],
              'title' => $title
            ));
            ?>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>
<?php endif; ?>

<section class="bg-white">
  <div class="container mx-auto py-20">
    <div class="flex flex-wrap lg:flex-nowrap items-center">
      <div class="w-full lg:w-2/3">
        <h3 class="text-3xl text-primary mb-4 font-semibold lg:text-5xl">Gratis Konsultasi</h3>
        <p class="text-base lg:text-lg">Punya pertanyaan seputar produk partisi, plafon dan material bangunan?<br />
          Tanyakan saja kepada kami, dengan senang hati kami siap membantu Anda</p>
      </div>
      <div class="w-full mt-4 lg:mt-0 lg:w-1/3 lg:flex lg:justify-center">
        <a href="<?php echo $whatsapp_link ?>" class="inline-flex gap-x-2 px-7 py-4 bg-primary text-white font-medium text-sm lg:text-lg leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
          <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
          Hubungi Kami
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
