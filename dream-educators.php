<?php
/**
 * Plugin Name: Dream Educators
 * Plugin URI:  https://github.com/impact2021/Dream-Educators
 * Description: Displays a responsive grid of educator thumbnails with popup bios. Use the shortcode [dream_educators] on any page or post.
 * Version:     1.0.0
 * Author:      Impact Websites
 * License:     GPL-2.0-or-later
 * Text Domain: dream-educators
 *
 * @package DreamEducators
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'DE_PLUGIN_VERSION', '1.0.0' );
define( 'DE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'DE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once DE_PLUGIN_DIR . 'includes/class-educator-cpt.php';
require_once DE_PLUGIN_DIR . 'includes/class-educator-shortcode.php';
require_once DE_PLUGIN_DIR . 'includes/default-educators.php';

/**
 * Plugin activation: register the CPT flush rewrite rules and seed default educators.
 */
function de_activate() {
    de_register_cpt();
    flush_rewrite_rules();

    // Only seed once.
    if ( ! get_option( 'de_educators_seeded' ) ) {
        de_insert_default_educators();
        update_option( 'de_educators_seeded', '1' );
    }
}
register_activation_hook( __FILE__, 'de_activate' );

/**
 * Plugin deactivation: flush rewrite rules.
 */
function de_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'de_deactivate' );
