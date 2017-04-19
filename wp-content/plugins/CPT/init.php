<?php 

/**
 * Plugin Name: CPT
 * Plugin URI: http://test.com
 * Description: Custom Post Type
 * Version: 1.0.0
 * Author: your name here
 * Author URI: http://test.com
 * License: GPL2
 */

 if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'RF_DIR', dirname( __FILE__ ) );

include (RF_DIR.'/lib/post_tax.php');