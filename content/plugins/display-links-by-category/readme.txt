=== Plugin Name ===
Contributors: alekarsovski, enej, ubcdev, ctlt-dev
Tags: links, display links, shortcode, blogroll, bookmarks, custom fields
Requires at least: 3.2.1
Tested up to: 3.2.1
Stable tag: 1.0.1

A simple shortcode plugin for displaying links by category through custom fields.

== Description ==

This plugin allows users to display their WordPress links by category through custom fields.

The following gives a step-by-step setup overview:

1. Enable the plugin (check the installation tab)
1. Go to the page/post where you'd like to place your links/blogroll
1. Make sure that Custom Fields are visible (on the edit page or post page click on the "Screen Options" in the top right and make sure "Custom Fields" is checked off)
1. Under CUstom fields click on the enter new link
1. Enter an ID in the "Name" field - the plugin uses the ID "display_links" as a default
1. Enter the category name of the links you'd like to display in the "Value" field
1. Click on the "Add Custom Field" button
1. Enter the following shortcode into the post content area or the widget area you prefer: <code>[links_by_cat field_id="(ID previously entered in Name field goes here)"]</code>
	* Note that if you used "display_links" in the Name field, you do not need to enter the "field_id" parameter in the shortcode and can simply do: <code>[links_by_cat]</code>
	
The shortcode also supports many other parameters for ordering and structuring your links. All parameters on the list (except "category") found on the following page are available: http://codex.wordpress.org/Template_Tags/wp_list_bookmarks#Parameters

Other parameter example:

<code>[links_by_cat orderby="rating"]</code> -- This is an example using the orderby parameter from the list. The links will now be ordered by their rating.

= Added in 1.0.1: =
The ability to display all categories has been added to the shortcode. Simply add:
<code>[links_by_cat display_all]</code>

Many bug fixes have also been introduced in version 1.0.1 as well, so please upgrade.


Currently, only one category is supported per Custom Field entry; however, I am looking to update the plugin soon so that it supports multiple categories.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the "display-links-by-category" folder to the "/wp-content/plugins/" directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add new custom fields where needed (full details in "Description" tab)
1. Use the shortcode in any page, post or widget area where you wish your links to appear

== Changelog ==

= 1.0.1 =
* Addded the option to choose to display all categories
* Bug fixes (ex: if category name is wrong, all categories used to display - now, none are displayed)

== Upgrade Notice ==

= 1.0.1 =
Several bug fixes and the addition for a display all categories option. Check [plugin page](http://wordpress.org/extend/plugins/display-links-by-category/) for more details.