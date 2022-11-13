<?php
class Mobile_Menu_Walker extends Walker_Nav_Menu
{
  function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
  {
    $output .= "<li class='" .  implode(" ", $item->classes) . "'>";

    if ($args->walker->has_children) {
      $output .= '<div class="flex justify-between">';
    }

    if ($item->url && $item->url != '#') {
      $output .= '<a href="' . $item->url . '">';
    } else {
      $output .= '<span>';
    }

    $output .= $item->title;

    if ($item->url && $item->url != '#') {
      $output .= '</a>';
    } else {
      $output .= '</span>';
    }

    if ($args->walker->has_children) {
      $output .= '<button class="submenu-toggle inline-block w-6 h-6 bg-slate-100 rounded text-slate-500 open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></button>';
      $output .= '</div>';
    }
  }
}
