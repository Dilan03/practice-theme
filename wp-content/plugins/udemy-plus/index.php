<?php 
/**
 * Plugin Name:       Udemy plus
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       A plugin for adding blocks to a theme
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Dilan
 * Author URI:        https://author.example.com/
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

 if(!function_exists('add_action')) {
  echo 'tests plugin';
  exit;
 }

 // Setup
 define ('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

 // Includes
include(UP_PLUGIN_DIR.'includes/register-blocks.php');

 // Hooks
 add_action('init', 'up_register_blocks');