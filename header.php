<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-slate-900 relative'); ?>>

  <?php do_action('dps_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col">

    <?php do_action('dps_header'); ?>

    <?php get_template_part('parts/site', 'header'); ?>

    <div id="content" class="site-content flex-grow">

      <?php do_action('dps_content_start'); ?>

      <main>