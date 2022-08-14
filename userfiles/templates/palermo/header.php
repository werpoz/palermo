<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--  Site Meta Data  -->
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">

    <!--  Site Open Graph Meta Data  -->
    <meta property="og:title" content="{content_meta_title}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">

    <!--  Loading CSS and Javascripts  -->
    <?php $theme_css_file = get_option("bootswatch_theme_css_file", "bootswatch_theme"); ?>
    <?php if ($theme_css_file == ''): ?>
        <link rel="stylesheet" id="bootstrap_theme" href="<?php print template_url(); ?>assets/css/default.css" type="text/css" media="all">
    <?php else: ?>
        <link rel="stylesheet" id="bootstrap_theme" href="<?php print $theme_css_file; ?>" type="text/css" media="all">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="<?php print template_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php print template_url(); ?>assets/js/default.js"></script>
    <script>mw.lib.require('font_awesome');</script>
</head>
<body>

<nav class="navbar navbar-default" id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <module type="logo" id="logo_header" default-text="Bootstrap"/>
        </div>

        <module type="menu" name="header_menu" class="collapse navbar-collapse" id="main-nav" template="navbar"/>
    </div>
</nav>
