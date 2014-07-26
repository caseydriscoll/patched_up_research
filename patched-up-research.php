<?php
/* Plugin Name: Patched Up Research
 * Plugin URI: http://patchedupcreative.com/plugins/research
 * Description: A note taking plugin
 * Version: 0.0.1 dev
 * Author: Casey Patrick Driscoll
 * Author URI: http://caseypatrickdriscoll.com
 * License: GPL2
 * Thanks: http://mannieschumpert.com/blog/using-wordpress-3-8-icons-custom-post-types-admin-menu/
 */

class Patched_Up_Research {
	public static function init() {
		add_action( 'init', 'Patched_Up_Research::register_note_post_type' );

	}

	public static function register_note_post_type() {
		register_post_type( 
			'patched_up_note', 
			array( 
				'labels' => array(
					'name' => __( 'Notes' ),
					'singular_name' => __( 'Note' ) ),
				'menu_icon' => '',
				'public' => true,
				'has_archive' => true
			)
		);
	}

}

function add_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-patched_up_note div.wp-menu-image:before {
  content: '\f119';
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );

Patched_Up_Research::init();
