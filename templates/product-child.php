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

<section class="pt-12 pb-28">
  <div class="container mx-auto prose lg:prose-lg">
    <?php echo the_content() ?>
  </div>

  <?php
  $products_card = get_field('products_card');
  $product_grid_column = get_field('product_grid_column');
  $grid_mobile = $product_grid_column['mobile'];
  $grid_tablet = $product_grid_column['tablet'];
  $grid_laptop = $product_grid_column['laptop'];
  $grid_desktop = $product_grid_column['desktop'];
  $grid_class = '';
  if ($grid_mobile) {
    $grid_class .= ' grid-cols-' . $grid_mobile;
  } else {
    $grid_class .= ' grid-cols-2';
  }
  if ($grid_tablet) {
    $grid_class .= ' md:grid-cols-' . $grid_tablet;
  }
  if ($grid_laptop) {
    $grid_class .= ' lg:grid-cols-' . $grid_laptop;
  }
  if ($grid_desktop) {
    $grid_class .= ' xl:grid-cols-' . $grid_desktop;
  }
  if ($products_card) { ?>
    <div class="container mx-auto max-w-screen-md mt-8">
      <div class="grid gap-8<?php echo $grid_class ?>">
        <?php foreach ($products_card as $card) { ?>
          <div class="rounded-xl border border-solid border-slate-300 bg-white overflow-hidden flex flex-col">
            <div class="border-b border-solid border-slate-300 aspect-video flex flex-col items-center justify-center">
              <img src="<?php echo $card['image']['url'] ?>" alt="">
            </div>
            <div class="p-4 flex flex-col grow">
              <div class="not-prose">
                <h2 class="text-primary font-bold text-xl mb-2"><?php echo $card['title'] ?></h2>
                <div class="text-base">
                  <?php echo $card['description'] ?>
                </div>
              </div>
              <div class="mt-8"><a class="text-primary uppercase font-semibold hover:underline" href="#">Hubungi Kami</a></div>
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
