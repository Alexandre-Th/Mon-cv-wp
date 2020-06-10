<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charsert'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('public/css/style.css'); ?>"/>
  <?php wp_head(); ?>
</head>

<body class="body">
  <?php if (have_posts()): while (have_posts()): the_post(); 
    
    get_template_part('template-parts/header-content'); 
    
  endwhile; endif; 