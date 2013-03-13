=== Advanced Custom Fields: Repeater Field ===
Contributors: Elliot Condon
Requires at least: 3.0.0
Tested up to: 3.5.1
Author: Elliot Condon
Author URL: http://www.elliotcondon.com
Version: 0.0.6


== Copyright ==
Copyright 2011 - 2013 Elliot Condon

This software is NOT to be distributed, but can be INCLUDED in WP themes: Premium or Contracted.
This software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.


== Description ==

Break free from static inputs and create multiple rows of loop-able data

The Repeater field acts as a table of data where you can define the columns (sub fields) and add infinite rows.
Any type of field can be added as a sub field which gives you the potential to create very flexible templates.

http://www.advancedcustomfields.com/add-ons/repeater-field/


== Installation ==

This software can be treated as both a WP plugin and a theme include.
However, only when activated as a plugin will updates be available/

= Plugin =
1. Copy the 'acf-repeater' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

= Include =
1. Copy the 'acf-repeater' folder into your theme folder (can use sub folders)
   * You can place the folder anywhere inside the 'wp-content' directory
2. Edit your functions.php file and add the following code to include the field:

`
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	include_once('acf-repeater/repeater.php');
}
`

3. Make sure the path is correct to include the repeater.php file


== Changelog ==

= 0.0.6 =
* [Updated] Update save method to use uniqid for field keys, not pretty field keys

= 0.0.5 =
* [Fixed] Fix wrong css / js urls on WINDOWS server.

= 0.0.4 =
* [Fixed] Fix bug preventing WYSIWYG sub fields to load.

= 0.0.3 =
* [Fixed] Fix load_field hook issues with nested fields.

= 0.0.2 =
* [Fixed] acf_load_field-${parent_hook}-${child_hook} now works!

= 0.0.1 =
* Initial Release.