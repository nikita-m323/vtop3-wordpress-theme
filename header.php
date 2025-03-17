<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vtop3-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<div id="preloader">
    <div class="wrapper">
        <div class="cssload-loader"></div>
    </div>
</div>

<!-- ***** Top Search Area Start ***** -->
<div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Close Button -->
                    <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i>
                    </button>
                    <!-- Form -->
                    <form action="index.html" method="post">
                        <input type="search" name="top-search-bar" class="form-control"
                               placeholder="Search and hit enter...">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Top Search Area End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="uzaNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./index.html">- Home</a></li>
                                    <li><a href="./about.html">- About</a></li>
                                    <li><a href="./services.html">- Services</a></li>
                                    <li><a href="./portfolio.html">- Portfolio</a></li>
                                    <li><a href="./portfolio-single.html">- Single Portfolio</a></li>
                                    <li><a href="./blog.html">- Blog</a></li>
                                    <li><a href="./single-blog.html">- Blog Details</a></li>
                                    <li><a href="./contact.html">- Contact</a></li>
                                    <li><a href="#">- Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">- Dropdown Item</a></li>
                                            <li><a href="#">- Dropdown Item</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Even Dropdown</a></li>
                                                    <li><a href="#">- Even Dropdown</a></li>
                                                    <li><a href="#">- Even Dropdown</a></li>
                                                    <li><a href="#">- Even Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">- Dropdown Item</a></li>
                                            <li><a href="#">- Dropdown Item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="current-item"><a href="./portfolio.html">Portfolio</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="./blog.html">- Blog</a></li>
                                    <li><a href="./single-blog.html">- Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>

                        <!-- Get A Quote -->
                        <div class="get-a-quote ml-4 mr-3">
                            <a href="#" class="btn uza-btn">Get A Quote</a>
                        </div>

                        <!-- Login / Register -->
                        <div class="login-register-btn mx-3">
                            <a href="#">Login <span>/ Register</span></a>
                        </div>

                        <!-- Search Icon -->
                        <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                      rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                     rel="home"><?php bloginfo('name'); ?></a></p>
        <?php
        endif;
        $vtop3_theme_description = get_bloginfo('description', 'display');
        if ($vtop3_theme_description || is_customize_preview()) :
            ?>
            <p class="site-description"><?php echo $vtop3_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html_e('Primary Menu', 'vtop3-theme'); ?></button>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->
