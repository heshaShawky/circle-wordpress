<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package circle_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--Import Google Fonts-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

<!--Import Bootstrap.css-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css"  media="screen,projection"/>

<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.css">

<!-- Default Theme -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.css">

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/magnific-popup.css">

<!-- Font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />


<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'circle-theme' ); ?></a>
    <!--===============================================================
        Start the Header Section
    =================================================================-->
    <header class="header">
        <!--===============================================================
            Start the Topnavigation
        =================================================================-->
        <nav class="topnav">
            <div class="container clearfix">
                <div class="col-sm-8">
                    <a href="#"><img class="logo img-responsive" src="<?php bloginfo('stylesheet_directory')?>/assets/images/logo.png" alt="logo" /></a>
                </div>
            </div>
        </nav>



        <!--===============================================================
            Start the Navigation
        =================================================================-->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_class' => 'navbar-collapse collapse',
                    'menu_class' => 'nav navbar-nav navbar-left'
                    ));

                ?>

            </div><!-- /.container-fluid -->
        </nav>
    </header> <!-- /.hero -->
