<?php
/**
 * Template Name: Generic Subscribe Template
 *
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<?php $post_obj = $wp_query->get_queried_object();
					$post_slug = $post_obj->post_name;
					?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'subscribe' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>