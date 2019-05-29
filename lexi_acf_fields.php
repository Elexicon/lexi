<?php

// Is ACF installed and activated?
if(function_exists('get_field')){
  // Yes? Run our ACF function.
  lexi_acf_setup();
} else {
  // No? Lets notify the user using a Wordpress action.
  add_action( 'admin_notices', 'acf_admin_notice__error' );
}

// Function to notify Users if ACF isn't installed.
function acf_admin_notice__error() {
	$class = 'notice notice-error';
	$message = __( 'Hey! We noticed ACF isn\'t installed. Though it\'s not required, Lexi works best with ACF PRO installed.', 'sample-text-domain' );

	printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
}

// Function to run when ACF is installed.
function lexi_acf_fields() {

}
