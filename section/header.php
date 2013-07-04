<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <?php // Basic Page Needs ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="Ryan Bollenbach">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <?php // CSS ?>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/stylesheets/styles.css">
  
  <?php // Google Fonts ?>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
  
  <?php // HTML5 shiv ?>
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php echo $bodyclass; ?>">
  <?php include 'section/chrome-frame.php'; ?>
  <?php include 'section/navigation.php' ?>