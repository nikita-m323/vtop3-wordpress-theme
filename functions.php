<?php
/**
 * Timber theme
 */

// Load Composer dependencies.
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * Initialize all the core classes of the theme
 */
if ( class_exists( 'App\\Init' ) ) {
    App\Init::register_services();
}