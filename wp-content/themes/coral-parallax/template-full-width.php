<?php
/**
 * Template Name: Full width page
 * The template for displaying full width pages.
 *
 * @package coral-parallax
 */

get_header(); ?>

	<div id="primary" class="content-area grid-100 tablet-grid-100 mobile-grid-100">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
