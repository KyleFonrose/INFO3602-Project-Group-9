<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitness_Park
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'fitness-park'); ?></a>

    <header id="masthead" class="site-header">
        <nav class="navbar navbar-default main-navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                    <button type="button" class="menu-nav-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="header-logo site-branding">
                        <?php the_custom_logo(); ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                        <?php
                        $fitness_park_description = get_bloginfo('description', 'display');
                        if ($fitness_park_description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $fitness_park_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>

                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                   <ul class= "nav navbar-nav float-navbar">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                        <li><a href="<?php echo get_page_link( get_page_by_title("Diet Plans")->ID ); ?>">DIET PLANS</a></li>
                        <li><a href="<?php echo get_page_link( get_page_by_title("Articles")->ID ); ?>">ARTICLES</a></li>
                        <li><a href="<?php echo get_page_link( get_page_by_title("Membership")->ID ); ?>">MEMBERSHIP</a></li>
                        <li><a href="<?php echo get_page_link( get_page_by_title("Workouts")->ID ); ?>">WORKOUTS</a></li>
                        <li><a href="<?php echo get_page_link( get_page_by_title("About Us")->ID ); ?>">About Us</a></li>
                    </ul>

                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


    </header><!-- #masthead -->

    <!-- breadcrumbs -->

    <?php
    if (!is_front_page() || !is_home()) {
        /**
         * @hook fitness_park_breadcrumbs.
         *
         * @hooked fitness_park_breadcrumbs.
         *
         */
        do_action('fitness_park_breadcrumbs');
    }
    ?>

    <div id="content" class="site-content">

