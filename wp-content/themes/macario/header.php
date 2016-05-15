<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title><?php if( is_home() || is_front_page() ){ bloginfo('name'); }else{ wp_title(); };?></title>
    <link rel="icon" href=""/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,700italic,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Meta SEO -->
    <!-- Meta Facebook -->
    <?php etiquetas_og();?>
    <?php
        require_once('css/style.php');
        require_once('css/responsive.php');
    ?>
    <!-- One Full Page Plugin -->
    <link rel="stylesheet" type="text/css" href="<?php plantilla(); ?>/css/jquery.fullPage.css" />
    <!-- One Full Page Plugin -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php plantilla(); ?>/js/jquery.fullPage.js"></script>
    <?php require_once('js/js.php');?>
    <!-- Comienza WP Head -->
    <?php wp_head();?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal");?>>
<a href="http://casamacario.mx" class="logo-macario">
    <img src="<?php plantilla(); ?>/images/logo1.png" class="logo1"/>
    <img src="<?php plantilla(); ?>/images/logo2.png" class="logo2"/>
</a>
<div class="boton-menu">
    <span class="spmenu1"></span>
    <span class="spmenu2"></span>
    <span class="spmenu3"></span>
</div>
<div class="menu-completo blanco">
    <div class="links-menu color_gris bolder">
        <a href="#" class="pointer titlesp monse link-menu lm1">
            Si, somos Macario
        </a>
        <a href="#" class="pointer titlesp monse link-menu lm2">
            Lo que hacemos
        </a>
        <a href="#" class="pointer titlesp monse link-menu lm3">
            Escribenos
        </a>
    </div>
</div>
