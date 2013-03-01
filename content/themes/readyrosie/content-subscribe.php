<?php
/**
 * The template used for displaying page content for a signup page
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>--><!-- .entry-header -->

	<div class="entry-content">
		<p><!-- Begin MailChimp Signup Form --></p>
<div id="mc_embed_signup">
<img src="http://www.readyrosie.com/wp-content/uploads/2012/09/subscribe.png" alt="" title="subscribe" width="446" height="109" class="alignnone size-full wp-image-631"></p>
<?php the_content(); ?>

</div>
<p><!--End mc_embed_signup--></p>

		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
