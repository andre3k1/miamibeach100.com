<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

  <link rel="shortcut icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/x-icon">
  <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-miamibeach.ico" /><![endif]-->

  <!-- Facebook -->
  <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
  <meta property="og:image" content="img/fbthumb-new.png" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
  <meta property="og:description" content="<?php echo get_bloginfo ( 'description' );  ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary">
  <meta property="twitter:url" content="<?php echo get_site_url(); ?>">
  <meta property="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta property="twitter:description" content="<?php echo get_bloginfo ( 'description' );  ?>">
  <meta property="twitter:image" content="img/fbthumb.png">

  <!-- Google+ -->
  <meta itemprop="name" content="<?php bloginfo('name'); ?>">
  <meta itemprop="description" content="<?php echo get_bloginfo ( 'description' );  ?>">
  <meta itemprop="image" content="img/fbthumb.png">

  <!--[if !IE]><!--><script>  
  if (/*@cc_on!@*/false) {  
      document.documentElement.className+=' ie10';  
  }  
  </script><!--<![endif]-->  

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <!--[if lte IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->