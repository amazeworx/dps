<?php

/**
 * Template Name: Product Child
 * Template Post Type: page
 *
 */
get_header('', array('header_type' => ''));
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

<section class="pt-12 pb-28 bg-slate-100">
  <div class="container mx-auto prose lg:prose-lg">
    <?php echo the_content() ?>
  </div>

  <?php
  $whatsapp_number = get_field('whatsapp_number', 'option');
  $whatsapp_message = get_field('whatsapp_message', 'option');
  $whatsapp_link = 'https://wa.me/' . $whatsapp_number;
  if ($whatsapp_message) {
    $whatsapp_link .= '?text=' . rawurlencode($whatsapp_message);
  }
  $products_card = get_field('products_card');
  $product_grid_column = get_field('product_grid_column');
  $grid_mobile = $product_grid_column['mobile'];
  $grid_tablet = $product_grid_column['tablet'];
  $grid_laptop = $product_grid_column['laptop'];
  $grid_desktop = $product_grid_column['desktop'];
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
  if ($products_card) { ?>
    <div class="container mx-auto mt-8 <?php echo $container_class ?>">
      <div class="grid gap-8<?php echo $grid_class ?>">
        <?php foreach ($products_card as $card) { ?>
          <div class="rounded-3xl bg-white shadow flex flex-col">
            <div class="aspect-video rounded-t-3xl flex flex-col items-center justify-center overflow-hidden">
              <img src="<?php echo $card['image']['url'] ?>" alt="">
            </div>
            <div class="pt-4 pb-6 px-6 flex flex-col grow">
              <div class="mb-8">
                <h2 class="font-bold text-xl mb-2"><?php echo $card['title'] ?></h2>
                <div class="text-sm text-slate-500">
                  <?php echo $card['description'] ?>
                </div>
              </div>
              <div class="mt-auto -ml-1">
                <a href="<?php echo $whatsapp_link ?>" target="_blank" class="inline-flex gap-x-2 bg-slate-200 px-5 py-2.5 rounded-full font-semibold text-primary text-sm leading-tight items-center hover:bg-slate-300 focus:ring-0 focus:outline-none transition-all duration-300">
                  <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                  <span class="inline-block pt-0.5">Hubungi Kami</span>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>

  <!--
<section class="bg-white border-t border-solid border-slate-200">
  <div class="container mx-auto py-16">
    <div class="flex items-center">
      <div class="w-2/3">
        <h3 class="text-4xl text-primary mb-4 font-semibold">Gratis Konsultasi</h3>
        <p class="text-lg">Punya pertanyaan seputar produk partisi, plafon dan material bangunan?<br />
          Tanyakan saja kepada kami, dengan senang hati kami siap membantu Anda</p>
      </div>
      <div class="w-1/3 flex justify-center">
        <a href="#" class="inline-flex gap-x-2 px-7 py-4 bg-primary text-white font-medium text-lg leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
          <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
          Hubungi Kami
        </a>
      </div>
    </div>
  </div>
</section> -->

  <?php
  get_footer();
