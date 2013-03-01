<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is page is not available.', 'twentyeleven' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><a href="http://readyrosie.com/login/">Login</a> to access the curriculum and <a href="http://readyrosie.com/ready-rosie-intro-video/">watch the videos</a>.</p>
					<br>
					<p>Not a member? Check with your local School District to see if they have purchased access for you.</p>


				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>