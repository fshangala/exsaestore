<?php
// ... (your existing code) ...

add_theme_support( 'post-thumbnails' );

function exsaestore_enqueue_styles() {
  wp_enqueue_style( 'exsaestore-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'exsaestore_enqueue_styles' );

// ... (rest of your code) ...
?>