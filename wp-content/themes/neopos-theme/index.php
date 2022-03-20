<?php get_header(); ?>


<!-- <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">
         
        </div>
      </section>
      <!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-8 entries">
                <div id="primary"  class="new-news">
                <?php if ( have_posts() ) : ?>
                  <?php
                  $i =1; 
                  while ( have_posts() ) : the_post(); ?>
                  <?php
                  if ($i == 1)
                  {
                    get_template_part( 'content' , 'blog-one' );
                  }
                  $i++;
                  ?>
                  <?php endwhile; ?>
                  <?php /* Start the Loop */ ?>
                  <div class="row">
                  <?php 
                  $count =1; 
                  while ( have_posts() ) : the_post(); ?>

                    <?php
                      /* Include the Post-Format-specific template for the content.
                      * If you want to override this in a child theme, then include a file
                      * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                      */
                      if ($count > 1)
                      {
                        ?>
                        <?php
                        get_template_part( 'content' , 'blog' );
                        ?>
                        <?php
                      }
                      $count++;
                    ?>

                  <?php endwhile; ?>

                  <?php the_posts_navigation(); ?>

                  <?php else : ?>

                  <?php //get_template_part( 'content', 'none' ); ?>

                  <?php endif; ?>
                  </div>
                </div>
            </div>
            <!-- End blog entries list -->

            <div class="col-lg-4">
              <div class="sidebar">
                  <?php get_sidebar('left'); ?>
              </div>
              <!-- End sidebar -->
            </div>
            <!-- End blog sidebar -->
          </div>
        </div>
      </section>
      <!-- End Blog Section -->
      
</main> 
<?php get_footer(); ?>
