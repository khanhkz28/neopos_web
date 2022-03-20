<?php

/**
 * The template for displaying all single posts.
 *
 * @package AccessPress Root
 */

get_header();
?>


<main id="main">

	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">
			<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php 
		    $show_meta = of_get_option('post_metadata',1);
		    if($show_meta) { ?>
			<div class="entry-meta">
			<?php //accesspress_root_posted_on(); ?>
			</div>
			<?php } ?>
		</header><!-- .entry-header -->
		<?php $show_bd = of_get_option('enable_breadcrumb',1);
		if($show_bd){
		 accesspress_breadcrumbs(); 
		}?>
		</div>
	</section><!-- End Breadcrumbs -->

	<!-- ======= Blog Single Section ======= -->
	<section id="blog" class="blog">
		<div class="container" data-aos="fade-up">

			<div class="row">

				<div class="col-lg-8 entries">

					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part('content', 'single'); ?>

						<?php the_post_navigation(); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. 
					?>


				</div><!-- End blog entries list -->

				<div class="col-lg-4">

					<div class="sidebar">

					<?php get_sidebar('left'); ?>
					</div><!-- End sidebar -->

				</div><!-- End blog sidebar -->

			</div>

		</div>
	</section><!-- End Blog Single Section -->

</main><!-- End #main -->

<?php get_footer(); ?>