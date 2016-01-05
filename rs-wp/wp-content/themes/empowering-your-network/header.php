<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rebasoft
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-Recruiting" content="http://rebasoft.net/job-opportunities/">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="description" content="">
    <meta name="author" content="Rebasoft 2016">
    <title><?php bloginfo('name'); ?> - <?php bloginfo( 'description' ); ?> - 2016</title>
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'empowering-your-network'); ?></a>

    <nav id="topNav" class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-main-menu" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url')?>">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/rebasoft-logo.svg" class="svg" height="34px">
                </a>
            </div>


            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_id' => 'navbar',
                    'container-class' => 'collapse navbar-collapse collapse in',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'walker' => new wp_bootstrap_navwalker()
                ));
            ?>


            <!-- <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">downloads <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Thread Auditor</a></li>
                            <li class="active"><a href="#">Application Auditor</a></li>
                            <li><a href="#">Auditor Core</a></li>
                            <li><a href="#">Rebasoft Management Console</a></li>
                        </ul>
                    </li>
                    <li><a href="#">support</a></li>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">corporate <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Our Customers</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Leadership Team</a></li>
                        </ul>
                    </li>
                    <li><a href="#">contact us </a></li>
                </ul>
            </div> -->
        </div>
    </nav>
