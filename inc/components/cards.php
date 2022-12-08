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

  echo '<a href="' . $link . '" title="' . $title . '" class="shadow-md bg-white py-4 px-4 rounded-lg w-full h-full flex items-center justify-center transition duration-300 hover:shadow-lg lg:shadow-lg lg:py-6 lg:px-8 lg:rounded-2xl lg:hover:shadow-xl"><img src="' . $logo . '" alt="' . $alt . '" class="max-h-12 lg:max-h-full"></a>';
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

  echo '<a href="' . $link . '" title="' . $title . '" class="category-card block relative overflow-hidden shadow-md rounded-lg transition duration-300 hover:shadow-xl hover:brightness-125 lg:shadow-lg lg:rounded-2xl lg:hover:shadow-xl">
    <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg">
    <img src="' . $image . '" alt="' . $alt . '" class="category-card--image h-full w-full object-cover" />
    </div>
    <div class="absolute bottom-3 left-3 right-4 lg:left-4 lg:right-4 lg:bottom-4 z-10">
    <h3 class="text-white font-semibold text-base leading-tight lg:text-lg">' . $title . '</h3>
    </div>
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
  if ($link) {
    echo '<a href="' . $link . '" class="block product-card rounded-xl lg:rounded-3xl bg-white h-full max-w-[320px] mx-auto shadow hover:shadow-lg hover:-translate-y-1 transition duration-300">';
  } else {
    echo '<div class="block product-card rounded-xl lg:rounded-3xl bg-white h-full max-w-[320px] mx-auto shadow">';
  }
  echo '<div class="relative aspect-w-16 aspect-h-9 overflow-hidden rounded-t-xl lg:rounded-t-3xl bg-slate-50">';
  if ($image) {
    echo '<img src="' . $image . '" alt="' . $title . '" class="product-card--image w-full h-full object-cover">';
  }
  echo '</div>';
  echo '<div class="p-4">';
  echo '<h3 class="font-semibold text-base text-center leading-tight">' . $title . '</h3>';
  echo '</div>';

  if ($link) {
    echo '</a>';
  } else {
    echo '</div>';
  }
}
