<?php
/*
 * Template Name: Home Page
 * Description: Home Page Template
 */
get_header(); ?>

<main id="main">
  <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; ?>
</main><!-- End #main -->
<?php get_footer(); ?>