<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
 <title><?php bloginfo('name'); ?> <?php wp_title("",true); ?></title>


<!-- METAS -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">

<?php wp_head(); ?>
    
<!-- FAVICONS -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">

<!-- RSS -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/rodrigoteixeira" />

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
    				<h1 id="logo"><a href="/blog/" title="<?php bloginfo('name');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/picture.jpg" alt="Rodrigo Teixeira" /></a></h1>
    				<p><span><a href="/">Drigo Teixeira</a></span> é UI Designer &amp; Entusiasta de AI</p>
    			</div>
    		</header>
