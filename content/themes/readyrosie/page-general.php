<?php
/**
 * Template Name: General Page Template
 * Description: A General Page
 *
 */
 
get_header(); ?>

		<div id="primary">
			<div id="content content-general" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page-general' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>