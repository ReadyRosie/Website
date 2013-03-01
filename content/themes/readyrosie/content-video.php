<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header style="display: none" class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	

	<div class="entry-content">
		<?php if($_GET['svr'] == "true"){?>
		
		<p><?php echo do_shortcode('[vimeo video_id="'.get_post_meta($post->ID, 'wpcf-videoid',true).'" width="400" height="300" title="Yes" byline="Yes" portrait="Yes" autoplay="No" loop="No" color="00adef"]'); ?></p>
		
		<?php }else{ ?>
		
		<p><?php echo do_shortcode('[protected][vimeo video_id="'.get_post_meta($post->ID, 'wpcf-videoid',true).'" width="400" height="300" title="Yes" byline="Yes" portrait="Yes" autoplay="No" loop="No" color="00adef"][/protected]'); ?></p>
		
		<?php } ?>
		
<div style="display: none;">
	<?php if (get_post_meta($post->ID, 'wpcf-litskills',true)!='none') { ?>
<div id="rfancybox">
<p id="presources">Resources to support this video:</p>
<p id="ptitle"><?php echo get_post_meta($post->ID, 'wpcf-tit',true);?></p>
<hr />
<ul>
<p class="ph">What is being taught through this activity:</p>
<li><span class="lesson">Foundational Skill: </span><?php echo get_post_meta($post->ID, 'wpcf-litskills',true);?></li>
<li><span class="lesson">TX Pre-K Guidelines: </span><?php echo get_post_meta($post->ID, 'wpcf-lifeskills',true);?></li>
<hr />
</ul>
<p class="ph">From the Experts: <?php echo get_post_meta($post->ID, 'wpcf-fromexperts',true);?></p>
<p><center><iframe src="http://player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'wpcf-expertsvideoid',true);?>" width="350" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></center></p>
<p>
<p>&nbsp;</p>
<hr />
<div class="adjust first">
<p class="ph">adjust for an older child</p>
<p><?php echo get_post_meta($post->ID, 'wpcf-olderchild',true);?></p>
</div>
<div class="adjust">
<p class="ph">adjust for a younger child</p>
<p><?php echo get_post_meta($post->ID, 'wpcf-youngerchild',true);?></p>
</div>
<hr />
<p class="ph">extending this activity</p>
<!--<ul id="ul2">-->
<?php echo get_post_meta($post->ID, 'wpcf-extendingactivity',true);?>
<!--</ul>-->
</div>
<?php } ?>
</div>
		<?php the_content(); ?>
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} elseif ( '' != $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			} else {
				$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
			}

			/*printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);*/
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyeleven' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
