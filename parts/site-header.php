<?php
$header_class = '';
if ($args['header_type']) {
  $header_type = $args['header_type'];
  if ($header_type == 'header-shadow') {
    $header_class = 'shadow-lg';
  }
}
$whatsapp_number = get_field('whatsapp_number', 'option');
$whatsapp_message = get_field('whatsapp_message', 'option');
$whatsapp_link = 'https://wa.me/' . $whatsapp_number;
if ($whatsapp_message) {
  $whatsapp_link .= '?text=' . rawurlencode($whatsapp_message);
}
?>
<header class="headroom bg-white w-full border-b border-solid border-slate-200 z-40 <?php echo $header_class ?>">
  <div class="mx-auto container">
    <div class="header-inner">
      <div class="flex justify-between items-end gap-x-4 xl:gap-x-16">
        <div class="logo">
          <a href="<?php echo site_url() ?>">
            <?php echo dps_icon(array('icon' => 'logo', 'group' => 'custom', 'size' => false, 'class' => '')); ?>
          </a>
        </div>

        <nav class="hidden lg:block">
          <ul class="flex gap-x-10">
            <li class="nav-item">
              <a href="<?php echo site_url() ?>" class="flex gap-x-2 font-medium hover:text-primary">
                <?php echo dps_icon(array('icon' => 'home', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                <span>Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url() ?>/profil" class="flex gap-x-2 font-medium hover:text-primary">
                <?php echo dps_icon(array('icon' => 'building', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                <span>Profil</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <label tabindex="0" class="flex gap-x-2 font-medium hover:text-primary cursor-pointer">
                  <?php echo dps_icon(array('icon' => 'checkbox-dual', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                  <span>Produk</span>
                  <?php echo dps_icon(array('icon' => 'caret-down', 'group' => 'utilities', 'class' => 'h-3 w-3 mt-1.5')); ?>
                </label>
                <div tabindex="0" class="dropdown-content menu py-6 px-4 -ml-6 mt-2 rounded-lg shadow-xl bg-clip-padding border border-gray-100 bg-base-100 min-w-max">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-1">
                      <h4 class="font-semibold uppercase text-gray-500 py-1.5 px-3 mb-2">BRANDS</h4>
                      <?php
                      $args = array(
                        'post_type' => 'page',
                        'post_parent' => 12,
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order'   => 'ASC',
                      );
                      $the_query = new WP_Query($args);
                      if ($the_query->have_posts()) {
                        echo '<ul>';
                        while ($the_query->have_posts()) {
                          $the_query->the_post();
                          echo '<li>';
                          echo '<a class="text-base py-1.5 px-3 rounded-lg font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-200" href="' . get_the_permalink() . '">';
                          echo get_the_title();
                          echo '</a>';
                          echo '</li>';
                        }
                        echo '</ul>';
                      }
                      wp_reset_postdata();
                      ?>
                    </div>
                    <div class="col-span-2">
                      <h4 class="font-semibold uppercase text-gray-500 py-1.5 px-3 mb-2">KATEGORI</h4>
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
                        echo '<ul class="columns-2 gap-6">';
                        while ($the_query->have_posts()) {
                          $the_query->the_post();
                          echo '<li>';
                          echo '<a class="text-base py-1.5 px-3 rounded-lg font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-200" href="' . get_the_permalink() . '">';
                          echo get_the_title();
                          echo '</a>';
                          echo '</li>';
                        }
                        echo '</ul>';
                      }
                      wp_reset_postdata();
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="<?php echo site_url() ?>/lokasi" class="flex gap-x-2 font-medium hover:text-primary">
                <?php echo dps_icon(array('icon' => 'map-pin', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                <span>Lokasi</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url() ?>/artikel" class="flex gap-x-2 font-medium hover:text-primary">
                <?php echo dps_icon(array('icon' => 'news', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
                <span>Artikel</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- <div class="xl:hidden">
          <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
            <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                <g id="icon-shape">
                  <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                </g>
              </g>
            </svg>
          </a>
        </div> -->

        <button id="mobilemenuToggle" class="xl:hidden">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <div id="mobilemenuDrawer" class="">
          <div class="px-6 pt-8 pb-6 overflow-auto h-full">
            <div class="flex items-center gap-3">
              <a href="https://www.tokopedia.com/atappla" target="_blank" class="-mt-1.5 mr-0.5 inline-block">
                <?php echo dps_icon(array('icon' => 'tokopedia', 'group' => 'custom', 'size' => 28, 'class' => 'h-7 w-7')); ?>
              </a>
              <a href="https://www.instagram.com/dps.interdesign" target="_blank" class="inline-block text-slate-500 hover:text-primary">
                <?php echo dps_icon(array('icon' => 'instagram', 'group' => 'custom', 'size' => 28, 'class' => 'h-7 w-7')); ?>
              </a>
              <a href="https://www.facebook.com/dps.interdesign" target="_blank" class="inline-block text-slate-500 hover:text-primary">
                <?php echo dps_icon(array('icon' => 'facebook', 'group' => 'custom', 'size' => 28, 'class' => 'h-7 w-7')); ?>
              </a>
            </div>
            <div class="pt-8">
              <?php
              wp_nav_menu(
                array(
                  'container_id'    => 'mobile-menu',
                  'container_class' => '',
                  'menu_id'         => 'menu-mobile-menu',
                  'menu_class'      => '',
                  'theme_location'  => 'primary',
                  'li_class'        => '',
                  'fallback_cb'     => false,
                  'walker' => new Mobile_Menu_Walker(),
                )
              );
              ?>
            </div>
          </div>
        </div>

      </div>

      <div class="hidden lg:flex space-x-4 justify-center items-center">
        <div class="flex justify-center items-center gap-3">
          <a href="https://www.tokopedia.com/atappla" target="_blank" class="-mt-1.5 mr-0.5 inline-block">
            <?php echo dps_icon(array('icon' => 'tokopedia', 'group' => 'custom', 'size' => 28, 'class' => 'h-7 w-7')); ?>
          </a>
          <a href="https://www.instagram.com/dps.interdesign" target="_blank" class="inline-block text-slate-500 hover:text-primary">
            <?php echo dps_icon(array('icon' => 'instagram', 'group' => 'custom', 'size' => 28, 'class' => 'h-7 w-7')); ?>
          </a>
          <a href="https://www.facebook.com/dps.interdesign" target="_blank" class="inline-block text-slate-500 hover:text-primary">
            <?php echo dps_icon(array('icon' => 'facebook', 'group' => 'custom', 'size' => 28, 'class' => 'h-7 w-7')); ?>
          </a>
        </div>
        <?php
        if (shortcode_exists('gallery')) {
          echo '<div>';
          echo do_shortcode('[language-switcher]');
          echo '</div>';
        }
        ?>
        <div class="ml-12">
          <a href="<?php echo $whatsapp_link ?>" target="_blank" class="inline-flex gap-x-2 px-6 py-3.5 bg-primary text-white font-medium text-base leading-tight uppercase rounded-full shadow-md transition duration-150 ease-in-out items-center hover:shadow-lg hover:brightness-125 focus:brightness-110 focus:shadow-lg focus:ring-0 focus:outline-none active:brightness-100 active:shadow-lg">
            <?php echo dps_icon(array('icon' => 'whatsapp', 'group' => 'utilities', 'size' => 20, 'class' => 'h-5 w-5')); ?>
            Hubungi Kami
          </a>
        </div>
      </div>
      <?php
      // wp_nav_menu(
      //   array(
      //     'container_id'    => 'primary-menu',
      //     'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
      //     'menu_class'      => 'lg:flex lg:-mx-4',
      //     'theme_location'  => 'primary',
      //     'li_class'        => 'lg:mx-4',
      //     'fallback_cb'     => false,
      //   )
      // );
      ?>
    </div>
  </div>
</header>