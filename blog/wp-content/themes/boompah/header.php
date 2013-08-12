<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // CSS ?>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
<?php // Google Fonts ?>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
  <nav class="primary container">
    <a name="top" href="/" class="boompah">
      <img src="http://boompah.com/img/logo-nav.png" alt="Boompah" />
      <span class="screen-reader-text">Boompah</span>
    </a>
    <ul>
      <li><a href="http://boompah.com" title="Home">Home</a></li>
      <li><a href="http://blog.boompah.com" title="Blog">Blog</a></li>
      <li><a href="http://boompah.com/?page=about" title="About">About</a></li>
      <li><a href="http://boompah.com/?page=services" title="Services">Services</a></li>
      <li><a href="http://boompah.com/?page=contact" title="Contact">Contact</a></li>
    </ul>
    <a href="#footer-menu" class="mobile-nav"><i class="icon-align-justify"></i><span class="screen-reader-text">menu</span></a>
  </nav>
</header>
<div id="page" class="hfeed site">
  <div id="main" class="wrapper">