<?php
/**
 * Plugin Name: Coetrappers Smart Post Sync
 * Description: Starter plugin for syncing remote records into WordPress posts.
 * Version: 0.1.0
 * Author: Coetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: coetrappers-smart-post-sync
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_SMART_POST_SYNC_VERSION', '0.1.0' );
define( 'COETRAPPERS_SMART_POST_SYNC_FILE', __FILE__ );
define( 'COETRAPPERS_SMART_POST_SYNC_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_SMART_POST_SYNC_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_SMART_POST_SYNC_PATH . 'includes/class-coetrappers-smart-post-sync.php';

function coetrappers_smart_post_sync_bootstrap() {
	$plugin = new \Coetrappers\CoetrappersSmartPostSync\CoetrappersSmartPostSyncPlugin();
	$plugin->boot();
}

coetrappers_smart_post_sync_bootstrap();
