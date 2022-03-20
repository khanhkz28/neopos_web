<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo get_bloginfo('name'); ?></title>
  
  <!-- Favicons -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
  <?php wp_head() ?>
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/Group.png" alt="">
        </a>
        <nav id="navbar" class="navbar">
            <?php wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container'       => false, 
            ) ); ?>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->