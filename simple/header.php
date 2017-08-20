<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <title> <?php bloginfo('name'); ?> </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
      </div>
    </header>
    <nav class="main-nav">
      <div class="container">
        <?php $args = array(
          'theme_location' => 'primary'
        );
        wp_nav_menu(args); ?>
      </div>
    </nav>
