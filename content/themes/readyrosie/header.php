<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?version=2" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('a[href="#login"]').fancybox({
			'overlayColor'		: '#000',
			'overlayOpacity'	: 0.8
		});
		if (detectsvg()) {
			jQuery('#backgrounddiv').show();
		}
		<?php //if ($_GET['login']=='failed')
			
		 	//echo 'alert("login failed.");' ;
		?>
		
	});
	
	function detectsvg(){
		var userAgent = navigator.userAgent.toLowerCase();
		jQuery.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());
		var version = 0;
		
		// Is this a version of Safari?
		if(userAgent.indexOf('applewebkit/')>=0){
			userAgent = userAgent.substring(userAgent.indexOf('applewebkit/') +12);	
			userAgent = userAgent.substring(0,userAgent.indexOf('.'));
			version = userAgent;
			if (version<533) return false;	
		}
		return (window.SVGSVGElement) ? true : false;
	}
</script>

</head>

<body <?php body_class(); ?> style="position: relative">
	
	
<div id="page" class="hfeed">
<!--[if !(IE) ]><!-->
	<div id="backgrounddiv" style="margin: 0; height: 100%; width: 100%; position: fixed; top: 0; display: none; "><embed style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" src="http://readyrosie.com/wp-content/themes/readyrosie/backgroundgradient.svg"></embed></div>
<!--<![endif]-->
	
	<div id="maincontainer">
	<header id="branding" role="banner">
	
	<div class="userinfo">

	<?php
	 if ( is_user_logged_in() ) { 
		 global $current_user;
		 get_currentuserinfo();
	$_output = $current_user->user_firstname . " " . $current_user->user_lastname . ' | ' . '<a href="' . wp_logout_url() . '" title="Logout">Logout</a>';
	
	if (current_user_can('level_10'))
		{ 
			$_output .= ' | <a href="' . admin_url() . '" title="Admin Dashboard">Dashboard</a>';
		}
	echo $_output;
	
	 }
	 



	 ?> 

	</div>
			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
					<img src="<?php header_image(); ?>"  />
				<?php endif; // end check for featured image or standard header ?>
			<?php endif; // end check for removed header image ?>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
				<?php get_search_form(); ?>
				</div>
			<?php
				else :
			?>
				
			<?php endif; ?>

			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<a id="curriculum" href="http://readyrosie.com/?p=76"><img id="curriculumimage" src="<?php echo get_bloginfo('template_directory') . '/images/curriculum.png'; ?>" /></a>
				<?php if (is_single() or is_search()) { ?>
					<a id="bigpicture" href="http://readyrosie.com/?page_id=255"><img id="bigpictureimage" src="<?php echo get_bloginfo('template_directory') . '/images/bigpicture.png'; ?>" /></a><?php } ?>
			</nav><!-- #access -->
	</header><!-- #branding -->
	<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
	<div style="display:none">
		<div id="login">
			<div style="text-transform: uppercase; height: 307px; width: 137px; float:left; font-size: 33px; border-style: solid; border-color: black; border-right-width: 2px; color: #94b2b1">Login</div>
			<div id="divloginform">
			<?php wp_login_form( array( 'remember' => false) ); ?> 
			<p id="notmember">NOT A MEMBER? <span>Check with your local School District to see if they have purchased access for you.</span></p>
			</div>
		</div>
	</div>
	<div id="main">
