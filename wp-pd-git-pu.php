<?php
/*
 * Plugin name: PD WP GIT Updater
 * Description: This is a sample plugin for updating a git hosted plugin
 * Author: Proficient Designers
 * Author URI: https://proficientdesigners.com
 * Version: 1.0
 */

require_once('updater.php');

$file = plugin_basename( __FILE__ );

new PD_WP_Plugin_Updater( $file );