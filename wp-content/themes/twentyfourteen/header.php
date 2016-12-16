<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<!-- Bootstrap -->
    <link href="/wp-content/themes/twentyfourteen/css/bootstrap.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="/wp-content/themes/twentyfourteen/css/magnific-popup.css">
    <!-- fonts css -->
    <link rel="stylesheet" href="/wp-content/themes/twentyfourteen/css/fonts.css">
</head>

<body <?php body_class(); ?>>
<!-- header -->
<header class="header" id="header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 header__itemInner">
            	<?php if (get_header_image()) : ?>
	                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__link">
	                    <img src="<?php header_image(); ?>" alt="logo" class="header__img">
	                </a>
            	<?php endif; 
            	$phone = get_post_meta(7, 'phone_number', true);
            	?>
        
                <div class="header__phoneOrder">
                    <a href="tel:<?php echo $phone; ?>" class="header__phone"><?php echo $phone; ?></a>
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                </div>
                
                <nav class="header__nav">
                    <ul class="header__navList">
						<?
                        $menus = wp_get_nav_menus(array('hide_empty' => false, 'orderby' => 'name'));
                        $menu_list = wp_get_nav_menu_items($menus[1]);
                        for ($i = 0; $i < count($menu_list); $i++) {
                            ?>
                            <li class="header__navItem">
                                <a href="<?= $menu_list[$i]->url ?>" class="header__navLink"
                                   id=""><?= $menu_list[$i]->title ?></a>
                            </li>
                            <?
                        }
                        ?>
                       <!--  <li class="header__navItem">
                            <a href="http://dmband.ru" class="header__navLink active">Главная</a>
                        </li>
                        <li class="header__navItem">
                            <a href="#" class="header__navLink" id="photoNavLink">Фото</a>
                        </li>
                        <li class="header__navItem">
                            <a href="#" class="header__navLink">Видео</a>
                        </li>
                        <li class="header__navItem">
                            <a href="http://dmband.ru/promo.html" class="header__navLink">Промо</a>
                        </li>
                        <li class="header__navItem">
                            <a href="http://dmband.ru/repertoire.html" class="header__navLink" id="repertoirNavLink">Репертуар</a>
                        </li>
                        <li class="header__navItem">
                            <a href="#" class="header__navLink" id="riderNavLink">Райдер</a>
                        </li>
                        <li class="header__navItem">
                            <a href="#" class="header__navLink" id="contactsNavLink">Контакты</a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header End -->
<div class="main">