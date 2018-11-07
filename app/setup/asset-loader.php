<?php
// Theme assets to load
function fwd_asset_loader()
{
  // Styles
  wp_register_style('rajdhani/font', '//fonts.googleapis.com/css?family=Rajdhani');
  wp_enqueue_style('rajdhani/font');

  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/resources/styles/dist/main.css', false, null);

  // Scripts
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/resources/scripts/dist/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'fwd_asset_loader', 100);