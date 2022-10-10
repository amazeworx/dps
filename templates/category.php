<?php

/**
 * Template Name: Category
 * Template Post Type: page
 *
 */

get_header();

$id = get_the_ID();
$title = get_the_title($id);
$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover'));
?>
<section>
  <div class="h-[400px] relative">
    <?php echo $featured_image ?>
    <div class="absolute w-full bottom-0">
      <div class="container mx-auto flex">
        <div class="w-1/2 bg-primary p-8 -ml-8 rounded-t-3xl">
          <h1 class="text-white text-5xl font-bold"><?php echo $title ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16">
  <div class="container mx-auto">
    <div class="flex gap-x-20">
      <div class="w-3/5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="prose xl:prose-lg">
              <?php the_content() ?>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
      <div class="w-2/5">
        <div class="mb-8">
          <h4 class="text-primary uppercase font-bold text-xl mb-4">Informasi Harga dan Pembelian</h4>
          <a href="#" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Chat Via Whatsapp
          </a>
        </div>
        <div class="mb-8">
          <?php
          $brands = get_field('brands');
          if ($brands) : ?>
            <h4 class="text-primary uppercase font-bold text-xl mb-4">DISTRIBUTOR BRAND <?php echo $title ?></h4>
            <?php foreach ($brands as $brand) :
              $permalink = get_permalink($brand->ID);
              $title = get_the_title($brand->ID);
              $product_logo = get_field('product_logo', $brand->ID)['url'];
            ?>
              <div class="max-w-xs mb-8">
                <?php
                echo brand_card(array(
                  'link' => esc_url($permalink),
                  'logo' => $product_logo,
                  'alt' => $title,
                  'title' => $title
                ));
                ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="bg-slate-100">
  <div class="container mx-auto py-14">
    <h3 class="text-xl font-bold mb-4 uppercase">Kategori Produk Lainnya</h3>
    <div class="flex flex-wrap -mx-4 gap-y-8 mb-8">
      <div class="w-1/6 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-01.jpg'),
          'alt' => 'Papan Gypsum',
          'title' => 'Papan Gypsum'
        ));
        ?>
      </div>
      <div class="w-1/6 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-02.jpg'),
          'title' => 'Papan Plafon Gyptile'
        ));
        ?>
      </div>
      <div class="w-1/6 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-03.jpg'),
          'title' => 'Papan Plafon Akustik'
        ));
        ?>
      </div>
      <div class="w-1/6 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-04.jpg'),
          'title' => 'Dinding Akustik'
        ));
        ?>
      </div>
      <div class="w-1/6 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-05.jpg'),
          'title' => 'Papan Fibercement'
        ));
        ?>
      </div>
      <div class="w-1/6 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-06.jpg'),
          'title' => 'Planks Fibercement'
        ));
        ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-white">
  <div class="container mx-auto py-20">
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
</section>

<?php
get_footer();
