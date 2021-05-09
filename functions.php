<?php

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';

register_nav_menus(array(
  'primary' => __('Menu principal', 'custom-theme'),
));

register_nav_menus(array(
  'footer' => __('Pied de page', 'custom-theme'),
));


add_theme_support('post-thumbnails');

function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', ['style']);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
// Réduire l'extrait
function new_excerpt_length($length)
{
  global $post;
  return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changer le lien read more
function new_excerpt_readmore($more)
{
  global $post;
  if ((is_home() || is_category() || is_search()) && !is_category('6')) :
    return '... <a href="' . get_permalink() . '" class="suite"><i class="fal fa-long-arrow-right"></i></a>';
  else :
    return '... <i class="fal fa-long-arrow-right"></i>';
  endif;
}
add_filter('excerpt_more', 'new_excerpt_readmore');
