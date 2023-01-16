<?php

/**
 * Template Name: Category
 * Template Post Type: page
 *
 */

get_header();

$id = get_the_ID();
$title = get_the_title($id);
$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover rounded-2xl lg:rounded-3xl shadow-md'));
$whatsapp_number = get_field('whatsapp_number', 'option');
$whatsapp_message = get_field('whatsapp_message', 'option');
$whatsapp_link = 'https://wa.me/' . $whatsapp_number;
if ($whatsapp_message) {
  $whatsapp_link .= '?text=' . rawurlencode($whatsapp_message);
}
$featured_images = get_field('featured_images');
?>
<section>
  <div class="relative bg-primary">
    <div class="absolute w-full h-1/4 bg-white bottom-0 left-0 right-0"></div>
    <div class="container mx-auto pt-6 lg:pt-10">
      <?php
      //preint_r($featured_images);
      if ($featured_images) {
        echo '<div id="featured-image" class="swiper rounded-xl lg:rounded-3xl shadow-md lg:shadow-lg">';
        echo '<div class="swiper-wrapper">';
        foreach ($featured_images as $image) {
          echo '<div class="swiper-slide">';
          echo '<div class="aspect-w-16 aspect-h-9 lg:aspect-h-6">';
          echo '<img src="' . $image['url'] . '" alt="" class="w-full h-full object-cover">';
          echo '</div>';
          echo '</div>';
        }
        echo '</div>';
        echo '<div class="absolute bottom-2 right-2 flex gap-x-1 z-10 lg:bottom-4 lg:right-4">';
        echo '<div class="featured-image-btn--prev bg-white text-black rounded-full p-1 lg:p-2 shadow hover:bg-primary hover:text-white transition duration-200">';
        echo dps_icon(array('icon' => 'arrow-right', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5 rotate-180'));
        echo '</div>';
        echo '<div class="featured-image-btn--next bg-white text-black rounded-full p-1 lg:p-2 shadow hover:bg-primary hover:text-white transition duration-200">';
        echo dps_icon(array('icon' => 'arrow-right', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5'));
        echo '</div>';
        echo '</div>';
        echo '</div>';

        $loop = 'false';
        if (count($featured_images) > 1) {
          $loop = 'true';
        }
      ?>
        <script>
          const hero_slider = new Swiper('#featured-image', {
            loop: <?php echo $loop ?>,
            autoplay: {
              delay: 5000,
            },
            watchOverflow: true,
            navigation: {
              nextEl: '.featured-image-btn--next',
              prevEl: '.featured-image-btn--prev',
            },
          });
        </script>
      <?php } ?>

    </div>
  </div>
</section>

<section class="py-6 lg:py-12 lg:px-12 2xl:px-24">
  <div class="container mx-auto">
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-20">
      <div class="w-full lg:w-3/5">
        <h1 class="text-primary text-2xl lg:text-4xl font-bold mb-4 lg:mb-6"><?php echo $title ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="prose xl:prose-lg">
              <?php the_content() ?>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
      <div class="w-full mt-8 lg:w-2/5 lg:mt-0">
        <div class="mb-8">
          <h4 class="text-primary uppercase font-bold text-lg lg:text-xl mb-4">Informasi Harga dan Pembelian</h4>
          <a href="#" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Chat Via Whatsapp
          </a>
        </div>
        <div class="mb-8">
          <?php
          $brands = get_field('brands');
          if ($brands) : ?>
            <h4 class="text-primary uppercase font-bold text-lg lg:text-xl mb-4">DISTRIBUTOR BRAND <?php echo $title ?></h4>
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
  <div class="container mx-auto py-14 lg:px-20">
    <h3 class="text-xl font-bold mb-4 uppercase">Kategori Produk Lainnya</h3>
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

      echo '<div class="relative pb-10 lg:pb-0">';
      echo '<div id="category-slider" class="swiper pt-4 pb-6 px-3 -mx-3">';
      echo '<div class="swiper-wrapper">';

      while ($the_query->have_posts()) {
        $the_query->the_post();
        $thumbnail = get_field('category_thumbnail', $post->ID);
        if ($thumbnail) {
          $thumbnail = $thumbnail['url'];
        } else {
          $thumbnail = '';
        }

        echo '<div class="swiper-slide">';
        echo category_card(array(
          'link' => get_the_permalink(),
          'image' => $thumbnail,
          'alt' => get_the_title(),
          'title' => get_the_title()
        ));
        echo '</div>';
      }

      echo '</div>';
      echo '</div>';

      echo '<div class="absolute bottom-0 left-0 flex gap-x-1 z-10 lg:top-1/2 lg:bottom-auto lg:w-full">';
      echo '<div class="hero-slider-btn--prev bg-white text-black rounded-full p-1 lg:p-2 shadow hover:bg-primary hover:text-white transition duration-200 lg:absolute lg:-left-12 lg:-translate-y-1/2">';
      echo dps_icon(array('icon' => 'arrow-right', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5 rotate-180'));
      echo '</div>';
      echo '<div class="hero-slider-btn--next bg-white text-black rounded-full p-1 lg:p-2 shadow hover:bg-primary hover:text-white transition duration-200 lg:absolute lg:-right-12 lg:-translate-y-1/2">';
      echo dps_icon(array('icon' => 'arrow-right', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5'));
      echo '</div>';
      echo '</div>';
      echo '</div>';
    ?>
      <script>
        const category_slider = new Swiper('#category-slider', {
          loop: false,
          slidesPerView: 2,
          spaceBetween: 8,
          breakpoints: {
            640: {
              slidesPerView: 3,
              spaceBetween: 12,
            },
            768: {
              slidesPerView: 4,
              spaceBetween: 16,
            },
            1024: {
              slidesPerView: 5,
              spaceBetween: 16,
            },
            1300: {
              slidesPerView: 6,
              spaceBetween: 16,
            },
          },
          navigation: {
            nextEl: '.hero-slider-btn--next',
            prevEl: '.hero-slider-btn--prev',
          },
        });
      </script>
    <?php
    }
    wp_reset_postdata();
    ?>
  </div>
</section>


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
