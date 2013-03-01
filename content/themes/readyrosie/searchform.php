<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<script type="text/javascript">
jQuery(document).ready(function() {
	/*jQuery('#searchbtn').fancybox({
		'overlayColor'		: '#000',
		'overlayOpacity'	: 0.8
	});*/
	jQuery('#searchbtn').click(function() {
		collapseCat(jQuery('.collapse'));
		jQuery('#searchfrm').show(200);
	});
});
</script>
	<a id="searchbtn" href="#searchform">SEARCH</a>
	<div id="searchfrm" style='display:none; background-color: white'>
		<form  method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="s" class="assistive-text"><?php _e( 'Search', 'twentyeleven' ); ?></label>
			<input type="text" style="padding-left: 10%; padding-right: 0; display: block; width: 90%;" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
			<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		</form>
	</div>