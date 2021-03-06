<?php
/**
 * The header
 * This is the template that displays all the <head> section and everything up to main
 */

 ?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">

    <head>
        <meta charset="<?php bloginfo('charset');?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Sunshine - Responsive vCard Template" />
        <meta name="keywords"
            content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
        <meta name="author" content="lmtheme" />
        <!-- <link rel="shortcut icon" href="favicon.ico"> -->

        <?php wp_head();?>
    </head>

    <body <?php body_class();?>>
        <!-- Loading animation -->
        <div class="preloader">
            <div class="preloader-animation">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- /Loading animation -->

        <div id="page" class="page">
            <!-- Header -->
            <header id="site_header" class="header mobile-menu-hide">
                <div class="my-photo">
                    <?php 
                     $custom_logo_id = get_theme_mod( 'custom_logo' );
                     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>

                    <a href="<?php echo home_url();?>"><img src=" <?php echo $image[0] ;?>" alt="image"></a>

                    <div class="mask"></div>
                </div>

                <div class="site-title-block">
                    <?php 
                     $name=get_field('My Name');
                     $mypost=get_field('My Post');?>

                    <h1 class="site-title"><?php echo $name;?></h1>

                    <p class="site-description"><?php echo $mypost;?></p>

                </div>

                <!-- Navigation & Social buttons -->


                <?php 
                    wp_nav_menu(array(
                        'theme_location'=>'primary-one',
                        'container'=>'',
                        'container_class'=>'site-nav',
                        'menu_class'=>'site-main-menu',
                        'menu_id'=>'nav',
                        'link_class'   => 'pt-trigger'

                    ));
                ?>
                <div class="site-nav">
                    <!-- Social buttons -->
                    <?php
                        $social_icon=get_field("social_media","option");
                        ?>
                    <ul class="social-links">
                        <?php
                        echo $social_icon;
                        ?>

                    </ul>
                    <!-- /Social buttons -->
                </div>
                <!-- Navigation & Social buttons -->
            </header>
            <!-- /Header -->

            <!-- Mobile Header -->
            <div class="mobile-header mobile-visible">
                <div class="mobile-logo-container">
                    <div class="mobile-site-title"><?php echo $name;?></div>
                </div>
                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <!-- /Mobile Header -->
            <div id="main" class="site-main">
                <!-- Page changer wrapper -->
                <div class="pt-wrapper">
                    <!-- Subpages -->
                    <div class="subpages">