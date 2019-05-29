<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Set up Updates
require 'plugin-update-checker/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/Elexicon/lexi/',
	__FILE__,
	'lexi'
);

// Set branch
$updateChecker->setBranch('master');

//Enable Releases mode
$updateChecker->getVcsApi()->enableReleaseAssets();

// Enqueue our dist CSS and JS.
function vc_enqueue_files() {
    $cache_buster = date("YmdHi", filemtime( get_template_directory() . '/main.css'));
    wp_enqueue_style( 'vc-elem-main', get_template_directory_uri() . '/main.css', array(), $cache_buster, 'all' );
    wp_enqueue_style( 'vc-elemresponsive', get_template_directory_uri() . '/responsive.css', array(), $cache_buster, 'all' );
    wp_enqueue_script( 'vc-elem-scriptjs', get_template_directory_uri() . '/script.js', array('jquery'), $cache_buster );
}
add_action( 'wp_enqueue_scripts', 'vc_enqueue_files' );

?>
