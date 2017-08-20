<?php
//Inserting CSS
function reg_styling()
{
  //register styles
  wp_register_style('main-style', get_stylesheet_directory_uri() . '/styles/main.min.css');

  //enqueue styles
  wp_enqueue_style('main-style');
}

//Theme support
function adv_theme_support()
{
    //register the nav menus
      register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
      ));

    //Featured img
    add_theme_support( 'post-thumbnail' );

    // Post Format Support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

//Excerpt length
function set_excerpt_length() {return 80;}


add_action( 'wp_enqueue_scripts', 'reg_styling' );
add_action('after_setup_theme', 'adv_theme_support');

function init_widgets($id)
{
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="block side-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Showcase',
    'id' => 'showcase',
    'before_widget' => '<div class="block showcase">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
  
  register_sidebar(array(
    'name' => 'Box 1',
    'id' => 'box1',
    'before_widget' => '<div class="box box-1">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Box 2',
    'id' => 'box2',
    'before_widget' => '<div class="box box-2">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Box 3',
    'id' => 'box3',
    'before_widget' => '<div class="box box-3">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
}

add_action('widgets_init', 'init_widgets');
add_filter( 'excerpt_length', 'set_excerpt_length' );

function get_top_parent()
{
  global $post;
  if($post->post_parent) {
    $ancestors = get_post_ancestors($post->ID);
    return $ancestors[0];
  }
  return $post->ID;
}

function page_is_parent()
{
  global $post;
  $pages = get_pages('child_of=' . $post->ID);

  return count($pages);
}

