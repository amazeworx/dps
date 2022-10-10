<?php
function brand_card($atts = array())
{
  $atts = shortcode_atts(array(
    'link'  => '#',
    'logo' => '',
    'alt' => '',
    'title' => ''
  ), $atts);

  $link = $atts['link'];
  $logo = $atts['logo'];
  $alt = $atts['alt'];
  $title = $atts['title'];

  echo '<a href="' . $link . '" title="' . $title . '" class="shadow-lg bg-white py-6 px-8 rounded-2xl w-full h-full flex items-center justify-center transition duration-300 hover:shadow-xl"><img src="' . $logo . '" alt="' . $alt . '" class=""></a>';
}

function category_card($atts = array())
{
  $atts = shortcode_atts(array(
    'link'  => '#',
    'image' => '',
    'alt' => '',
    'title' => ''
  ), $atts);

  $link = $atts['link'];
  $image = $atts['image'];
  $alt = $atts['alt'];
  $title = $atts['title'];

  echo '<a href="' . $link . '" title="' . $title . '" class="category-card relative overflow-hidden shadow-lg py-6 px-8 rounded-2xl w-full h-full aspect-square flex items-center justify-center transition duration-300 hover:shadow-xl hover:brightness-125">
    <img src="' . $image . '" alt="' . $alt . '" class="category-card--image aspect-square h-full w-full object-cover absolute inset-0" />
    <h3 class="absolute bottom-4 left-4 right-4 text-white z-10 font-semibold text-lg">' . $title . '</h3>
    <div class="absolute inset-0 bg-gradient-to-t from-black/75 z-0"></div>
  </a>';
}

function product_card($atts = array())
{
  $atts = shortcode_atts(array(
    'link'  => '#',
    'image' => '',
    'title' => ''
  ), $atts);

  $link = $atts['link'];
  $image = $atts['image'];
  $title = $atts['title'];

  echo '<div class="block product-card">
    <div class="relative aspect-video overflow-hidden rounded-3xl bg-slate-50">';
  if ($image) {
    echo '<img src="' . $image . '" alt="' . $title . '" class="product-card--image w-full h-full aspect-video object-cover">';
  }
  echo '</div>
    <h3 class="font-semibold text-lg mt-3 leading-tight">' . $title . '</h3>
  </div>';
}
