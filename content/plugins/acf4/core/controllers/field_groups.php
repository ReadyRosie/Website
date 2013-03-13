<?php 

/*
*  acf_field_groups
*
*  @description: 
*  @since: 3.6
*  @created: 25/01/13
*/

class acf_field_groups 
{

	/*
	*  __construct
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function __construct()
	{
		// actions
		add_action('admin_menu', array($this,'admin_menu'));
	}
	
	
	/*
	*  admin_menu
	*
	*  @description: 
	*  @created: 2/08/12
	*/
	
	function admin_menu()
	{
		
		// validate page
		if( ! $this->validate_page() )
		{
			return;
		}
		
		
		// actions
		add_action('admin_print_scripts', array($this,'admin_print_scripts'));
		add_action('admin_print_styles', array($this,'admin_print_styles'));
		add_action('admin_footer', array($this,'admin_footer'));
		
		
		// columns
		add_filter( 'manage_edit-acf_columns', array($this,'acf_edit_columns'), 10, 1 );
		add_action( 'manage_acf_posts_custom_column' , array($this,'acf_columns_display'), 10, 2 );
		
	}
	
	
	/*
	*  validate_page
	*
	*  @description: returns true | false. Used to stop a function from continuing
	*  @since 3.2.6
	*  @created: 23/06/12
	*/
	
	function validate_page()
	{
		// global
		global $pagenow;
		
		
		// vars
		$return = false;
		
		
		// validate page
		if( in_array( $pagenow, array('edit.php') ) )
		{
		
			// validate post type
			if( isset($_GET['post_type']) && $_GET['post_type'] == 'acf' )
			{
				$return = true;
			}
			
			
			if( isset($_GET['page']) )
			{
				$return = false;
			}
			
		}
		
		
		// return
		return $return;
	}
	
	
	/*
	*  admin_print_scripts
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function admin_print_scripts()
	{
		wp_enqueue_script(array(
			'jquery',
			'thickbox',
		));
	}
	
	
	/*
	*  admin_print_styles
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function admin_print_styles()
	{
		wp_enqueue_style(array(
			'thickbox',
			'acf-global',
			'acf',
		));
	}
	
	
	/*
	*  acf_edit_columns
	*
	*  @description: 
	*  @created: 2/08/12
	*/
	
	function acf_edit_columns( $columns )
	{
		$columns = array(
			'cb'	 	=> '<input type="checkbox" />',
			'title' 	=> __("Title"),
			'fields' 	=> __("Fields", 'acf')
		);
		
		return $columns;
	}
	
	
	/*
	*  acf_columns_display
	*
	*  @description: 
	*  @created: 2/08/12
	*/
	
	function acf_columns_display( $column, $post_id )
	{
		// vars
		switch ($column)
	    {
	        case "fields":
	            
	            // vars
				$count =0;
				$keys = get_post_custom_keys( $post_id );
				
				if($keys)
				{
					foreach($keys as $key)
					{
						if(strpos($key, 'field_') !== false)
						{
							$count++;
						}
					}
			 	}
			 	
			 	echo $count;

	            break;
	    }
	}
	
	
	/*
	*  admin_footer
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function admin_footer()
	{
		// vars
		$version = apply_filters('acf/get_info', 'version');
		$dir = apply_filters('acf/get_info', 'dir');
		$path = apply_filters('acf/get_info', 'path');
		$show_tab = isset($_GET['info']);
		$tab = isset($_GET['info']) ? $_GET['info'] : 'changelog';
		
		?>
<script type="text/html" id="tmpl-acf-col-right">
<div id="acf-col-right">

	<div class="wp-box">
		<div class="inner">
			<h3 class="h2"><?php _e("Advanced Custom Fields",'acf'); ?> <?php echo $version; ?></h3>

			<h3><?php _e("Changelog",'acf'); ?></h3>
			<p><?php _e("See what's new in",'acf'); ?> <a href="<?php echo admin_url('edit.php?post_type=acf&info=changelog'); ?>">version <?php echo $version; ?></a>
			
			<h3><?php _e("Resources",'acf'); ?></h3>
			<ul>
				<li><a href="http://www.advancedcustomfields.com/resources/#getting-started" target="_blank">Getting Started</a></li>
				<li><a href="http://www.advancedcustomfields.com/resources/#field-types" target="_blank">Field Types</a></li>
				<li><a href="http://www.advancedcustomfields.com/resources/#functions" target="_blank">Functions</a></li>
				<li><a href="http://www.advancedcustomfields.com/resources/#actions" target="_blank">Actions</a></li>
				<li><a href="http://www.advancedcustomfields.com/resources/#filters" target="_blank">Filters</a></li>
				<li><a href="http://www.advancedcustomfields.com/resources/#how-to" target="_blank">"How to" guides</a></li>
				<li><a href="http://www.advancedcustomfields.com/resources/#tutorials" target="_blank">Tutorials</a></li>
			</ul>
		</div>
		<div class="footer footer-blue">
			<ul class="left hl">
				<li><?php _e("Created by",'acf'); ?> Elliot Condon</li>
			</ul>
			<ul class="right hl">
				<li><a href="http://wordpress.org/extend/plugins/advanced-custom-fields/"><?php _e("Vote",'acf'); ?></a></li>
				<li><a href="http://twitter.com/elliotcondon"><?php _e("Follow",'acf'); ?></a></li>
			</ul>
		</div>
	</div>
</div>
</script>
<script type="text/html" id="tmpl-acf-about">
<!-- acf-about -->
<div id="acf-about" class="acf-content">
	
	<!-- acf-content-title -->
	<div class="acf-content-title">
		<h1>Welcome to Advanced Custom Fields <?php echo $version; ?></h1>
		<h2>Thank you for updating to the latest version! <br />ACF <?php echo $version; ?> is more polished and enjoyable than ever before. We hope you like it.</h2>
	</div>
	<!-- / acf-content-title -->
	
	<!-- acf-content-body -->
	<div class="acf-content-body">
		<h2 class="nav-tab-wrapper">
			<a class="acf-tab-toggle nav-tab <?php if( $tab == 'whats-new' ){ echo 'nav-tab-active'; } ?>" href="<?php echo admin_url('edit.php?post_type=acf&info=whats-new'); ?>">What’s New</a>
			<a class="acf-tab-toggle nav-tab <?php if( $tab == 'changelog' ){ echo 'nav-tab-active'; } ?>" href="<?php echo admin_url('edit.php?post_type=acf&info=changelog'); ?>">Changelog</a>
		</h2>

<?php if( $tab == 'whats-new' ): ?>

		<table id="acf-add-ons-table" class="alignright">
			<tr>
				<td><img src="<?php echo $dir; ?>images/add-ons/repeater-field-thumb.jpg" /></td>
				<td><img src="<?php echo $dir; ?>images/add-ons/gallery-field-thumb.jpg" /></td>
			</tr>
			<tr>
				<td><img src="<?php echo $dir; ?>images/add-ons/options-page-thumb.jpg" /></td>
				<td><img src="<?php echo $dir; ?>images/add-ons/flexible-content-field-thumb.jpg" /></td>
			</tr>
		</table>
	
		<h3>Add-ons</h3>
		
		<h4>Activation codes have grown into plugins!</h4>
		<p>Add-ons are now activated by downloading and installing individual plugins. Although these plugins will not be hosted on the wordpress.org repository, each Add-on will continue to receive updates in the usual way.</p>
		
		<h4>Where can I find my Add-on plugins?</h4>
		<p>Download links can be found alongside the activation code in your ACF receipt. <a href="http://www.advancedcustomfields.com/store/account/" target="_blank">visit your account</a>.<br />
		For faster access, this <a href="http://www.advancedcustomfields.com/add-ons-download/" target="_blank">download page</a> has also been created.</p>
		
		<hr />
		
		<h3>Easier Development</h3>
		
		<h4>Custom Field Types</h4>
		<p>Creating your own field type has never been easier! Unfortunately, version 3 field types are not compatible with version 4.<br />
		Migrating your field types is easy, please <a href="http://www.advancedcustomfields.com/docs/tutorials/creating-a-new-field-type/" target="_blank">follow this tutorial</a> to learn more. </p>
		
		<h4>Actions &amp; Filters</h4>
		<p>Lots of new actions and filters have been added in version 4. Only one action has been removed; "acf_settings". <a href="http://www.advancedcustomfields.com/resources/getting-started/migrating-from-v3-to-v4/" target="_blank">read more about the changes</a></p>
		
		<h4>Preview draft is now working!</h4>
		<p>This bug has been squashed along with many other little critters! <a class="acf-tab-toggle" href="#" data-tab="2">See the full changelog</a></p>
		
		<hr />
		
		<h3>Thank You</h3>
		<p>A <strong>BIG</strong> thank you to everyone who has helped test the version 4 beta and for all the support I have received.</p>
		<p>Without you all, this release would not have been possible!</p>
		
<?php elseif( $tab == 'changelog' ): ?>
		
		<h3>Changelog for <?php echo $version; ?></h3>
		<?php
		
		$items = file_get_contents( $path . 'readme.txt' );
		
		$items = end( explode('= ' . $version . ' =', $items) );
		$items = current( explode("\n\n", $items) );
		$items = array_filter( array_map('trim', explode("*", $items)) );
		
		?>
		<ul class="acf-changelog">
		<?php foreach( $items as $item ): 
			
			$item = explode('http', $item);
			
				
		?>
			<li><?php echo $item[0]; ?><?php if( isset($item[1]) ): ?><a href="http<?php echo $item[1]; ?>" target="_blank">Learn more</a><?php endif; ?></li>
		<?php endforeach; ?>
		</ul>
		
<?php endif; ?>

		
	</div>
	<!-- / acf-content-body -->
	
	
	<!-- acf-content-footer -->
	<div class="acf-content-footer">
		<ul class="hl clearfix">
			<li><a class="acf-button acf-button-big" href="<?php echo admin_url('edit.php?post_type=acf'); ?>">Awesome. Let's get to work</a></li>
		</ul>
	</div>
	<!-- / acf-content-footer -->
	
	
	
</div>
<!-- / acf-about -->
</script>
<script type="text/javascript">
(function($){
	
	// wrap
	$('#wpbody .wrap').attr('id', 'acf-field_groups');
	$('#acf-field_groups').wrapInner('<div id="acf-col-left" />');
	$('#acf-field_groups').wrapInner('<div id="acf-cols" />');
	
	
	// add sidebar
	$('#acf-cols').prepend( $('#tmpl-acf-col-right').html() );
	
	
	// take out h2 + icon
	$('#acf-col-left > .icon32').insertBefore('#acf-cols');
	$('#acf-col-left > h2').insertBefore('#acf-cols');
	
	
	<?php if( $show_tab ): ?>
	// add about copy
	$('#wpbody-content').prepend( $('#tmpl-acf-about').html() );
	$('#acf-field_groups').hide();
	$('#screen-meta-links').hide();
	<?php endif; ?>
	
})(jQuery);
</script>
		<?php
	}
			
}

$acf_field_groups= new acf_field_groups();

?>