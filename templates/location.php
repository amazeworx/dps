<?php

/**
 * Template Name: Location
 * Template Post Type: page
 *
 */
get_header();

$id = get_the_ID();
$title = get_the_title($id);
$content = get_the_content($id);

$featured_image = get_the_post_thumbnail($id, 'full', array('class' => 'w-full h-full object-cover'));
if (!$featured_image) {
  $featured_image = '<img class="w-full h-full object-cover" src="' . get_stylesheet_directory_uri() . '/assets/images/demo/pages/location-hero.jpg">';
}
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
  <div class="container mx-auto py-8 xl:py-16">
    <?php
    $location = get_field('location');
    if ($location) {
    ?>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">
        <?php foreach ($location as $card) { ?>
          <div class="text-sm border border-solid border-slate-300 rounded-xl lg:rounded-3xl overflow-hidden">
            <div class="aspect-w-16 aspect-h-9 bg-slate-100 relative">
              <?php if ($card['image']) { ?>
                <img src="<?php echo $card['image']['url'] ?>" alt="<?php echo $card['image']['alt'] ?>" class="w-full h-full object-cover" />
              <?php } ?>
              <?php if ($card['title']) { ?>
                <div class="absolute h-auto top-auto bottom-0">
                  <h4 class="uppercase font-bold text-sm bg-white text-primary inline-block py-2 px-6 rounded-full ml-4 mb-4"><?php echo $card['title'] ?></h4>
                </div>
              <?php } ?>
            </div>
            <div class="p-4 lg:p-6">
              <div class="flex flex-col gap-2">
                <?php if ($card['company']) { ?>
                  <div class="flex space-x-3">
                    <div class="flex-none w-4">
                      <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
                    </div>
                    <div>
                      <span class="uppercase"><strong><?php echo $card['company'] ?></strong></span><br>
                      <?php if ($card['address']) { ?>
                        <?php echo $card['address'] ?>
                      <?php } ?>
                      <?php if ($card['google_map']) { ?>
                        <br /><a class="text-primary underline" href="<?php echo $card['google_map']['url'] ?>" target="<?php echo $card['google_map']['target'] ?>">Google Map</a>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>
                <?php if ($card['email']) { ?>
                  <div class="flex space-x-3">
                    <div class="flex-none w-4">
                      <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
                    </div>
                    <div>
                      <a class="hover:text-primary hover:underline" href="mailto:<?php echo $card['email'] ?>" target="_blank"><?php echo $card['email'] ?></a>
                    </div>
                  </div>
                <?php } ?>
                <?php if ($card['whatsapp']) { ?>
                  <div class="flex space-x-3">
                    <div class="flex-none w-4">
                      <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
                    </div>
                    <div>
                      <?php foreach ($card['whatsapp'] as $wa) { ?>
                        <a class="hover:text-primary hover:underline block" href="https://wa.me/<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $wa['whatsapp_number']) ?>" target="_blank"><?php echo $wa['whatsapp_number'] ?></a>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>
                <?php if ($card['phone']) { ?>
                  <div class="flex space-x-3">
                    <div class="flex-none w-4">
                      <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
                    </div>
                    <div>
                      <?php foreach ($card['phone'] as $phone) { ?>
                        <a class="hover:text-primary hover:underline block" href="tel:+<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $phone['phone_number']) ?>" target="_blank"><?php echo $phone['phone_number'] ?></a>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>
                <?php if ($card['fax']) { ?>
                  <div class="flex space-x-3">
                    <div class="flex-none w-4">
                      <?php echo dps_icon(array('icon' => 'fax', 'group' => 'utilities', 'size' => 20, 'class' => 'h-4 w-4')); ?>
                    </div>
                    <div>
                      <?php foreach ($card['fax'] as $fax) { ?>
                        <a class="hover:text-primary hover:underline" href="tel:+<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $fax['fax_number']) ?>" target="_blank"><?php echo $fax['fax_number'] ?></a>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>

  </div>
</section>


<?php
get_footer();
