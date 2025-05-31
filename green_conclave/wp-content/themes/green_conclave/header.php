<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package green_conclave
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Green Conclave 25</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/GREEN CONCLAVE - SHUNYA.png"
        type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Stylesheet Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Green_Conclave_HR.png" alt="Button Image"
                        class="animated slideInDown">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">


				<?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'navbar-nav ms-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'depth' => 3,
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    ?>


                    <!-- <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link text-dark fw-bold active">HOME</a>
                        <a href="about.html" class="nav-item nav-link text-dark fw-bold">ABOUT</a>
                        <a href="awards.html" class="nav-item nav-link text-dark fw-bold">AWARDS</a>
                        <a href="sponsors.html" class="nav-item nav-link text-dark fw-bold">SPONSORS</a>
                        <div class="dropdown nav-item">
                            <button class="dropdown-toggle border-0 bg-transparent pe-4 rounded text-dark fw-bold px-0"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                PAST EVENTS
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg rounded border-0 mt-2"
                                aria-labelledby="dropdownMenuButton" style="background-color: #f8f9fa;">
                                <a class="dropdown-item py-3 px-4 text-dark" href="event1.html">
                                    <i class="fas fa-seedling me-2"></i>Green Conclave 2024 (GC24)
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="event2.html">
                                    <i class="fas fa-recycle me-2"></i>Green Conclave 2023 (GC23)
                                </a>
                            </div>
                        </div>

                        <a href="contact.html" class="nav-item nav-link text-dark fw-bold">CONTACT US</a>

                    </div> -->
                    <button type="button" class="btn text-dark p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal" style="color: #9CBC41;">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="clearfix"></div>