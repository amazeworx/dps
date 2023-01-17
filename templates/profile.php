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

$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover object-top'));
// $featured_image = '<img class="w-full h-full object-cover" src="' . get_stylesheet_directory_uri() . '/assets/images/demo/pages/profil-hero.jpg">';

$heading_organization = get_field('heading_organization');
$content_organization = get_field('content_organization');
$heading_vision_mission = get_field('heading_vision_mission');
$content_vision_mission = get_field('content_vision_mission');
$image_vision_mission = get_field('image_vision_mission');
$heading_core_value = get_field('heading_core_value');
$core_value = get_field('core_value');
$heading_management = get_field('heading_management');
$content_management = get_field('content_management');
$image_management = get_field('image_management');
$heading_warehouse = get_field('heading_warehouse');
$content_warehouse = get_field('content_warehouse');
$image_warehouse = get_field('image_warehouse');
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
      <?php if ($content_organization) { ?>
        <div class="w-full mb-8 lg:mb-0 lg:w-1/2">
          <?php if ($heading_organization) { ?>
            <h2 class="text-primary font-semibold text-3xl lg:text-4xl mb-4"><?php echo $heading_organization ?></h2>
          <?php } ?>
          <?php if ($content_organization) { ?>
            <div class="prose">
              <?php echo $content_organization ?>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if ($content_vision_mission) { ?>
        <div class="w-full lg:w-2/3">
          <div class="relative p-8 lg:p-20 text-center bg-slate-50 rounded-3xl overflow-hidden">
            <div class="absolute inset-0"><img class="w-full h-full object-cover opacity-20" src="<?php echo $image_vision_mission['url']; ?>" /></div>
            <div class="relative z-10">
              <?php if ($heading_vision_mission) { ?>
                <h2 class="text-center font-semibold text-3xl lg:text-4xl mb-8 text-primary"><?php echo $heading_vision_mission ?></h2>
              <?php } ?>
              <?php if ($content_vision_mission) { ?>
                <div class="uppercase text-xl lg:text-2xl text-center font-semibold"><?php echo $content_vision_mission ?></div>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php if ($core_value) { ?>
  <section class="pb-12 lg:pb-24">
    <div class="container mx-auto">
      <?php if ($heading_core_value) { ?>
        <h2 class="font-semibold text-3xl lg:text-4xl mb-8 text-primary"><?php echo $heading_core_value ?></h2>
      <?php } ?>
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <?php foreach ($core_value as $value) { ?>
          <div>
            <h3 class="font-semibold text-xl lg:text-2xl mb-3"><?php echo $value['heading'] ?></h3>
            <div><?php echo $value['content'] ?></div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>

<?php if ($content_management) { ?>
  <section class="bg-slate-100">
    <div>
      <div class="flex flex-wrap items-center lg:flex-nowrap">
        <div class="w-full lg:w-1/2 py-8 px-4 lg:p-16 flex justify-center order-2 lg:order-1">
          <div class="max-w-lg">
            <?php if ($heading_management) { ?>
              <h2 class="font-semibold text-3xl lg:text-4xl mb-8 text-primary"><?php echo $heading_management ?></h2>
            <?php } ?>
            <div class="prose">
              <?php echo $content_management ?>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 order-1 lg:order-2">
          <div class="aspect-w-16 aspect-h-9 bg-slate-100">
            <?php if ($image_management) { ?>
              <img class="w-full h-full object-cover" src="<?php echo $image_management['url']; ?>" />
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if ($content_warehouse) { ?>
  <section class="bg-slate-100">
    <div>
      <div class="flex flex-wrap lg:flex-nowrap items-center">
        <div class="w-full lg:w-1/2">
          <div class="aspect-w-16 aspect-h-9">
            <?php if ($image_warehouse) { ?>
              <img class="w-full h-full object-cover" src="<?php echo $image_warehouse['url']; ?>" />
            <?php } ?>
          </div>
        </div>
        <div class="w-full lg:w-1/2 py-8 px-4 lg:p-16 flex justify-center">
          <div class="max-w-lg">
            <?php if ($heading_warehouse) { ?>
              <h2 class="font-semibold text-3xl lg:text-4xl mb-8 text-primary"><?php echo $heading_warehouse ?></h2>
            <?php } ?>
            <div class="prose">
              <?php echo $content_warehouse ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php
get_footer();
