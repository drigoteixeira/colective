<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- METAS -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>
    
<!-- GOOGLE+ -->
<link rel="author" href="https://plus.google.com/u/0/110545419521358863582" />

<!-- FAVICONS -->
<link rel="icon" href="favicon.ico">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">

<!-- RSS -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<!-- SCRIPTS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

<!-- RESPOND -->
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->

    
</head>
<body <?php body_class(); ?>>
    
    <div class="page">
    	
    	<div class="container-12">
    		<header id="header">
    			<div class="grid-12">
    				<h1 id="logo"><a href="/blog/" title="<?php bloginfo('name');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/picture.jpg" alt="Avatar de Rodrigo Teixeira" /></a></h1>
    				<p><span>Drigo Teixeira</span> é UI Designer &amp; Entusiasta de AI</p>
    			</div>
    		</header>
