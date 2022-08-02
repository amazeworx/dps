<?php

/**
 * Template Name: Product
 * Template Post Type: page
 *
 */
get_header();

$id = get_the_ID();
$title = get_the_title($id);
$description = get_the_content($id);
$logo = get_field('product_logo');
$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover'));
?>

<section class="relative overflow-hidden">
  <div class="relative container mx-auto flex items-center xl:mt-10 xl:mb-16">
    <div class="w-5/12">
      <div class="p-4 xl:py-8 xl:pr-10 xl:pl-0">
        <h1 class="mb-8">
          <?php if ($logo) { ?>
            <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>"><span class="sr-only"><?php echo $title ?></span>
          <?php } else { ?>
            $title
          <?php } ?>
        </h1>

        <?php if ($description) { ?>
          <div class="mb-8">
            <?php echo $description ?>
          </div>
        <?php } ?>

        <div>
          <h4 class="text-primary uppercase font-bold text-xl mb-4">Informasi Harga dan Pembelian</h4>
          <a href="#" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Chat Via Whatsapp
          </a>
        </div>

      </div>
    </div>
    <div class="w-7/12 h-full">
      <div class="xl:-mr-32">
        <?php if ($featured_image) {
          echo $featured_image;
        } ?>
      </div>

    </div>
  </div>

</section>

<section class="bg-slate-100">
  <div class="container mx-auto py-20">
    <h2 class="text-primary uppercase font-bold text-xl mb-4">KATEGORI PRODUK <?php echo $title ?></h2>

    <?php if (have_rows('kategori_produk')) : ?>

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
    <?php endif; ?>

  </div>
</section>

<section class="bg-white">
  <div class="container mx-auto py-20">
    <div class="flex items-center">
      <div class="w-2/3">
        <h3 class="text-4xl text-primary mb-4 font-semibold">Gratis Konsultasi</h3>
        <p class="text-lg">Punya pertanyaan seputar produk material bangunan?<br />
          Tanyakan saja kepada kami, dengan senang hati kami siap membantu Anda</p>
      </div>
      <div class="w-1/3 flex justify-center">
        <a href="#" class="inline-flex gap-x-2 px-7 py-4 bg-primary text-white font-medium text-lg leading-tight uppercase rounded shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
          <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
          Hubungi Kami
        </a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
