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
		add_action( 'init', 'Patched_Up_Research::register_essay_post_type' );
		add_action( 'init', 'Patched_Up_Research::register_argument_post_type' );
		add_action( 'init', 'Patched_Up_Research::register_note_post_type' );

		add_action( 'admin_menu', 'Patched_Up_Research::create_admin_menu' );
	}

	public static function register_note_post_type() {
		register_post_type( 
			'patched_up_note', 
			array( 
				'labels' => array(
					'name' => __( 'Notes' ),
					'singular_name' => __( 'Note' ) ),
				'menu_icon' => '',
				'show_in_menu' => 'patched_up_research',
				'public' => true,
				'has_archive' => true
			)
		);
	}

	public static function register_argument_post_type() {
		register_post_type( 
			'patched_up_argument', 
			array( 
				'labels' => array(
					'name' => __( 'Arguments' ),
					'singular_name' => __( 'Argument' ) ),
				'menu_icon' => '',
				'show_in_menu' => 'patched_up_research',
				'public' => true,
				'has_archive' => true
			)
		);
	}

	public static function register_essay_post_type() {
		register_post_type( 
			'patched_up_essay', 
			array( 
				'labels' => array(
					'name' => __( 'Essays' ),
					'singular_name' => __( 'Essay' ) ),
				'menu_icon' => '',
				'show_in_menu' => 'patched_up_research',
				'public' => true,
				'has_archive' => true
			)
		);
	}

	public static function create_admin_menu() {
		add_menu_page( 'Research', 'Research', 'edit_posts', 'patched_up_research', '?post_type=patched_up_note', 'dashicons-welcome-write-blog', 26 );
	}

}

Patched_Up_Research::init();
