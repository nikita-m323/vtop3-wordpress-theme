<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Uza - Creative Agency HTML5 Template</title>

    <!-- Favicon -->


    <!-- Core Stylesheet -->



    <?php wp_head(); ?>
</head>

<body>
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
                    <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <!-- Form -->
                    <form action="index.html" method="post">
                        <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
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

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Portfolio</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="./img/core-img/curve-5.png" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ****** Gallery Area Start ****** -->
<section class="uza-portfolio-area section-padding-80">

    <!-- Portfolio Menu -->
    <div class="portfolio-menu text-center mb-80">
        <button class="btn active" data-filter="*">All Portfolio</button>
        <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
        <button class="btn" data-filter=".market-analytics">Market Analytics</button>
        <button class="btn" data-filter=".marketing-social">Marketing Social</button>
    </div>

    <div class="container-fluid">
        <div class="row uza-portfolio">

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/3.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>UX/UI Design</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/9.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>Market Analytics</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/5.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>UX/UI Design</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/6.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>Market Analytics</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/10.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>UX/UI Design</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/11.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>Market Analytics</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/12.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>Marketing Social</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marketing-social">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/4.jpg" alt="">
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h4>Marketing Social</h4>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est</p>
                    </div>
                    <!-- View More -->
                    <div class="view-more-btn">
                        <a href="#"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12 text-center mt-30">
                <a href="#" class="btn uza-btn btn-3">Load More</a>
            </div>
        </div>
    </div>
</section>
<!-- ****** Gallery Area End ****** -->

<!-- ***** Newsletter Area Start ***** -->
<section class="uza-newsletter-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content mb-80">
                    <h2>Subscribe to our Newsletter</h2>
                    <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form mb-80">
                    <form action="#" method="post">
                        <input type="email" name="nl-email" value="" placeholder="Your Email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Border Bottom -->
        <div class="border-line"></div>
    </div>
</section>
<!-- ***** Newsletter Area End ***** -->

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-80-0">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Contact Us</h4>

                    <!-- Footer Content -->
                    <div class="footer-content mb-15">
                        <h3>(+65) 1234 5678</h3>
                        <p>40 Baria Sreet 13/2 NY City, US <br> hello.colorlib@gmail.com</p>
                    </div>
                    <p class="mb-0">Mon - Fri: 9:00 - 19:00 <br>
                        Closed on Weekends</p>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Quick Link</h4>

                    <!-- Nav -->
                    <nav>
                        <ul class="our-link">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Forum Registeration</a></li>
                            <li><a href="#">Forum Sign In</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Resources</h4>

                    <!-- Nav -->
                    <nav>
                        <ul class="our-link">
                            <li><a href="#">Customer Support</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Media &amp; Press</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">About Us</h4>
                    <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet.</p>

                    <!-- Copywrite Text -->
                    <div class="copywrite-text mb-30">
                        <p>&copy; Copyright 2018 <a href="#">Colorlib</a>.</p>
                    </div>

                    <!-- Social Info -->
                    <div class="footer-social-info">
                        <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-bottom: 30px;">

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>

    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<?php wp_footer(); ?>

</body>

</html>