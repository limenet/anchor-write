<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
    
    <meta name="description" content="<?php echo site_description(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo theme_url('/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Pacifico&subset=latin,cyrillic">
    
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    
    <link rel="icon" type="image/png" href="<?php echo theme_url('/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo theme_url('/favicon-96x96.png'); ?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo theme_url('/favicon-16x16.png'); ?>" sizes="16x16">
    
    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="blog">
    <meta property="og:url" content="<?php echo e(current_url()); ?>">
    <meta property="og:image" content="<?php echo theme_url('/favicon-96x96.png'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">
    
    <?php if(customised()): ?>
        <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    	<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
	<?php endif; ?>
   </head>
   <body>
        <header id="header">
            <h1 class="site-logo"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
            <h2 class="small-title tagline"><?php echo site_description(); ?></h2>
        </header>
