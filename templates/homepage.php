<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 */

get_header();
?>

<div class="absolute top-0 right-0 bg-repeat h-full -z-10 xl:w-56" style="background-image: url(<?php echo dps_asset('/images/svg/custom/pattern-dot.svg'); ?>)"></div>

<section class="relative">
  <div class="relative container mx-auto flex items-center xl:min-h-[540px] xl:mt-10 xl:mb-16">
    <div class="w-5/12">
      <div class="p-4 xl:py-8 xl:pr-8 xl:pl-0">
        <h1 class="font-semibold text-[56px] leading-none tracking-tight mb-4 xl:mb-8">Distributor Aneka Produk Material Bangunan</h1>
        <div>
          <a href="#brand" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'checkbox-dual', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Produk Kami
          </a>
        </div>
      </div>
    </div>
    <div class="absolute top-0 right-0 h-full w-7/12">
      <img src="<?php echo dps_asset('images/demo/hero-home-01.jpg') ?>" alt="" class="w-full h-full object-cover">
    </div>
  </div>

</section>

<section class="bg-slate-50">
  <div class="container mx-auto py-20">
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-center font-bold text-4xl leading-tight">Melayani penjualan grosir dan eceran</h2>
      <p>Papan Gypsum, Sistem plafon dan partisi, Papan fiber semen, Papan silikat, Panel akustik, serta berbagai produk penunjang dan aksesoris bangunan</p>
    </div>
  </div>
  <div id="brand" class="container mx-auto pb-10">
    <h3 class="font-bold text-2xl mb-8 flex flex-nowrap items-center">
      <span class="inline-block bg-slate-50 relative z-10 pr-4">BRANDS</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="flex flex-wrap -mx-4 gap-y-8 mb-8">
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/jayaboard',
          'logo' => dps_asset('images/demo/logo/logo-jayaboard.jpg'),
          'alt' => 'Jayaboard',
          'title' => 'Jayaboard'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/yoshino-gypsum',
          'logo' => dps_asset('images/demo/logo/logo-yoshinogypsum.jpg'),
          'alt' => 'Yoshino Gypsum',
          'title' => 'Yoshino Gypsum'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/knauf-ceiling-solution',
          'logo' => dps_asset('images/demo/logo/logo-knaufceiling.jpg'),
          'alt' => 'Knauf Ceiling',
          'title' => 'Knauf Ceiling'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/owa',
          'logo' => dps_asset('images/demo/logo/logo-owa.jpg'),
          'alt' => 'OWA',
          'title' => 'OWA'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/shera',
          'logo' => dps_asset('images/demo/logo/logo-shera.jpg'),
          'alt' => 'Shera',
          'title' => 'Shera'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/royal-board',
          'logo' => dps_asset('images/demo/logo/logo-royalboard.jpg'),
          'alt' => 'Royal Board',
          'title' => 'Royal Board'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/jayabrix',
          'logo' => dps_asset('images/demo/logo/logo-jayabrix.jpg'),
          'alt' => 'Jayabrix',
          'title' => 'Jayabrix'
        ));
        ?>
      </div>
      <div class="w-1/4 px-4">
        <?php
        echo brand_card(array(
          'link' => '/produk/hunterdouglas',
          'logo' => dps_asset('images/demo/logo/logo-hunterdouglas.jpg'),
          'alt' => 'Hunter Douglas',
          'title' => 'Hunter Douglas'
        ));
        ?>
      </div>
    </div>
    <h3 id="kategori-produk" class="font-bold text-2xl mb-8 flex flex-nowrap items-center mt-24">
      <span class="inline-block bg-slate-50 relative z-10 pr-4 whitespace-nowrap">KATEGORI PRODUK</span>
      <span class="block border-b border-gray-200 w-full"></span>
    </h3>
    <div class="flex flex-wrap -mx-4 gap-y-8 mb-8">
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '/kategori/papan-gipsum',
          'image' => dps_asset('images/demo/cat/cat-thumb-01.jpg'),
          'alt' => 'Papan Gypsum',
          'title' => 'Papan Gypsum'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '/kategori/papan-plafon-gyptile',
          'image' => dps_asset('images/demo/cat/cat-thumb-02.jpg'),
          'title' => 'Papan Plafon Gyptile'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-03.jpg'),
          'title' => 'Papan Plafon Akustik'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-04.jpg'),
          'title' => 'Dinding Akustik'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-05.jpg'),
          'title' => 'Papan Fibercement'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-06.jpg'),
          'title' => 'Planks Fibercement'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-07.jpg'),
          'title' => 'Dinding Fibercement'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-08.jpg'),
          'title' => 'Lantai Fibercement'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-09.jpg'),
          'title' => 'Rangka Plafon Exposed'
        ));
        ?>
      </div>

      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-10.jpg'),
          'title' => 'Rangka Plafon Concealed '
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-11.jpg'),
          'title' => 'Rangka Partisi'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-12.jpg'),
          'title' => 'Insulation'
        ));
        ?>
      </div>
      <div class="w-1/5 px-4">
        <?php
        echo category_card(array(
          'link' => '#',
          'image' => dps_asset('images/demo/cat/cat-thumb-13.jpg'),
          'title' => 'Plafon Metal'
        ));
        ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-white">
  <div class="container mx-auto py-24">
    <div class="flex items-center">
      <div class="w-9/12">
        <img class="shadow-xl" src="<?php echo dps_asset('images/demo/home-about.jpg'); ?>" alt="">
      </div>
      <div class="w-5/12 -ml-40">
        <div class="bg-primary text-white p-16 shadow-xl">
          <h3 class="text-4xl font-bold mb-8">Tentang DPS Group</h3>
          <div class="text-xl">
            <p class="mb-6">Selama lebih dari 28 tahun, DPS GROUP telah mendistribusikan beraneka produk material bangunan berkualitas serta memberikan kepuasan kepada pelanggan kami.</p>
            <p class="mb-6">DPS GROUP saat ini memiliki kantor dan jaringan distribusi di kota DKI Jakarta, Surabaya, Medan, Pekanbaru, dan Batam.</p>
          </div>
          <a href="#" class="inline-flex gap-x-2 px-6 py-3.5 bg-white text-primary font-medium text-base leading-tight uppercase rounded shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            Selanjutnya
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container mx-auto pb-24">
    <div class="rounded-lg bg-slate-100 py-12 px-16 flex items-center">
      <div class="w-2/3">
        <h3 class="text-5xl mb-4 font-semibold">Gratis Konsultasi</h3>
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
