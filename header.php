<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>
<!-- Header-->
<header>
    <!-- Menu top -->
    <nav class="blemil-nav-top">
        <div class="nav-wrapper container">
            <a class="brand-logo">
                <img alt="" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/header/logo.png" alt="Logo"
                     class="responsive-img"/>
            </a>
            <a href="#" data-activates="side-mobile" class="button-collapse right"><i
                    class="material-icons">menu</i></a>
            <!-- menu for large screens -->
            <div class="large-screens hide-on-med-and-down">
                <ul class="right">
                    <li>
                        <a href="#modal_search" class="modal-trigger">
                            <i class="material-icons">search</i>
                        </a>
                    </li>
                </ul>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu', // tên location cần hiển thị
                    'container' => 'ul', // thẻ container của menu
                    'container_class' => '', //class của container
                    'menu_class' => 'right', // class của menu bên trong
                    'depth' => 2,
                ));
                ?>
            </div><!-- End menu large screens -->
            <!-- menu for mobile -->
            <div class="side-nav small-screens" id="side-mobile">
                <div class="search">
                    <a href="#modal_search" class="modal-trigger">
                        <i class="material-icons">search</i>
                    </a>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu', // tên location cần hiển thị
                    'container' => 'ul', // thẻ container của menu
                    'container_class' => '', //class của container
                    'menu_class' => 'center-align', // class của menu bên trong
                    'depth' => 2,
                ));
                ?>
            </div>
        </div>
    </nav><!-- End menu top -->
    <!--hotline-->
    <div class="container">
        <div class="hotline right hide-on-med-and-down">
            <div class="content">
                <i class="material-icons">phone</i>

                <p class="title">Chuyên gia tư vấn</p>
                <a href="tel:1800.6698" class="mobile">1800 6698</a>
            </div>
        </div>
    </div><!--endhotline-->

    <!-- Banner -->
    <div class="banner">
        <div class="milk">
            <img alt="" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/header/banner-background.png"
                 class="responsive-img"/>
        </div>
        <!-- Logo-->
        <div class="logo hide-on-med-and-down">
            <img alt="" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/header/logo.png" class="responsive-img"/>
            <img alt="" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/header/logo-plus.png" class="plus"/>
        </div><!-- End logo-->
        <div class="content">
            <p class="billy-bold-text white-text hide-on-med-and-down">
                Dòng sữa Bio Premium - Sữa công thức sinh học cao cấp chất lượng vượt trội, được nhập khẩu nguyên hộp từ
                châu Âu
            </p>

            <p class="billy-bold-text white-text hide-on-large-only">
                Dòng sữa Bio Premium - Sữa công thức sinh học cao cấp chất lượng vượt trội, được nhập khẩu nguyên hộp từ
                châu Âu
            </p>
        </div>
        <!--Chickend-->
        <div class="products hide-on-med-and-down">
            <img alt="" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/header/milk-bottle.png"
                 class="bottle animated"/>
            <img alt="" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/header/chicken.png"
                 class="chicken animated swing-bottom infinite infinite-delay-30"/>
        </div><!--End Chickend-->
    </div><!--End banner -->
    <!-- Modal Seach -->
    <div class="modal bottom-sheet" id="modal_search">
        <div class="modal-content">
            <?php get_search_form(); ?>
        </div>
    </div><!-- End modal search -->
</header><!--End header-->

