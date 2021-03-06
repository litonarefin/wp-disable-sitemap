<?php
/**
 * Plugin Name: WP Disable Sitemap
 * Description: Disable default sidebar from your WordPress site
 * Plugin URI: https://master-addons.com
 * Author: Jewel Theme
 * Version: 1.0.0
 * Author URI: https://github.com/litonarefin/wp-disable-sitemap
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_filter('wp_sitemaps_enabled', '__return_false');