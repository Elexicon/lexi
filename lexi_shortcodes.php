<?php
// Useful Shortcodes for Lexi

// Year Shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');

// Site Name Shortcode
function sitename_shortcode() {
    $sitename = get_bloginfo( 'name' );
    return $sitename;
}
add_shortcode('sitename', 'sitename_shortcode');
