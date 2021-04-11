<?php
/**
 * Plugin Name: Dozent LMS
 * Plugin URI: https://www.dozentlms.com
 * Description: Create, manage, and run your eLearning platform (LMS site) without knowing how to write a single line of code. Cheers!
 * Author: Dozent LMS Team
 * Author URI: https://www.dozentlms.com/?utm_source=wp-plugins&utm_campaign=plugin-uri&utm_medium=wp-dash
 * Version: 1.1.0
 * Plugin URI: https://www.dozentlms.com/?utm_source=wp-plugins&utm_campaign=plugin-uri&utm_medium=wp-dash
 * Requires at least: 4.5
 * Tested up to: 5.7
 * License: GPLv2 or later
 * Text Domain: dozent
 *
 * Dozent LMS is Copyright (c) 2021 Dozent LMS
 * Dozent LMS is forked from Tutor LMS
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'DOZENT_FILE' ) ) {
	define( 'DOZENT_FILE', __FILE__ );
}

if ( ! defined( 'DOZENT_VERSION' ) ) {
	define( 'DOZENT_VERSION', '1.1.0' );
}

if ( ! defined( 'DOZENT_DB_VERSION' ) ) {
	define( 'DOZENT_DB_VERSION', '1.0.0' );
}

/**
 * Load Main application instance
 */

require_once __DIR__.'/classes/Autoloader.php';
use Dozent\Application;

function Dozent(){
    return Application::instance();
}

global $dozent;
$dozent = Dozent();