<?php

require get_template_directory() . '/inc/theme-setup.php';
require get_template_directory() . '/inc/utilities.php';
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/navigation.php';
require get_template_directory() . '/inc/walker-nav.php';

require get_template_directory() . '/inc/components/cards.php';

add_filter('wpseo_breadcrumb_single_link', 'wpseo_remove_breadcrumb_link', 10, 2);
function wpseo_remove_breadcrumb_link($link_output, $link)
{
  $text_to_remove = 'Produk';
  if ($link['text'] == $text_to_remove) {
    $link_output = '';
  }
  return $link_output;
}
