<?php

/**
 * Template Name: Profile
 * Template Post Type: page
 *
 */
get_header();

$id = get_the_ID();
$title = get_the_title($id);
$content = get_the_content($id);

$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover'));
$featured_image = '<img class="w-full h-full object-cover" src="' . get_stylesheet_directory_uri() . '/assets/images/demo/pages/profil-hero.jpg">';
?>
<section>
  <div class="h-[400px] relative">
    <?php echo $featured_image ?>
    <div class="absolute w-full bottom-0">
      <div class="container mx-auto flex">
        <div class="w-11/12 lg:w-1/2 bg-primary p-6 -ml-6 lg:p-8 lg:-ml-8 rounded-tr-xl lg:rounded-t-3xl">
          <h1 class="text-white text-3xl lg:text-5xl font-bold"><?php echo $title ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container mx-auto py-10 lg:py-24">
    <div class="flex flex-wrap lg:flex-nowrap lg:gap-x-32">
      <div class="w-full mb-8 lg:mb-0 lg:w-1/2">
        <h2 class="text-primary font-semibold text-3xl lg:text-4xl mb-4">Organisasi</h2>
        <div class="prose">
          <p>DPS GROUP established in 1994 as Boral (Jayaboard) Gypsum Distributor in Greater Jakarta.</p>

          <p>Today DPS Group has distributed many International branded buildings material products and proprietary products.</p>

          <p>DPS GROUP has set up office and warehouse facility at Greater Jakarta, Surabaya, Medan, Pekanbaru and Batam.</p>

          <p>DPS GROUP has more than 150 employees to server customers and markets.</p>
        </div>
      </div>
      <div class="w-full lg:w-2/3">
        <div class="p-8 lg:p-20 text-center bg-slate-100 rounded-3xl">
          <h2 class="text-center font-semibold text-3xl lg:text-4xl mb-8 text-primary">Visi dan Misi</h2>
          <p class="uppercase text-xl lg:text-2xl text-center">To be the leading provider of specialized premium building materials & architectural products</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-12 lg:pb-24">
  <div class="container mx-auto">
    <h2 class="font-semibold text-3xl lg:text-4xl mb-8 text-primary">Core Value</h2>
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <h3 class="font-semibold text-xl lg:text-2xl mb-3">QUALITY</h3>
        <p>Commitment to excellence & continuous for improvement in products and services</p>
      </div>
      <div>
        <h3 class="font-semibold text-xl lg:text-2xl mb-3">CUSTOMER SATISFACTION</h3>
        <p>Providing outstanding customer services</p>
      </div>
      <div>
        <h3 class="font-semibold text-xl lg:text-2xl mb-3">INNOVATION</h3>
        <p>Encouraging and implementing innovation to further improve our process, products and services</p>
      </div>
      <div>
        <h3 class="font-semibold text-xl lg:text-2xl mb-3">TEAMWORK</h3>
        <p>Working together to achieve a common goal within the group, with suppliers and customers</p>
      </div>
      <div>
        <h3 class="font-semibold text-xl lg:text-2xl mb-3">COMMITMENT</h3>
        <p>High commitment in schedule, quality and professional performance</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-slate-100">
  <div class="">
    <div class="flex flex-wrap items-center lg:flex-nowrap">
      <div class="w-full lg:w-1/2 py-8 px-4 lg:p-16 flex justify-center order-2 lg:order-1">
        <div class="max-w-lg">
          <h2 class="font-semibold text-3xl lg:text-4xl mb-8 text-primary">Management Team</h2>
          <div class="prose">
            <p>DPS operated by professional team.</p>
            <p>DPS staff and sales team are experienced and professional in the field of building materials, especially ceiling & partition products.</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 order-1 lg:order-2">
        <div class="aspect-video">
          <img class="w-full h-full object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pages/profil-management-team.jpg" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-slate-100">
  <div class="">
    <div class="flex flex-wrap lg:flex-nowrap items-center">
      <div class="w-full lg:w-1/2">
        <div class="aspect-video">
          <img class="w-full h-full object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/pages/profil-warehouse.jpg" />
        </div>
      </div>
      <div class="w-full lg:w-1/2 py-8 px-4 lg:p-16 flex justify-center">
        <div class="max-w-lg">
          <h2 class="font-semibold text-3xl lg:text-4xl mb-8 text-primary">Multiple Warehouses & On Time Delivery</h2>
          <div class="prose">
            <p>DPS has 10 warehouses with total more than 15000m2 floor space and supported by skilled workforces & forklift facilities thus ensuring the availability of products.</p>
            <p>DPS own more than 35 trucks to ensure fast and on time delivery to the clients</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
