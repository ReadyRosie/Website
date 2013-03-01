<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">
				<div class="entry-content">
					<article class="post type-post status-publish format-standard hentry category-lit-subcat category-literacy category-sub-cat-2">
						<header style="display: none" class="entry-header">
							<h1 class="entry-title">Intro. Video</h1>
					
									<div class="entry-meta">
								<span class="sep">Posted on </span><a href="http://readyrosie.com/?p=76" title="2:52 am" rel="bookmark"><time class="entry-date" datetime="2011-12-19T02:52:57+00:00" pubdate="">December 19, 2011</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="http://readyrosie.com/?author=1" title="View all posts by admin" rel="author">admin</a></span></span>		</div><!-- .entry-meta -->
								</header><!-- .entry-header -->
					
						<div class="entry-content">
							<?php
								$post_id = 76;
								$queried_post = get_post($post_id);
								$content = $queried_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								echo $content;
							?>
						</div><!-- .entry-content -->
						<footer class="entry-meta">
							<span class="edit-link"><a class="post-edit-link" href="http://readyrosie.com/wp-admin/post.php?post=76&amp;action=edit" title="Edit Post">Edit</a></span>
						</footer><!-- .entry-meta -->
					</article>
				</div>
				<div style="color: #999999; padding-top: 15px; padding-left: 130px; padding-bottom: 10px; font-size: 24px; background-color: rgba(0,0,0,.4)"><?php echo $queried_post->post_title ?></div> <div style='clear: both;' ></div>
					<div style="float:left; width: 107px; height: 52px; background-color: rgba(0,0,0,.4)"></div>
					
					<div style="position: absolute;right: 0px; top: 514px;"><?php get_search_form(); ?></div>
					
					<?php if ( is_active_sidebar( 'postwidgets' ) ) : ?>
						<div id="postwidgets" class="widget-area">
							<?php dynamic_sidebar( 'postwidgets' ); ?>
						</div><!-- #second .widget-area -->
					<?php endif; ?>	
					
					
			<div style="clear:both"></div>
			<ul id="searchresults">
				<?php if ( have_posts() ) : ?>
					<?php $tmp=0;/* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php if (($post->post_type=='page')) : continue; 
						else : $tmp=$tmp+1;
						endif;
					?>
						<li><a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title ?></a></li>
	
					<?php endwhile; 
						if ($tmp==0) :
					?>
						<div style="clear:both"></div>
						<p>No results found</p>	
				<?php endif; ?>
				<?php twentyeleven_content_nav( 'nav-below' ); ?>
			</ul>
			<?php /*load intro video if no other video found */ 
				else : ?>
				
					<div style="clear:both"></div>
					<p>No results found</p>				
			<?php endif; ?>
			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>