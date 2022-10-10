<?php

/**
 * Enqueue theme assets.
 */
function dps_enqueue_scripts()
{
  $theme = wp_get_theme();

  //wp_enqueue_style('work-sans', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', array());
  //wp_enqueue_style('roboto-flex', 'https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800&display=swap', array());
  wp_enqueue_style('dps', dps_asset('css/app.css'), array(), $theme->get('Version'));
  wp_enqueue_script('dps', dps_asset('js/app.js'), array(), $theme->get('Version'));
  wp_enqueue_script('tw-elements', 'https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js', array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'dps_enqueue_scripts');
