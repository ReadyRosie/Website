<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	<?php if ( is_user_logged_in() ) {  ?>
	jQuery('#resources').fancybox({
		'overlayColor'		: '#000',
		'overlayOpacity'	: 0.8,
		'onComplete' : function() {
			jQuery('#fancybox-outer').css({'top':'80px'});
		}
	});
	<?php } else { ?>
		jQuery('#resources').attr('href','#login');
		jQuery('#resources').fancybox({
			'overlayColor'		: '#000',
			'overlayOpacity'	: 0.8
		});
	<?php } ?>
	if (!jQuery('#rfancybox').length>0) {jQuery('#divresources').hide();}
});
</script>
		<div id="primary">
			<div id="content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>

					<nav style="display: none" id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'video' ); ?>
					<div style="color: #999999; padding-top: 15px; padding-left: 130px; padding-bottom: 10px; font-size: 24px; background-color: rgba(0,0,0,.4)"><?php single_post_title( '', true ); ?></div> <div style='clear: both;' ></div>
					<div style="float:left; width: 107px; height: 52px; background-color: rgba(0,0,0,.4)"></div>
					
					<?php if(in_category('Expert') ) : ?>
					
					
					<?php else : ?>
					
					<div id="divresources" style="position: absolute; left: 585px; top: 474px; padding: 10px; width: 289px; height: 12px; background-color: #41a4c4;"><a style="color: black" id="resources" href="#rfancybox">Resources to support today's content</a></div>
					
					<?php endif; ?>
					
					
					<div style="position: absolute;right: 0px;"><?php get_search_form(); ?></div>
					
					<?php if ( is_active_sidebar( 'postwidgets' ) ) : ?>
						<div id="postwidgets" class="widget-area">
							<?php dynamic_sidebar( 'postwidgets' ); ?>
						</div><!-- #second .widget-area -->
					<?php endif; ?>
					<?php //comments_template( '', true ); ?>
					
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		

<?php get_footer(); ?>