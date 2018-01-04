<?php

// Sets base paths for styles and scripts
function fwd_asset($type, $filename)
{

  $dist_scripts = 'assets/scripts/dist/';  // Directory for final scripts
  $dist_styles = 'assets/styles/dist/';    // Directory for final styles

  if ($type == 'script') {
    $dist_path = get_stylesheet_directory_uri() . '/' . $dist_scripts;
  } elseif ($type == 'style') {
    $dist_path = get_stylesheet_directory_uri() . '/' . $dist_styles;
  }
  return $dist_path . $filename;
}

// Theme assets to load. Using the fwd_asset_path() function, you only need to supply what type of file is loaded and the name of that file.
function fwd_asset_loader()
{
  // Styles
  wp_register_style('rajdhani/font', '//fonts.googleapis.com/css?family=Rajdhani');
  wp_enqueue_style('rajdhani/font');

  wp_register_style('mmenu/css', '//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.8/jquery.mmenu.all.css');
  wp_enqueue_style('mmenu/css');

  wp_enqueue_style('main/css', fwd_asset('style', 'main.css'), false, null);

  // Scripts
  wp_enqueue_script('mmenu/js', '//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.8/jquery.mmenu.all.js', array('jquery'), null, true);
  wp_enqueue_script('main/js', fwd_asset('script', 'main-min.js'), array('jquery', 'mmenu/js'), null, true);
}
add_action('wp_enqueue_scripts', 'fwd_asset_loader', 100);
