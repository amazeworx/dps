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
$featured_image = '<img class="w-full h-full object-cover" src="' . get_stylesheet_directory_uri() . '/assets/images/demo/pages/location-hero.jpg">';
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

<section>
  <div class="container mx-auto pt-24 py-24">
    <div class="grid grid-cols-3">
      <div>
        <h4 class="text-primary uppercase font-bold text-2xl mb-4">Head Office</h4>
        <div class="flex flex-col gap-2">
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <span class="uppercase"><strong>Graha InterDesign</strong></span><br>
              Ruko Woodlake Blok 7 No. 10-15<br>
              Panunggangan, Kecamatan Pinang<br>
              Kota Tangerang 15143<br>
              Banten, Indonesia<br>
              <a class="text-primary underline" href="#" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="mailto:sales@dps-interdesign.com" target="_blank">sales@dps-interdesign.com</a>
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622150233122" target="_blank">(021) 50233122</a>
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'fax', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622150233122" target="_blank">(021) 50233122</a>
            </div>
          </div>
        </div>
      </div>
      <div>
        <h4 class="text-primary uppercase font-bold text-2xl mb-4">Tangerang</h4>
        <div class="flex flex-col gap-2">
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <span class="uppercase"><strong>PT. DASA PRAKARSA SEJATI</strong></span><br>
              Jl. Baetussa’adah No.2<br />
              Kadu Wetan, Curug Bitung<br />
              Tangerang, 15810<br />
              Banten, Indonesia<br />
              <a class="text-primary underline" href="#" target="_blank">Google Map</a>
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'mail', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="mailto:sales@dps-interdesign.com" target="_blank">sales@dps-interdesign.com</a>
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'phone', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622155653468" target="_blank">(021) 55653468</a>
            </div>
          </div>
          <div class="flex space-x-2">
            <div>
              <?php echo dps_icon(array('icon' => 'fax', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            </div>
            <div>
              <a class="hover:text-primary hover:underline" href="tel:+622155656099" target="_blank">(021) 55656099</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
