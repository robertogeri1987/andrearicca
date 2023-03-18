<?php

/* Dependecies
-------------------------------------------------------- */

//nav walker bootstrap4
require_once('assets/bs4navwalker.php');

// content width
if (!isset($content_width)) $content_width = 1400;

/* Setup Theme
-------------------------------------------------------- */

if (!function_exists('iw_setup_theme')) {

  function iw_setup_theme()
  {

    // add support titles
    add_theme_support("title-tag");

    // add theme feed links
    add_theme_support('automatic-feed-links');

    // enable featured image
    add_theme_support("post-thumbnails");

    // create custom size images
    add_image_size('iw_big', 1400, 800, true);
    add_image_size('iw_quad', 600, 600, true);
    add_image_size('iw_single', 800, 500, true);
    add_image_size('iw_trattamentimedio', 348, 429, true);
    add_image_size('iw_trattamenti', 204, 252, true);
    add_image_size('iw_promozioni', 325, 223, true);
    add_image_size('iw_quad_medium', 500, 500, true);
    add_image_size('iw_marchi', 300, 120, true);


    // create custom menus
    register_nav_menus(array(
      'header' => esc_html__('Header', 'iw'),
    ));

    //load theme languages
    load_theme_textdomain('iw', get_template_directory() . '/languages');
  }
}

add_action('after_setup_theme', 'iw_setup_theme');


/* Register Sidebars
-------------------------------------------------------- */

if (!function_exists('iw_sidebars')) {

  function iw_sidebars()
  {
    register_sidebar(
      array(
        'name' => esc_html__('Primary', 'iw'),
        'id' => 'primary',
        'description' => esc_html__('Main Sidebar', 'iw'),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget my-5 %2$s clearfix">',
        'after_widget' => '</div>',

      )
    );
    register_sidebar(
      array(
        'name' => esc_html__('Footer 1', 'iw'),
        'id' => 'footer1',
        'description' => esc_html__('Widget sidebar 1', 'iw'),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget mt-4 %2$s clearfix">',
        'after_widget' => '</div>',

      )
    );
    register_sidebar(
      array(
        'name' => esc_html__('Footer 2', 'iw'),
        'id' => 'footer2',
        'description' => esc_html__('Widget sidebar 2', 'iw'),
        'before_title' => '<h3 id="pagine_title">',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget footer_title_margin footer_border %2$s clearfix">',
        'after_widget' => '</div>',

      )
    );
    register_sidebar(
      array(
        'name' => esc_html__('Footer 3', 'iw'),
        'id' => 'footer3',
        'description' => esc_html__('Widget sidebar 3', 'iw'),
        'before_title' => '<h3 id="viso_title">',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget footer_title_margin footer_border %2$s clearfix">',
        'after_widget' => '</div>',

      )
    );
    register_sidebar(
      array(
        'name' => esc_html__('Footer 4', 'iw'),
        'id' => 'footer4',
        'description' => esc_html__('Widget sidebar 4', 'iw'),
        'before_title' => '<h3 id="viso_corpo">',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget footer_title_margin footer_border %2$s clearfix">',
        'after_widget' => '</div>',

      )
    );
    register_sidebar(
      array(
        'name' => esc_html__('Footer 5', 'iw'),
        'id' => 'footer5',
        'description' => esc_html__('Widget sidebar 5', 'iw'),
        'before_title' => '<h3 id="laserterapia_title">',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget footer_title_margin %2$s clearfix">',
        'after_widget' => '</div>',

      )
    );
  }
}

add_action('widgets_init', 'iw_sidebars');


/* Include css files
-------------------------------------------------------- */

if (!function_exists('iw_styles')) {

  function iw_styles()
  {
    wp_enqueue_style('iw-bootstrap-css', get_template_directory_uri() . '/styles/css/bootstrap.min.css');
    wp_enqueue_style('iw-load-font-works', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400&display=swap');
    wp_enqueue_style('iw-style-default-css', get_template_directory_uri() . '/style.css?v=' . time());
  }
}

add_action('wp_enqueue_scripts', 'iw_styles');


/* Include javascript files
-------------------------------------------------------- */

if (!function_exists('iw_scripts')) {

  function iw_scripts()
  {
    wp_enqueue_script('iw-popper-js', get_template_directory_uri() . '/scripts/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('iw-bootstrap-js', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('iw-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
    if (is_singular()) wp_enqueue_script("comment-reply");
  }
}

add_action('wp_enqueue_scripts', 'iw_scripts');
//Aggiungi svg
function my_myme_types($mime_types)
{
  $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
  return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

/**
 * Aggiunta Custom post type elettrodomestici
 */
add_action('init', 'elettrodomestici_init');

function elettrodomestici_init()
{

  $labels = array(
    'name' => _x('Elettrodomestici', 'post type general name', 'iw'),
    'singular_name' => _x('Elettrodomestici', 'post type singular name', 'iw'),
    'menu_name' => _x('Elettrodomestici', 'admin menu', 'iw'),
    'name_admin_bar' => _x('Elettrodomestici', 'add new on admin bar', 'iw'),
    'add_new' => _x('Aggiungi nuovo', 'Elettrodomestici', 'iw'),
    'add_new_item' => __('Aggiungi nuova Elettrodomestico', 'iw'),
    'new_item' => __('Nuova Elettrodomestico', 'iw'),
    'edit_item' => __('Modifica Elettrodomestico', 'iw'),
    'view_item' => __('Visualizza Elettrodomestico', 'iw'),
    'all_items' => __('Tutti le Elettrodomestici', 'iw'),
    'search_items' => __('Cerca Elettrodomestico', 'iw'),
    'parent_item_colon' => __('Elettrodomestico genitore:', 'iw'),
    'not_found' => __('Nessuna Elettrodomestico trovata.', 'iw'),
    'not_found_in_trash' => __('Nessuna Elettrodomestici trovata nel cestino.', 'iw')
  );

  $args = array(
    'labels' => $labels,
    'description' => __('Description.', 'iw'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'elettrodomestici'),
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail')
  );

  register_post_type('elettrodomestici', $args);
}

/**
 * Aggiunta Custom post type marchi
 */
add_action('init', 'marchi_init');

function marchi_init()
{

  $labels = array(
    'name' => _x('Marchi', 'post type general name', 'iw'),
    'singular_name' => _x('Marchi', 'post type singular name', 'iw'),
    'menu_name' => _x('Marchi', 'admin menu', 'iw'),
    'name_admin_bar' => _x('Marchi', 'add new on admin bar', 'iw'),
    'add_new' => _x('Aggiungi nuovo', 'Marchi', 'iw'),
    'add_new_item' => __('Aggiungi nuova Marchio', 'iw'),
    'new_item' => __('Nuova Marchio', 'iw'),
    'edit_item' => __('Modifica Marchio', 'iw'),
    'view_item' => __('Visualizza Marchio', 'iw'),
    'all_items' => __('Tutti le Marchi', 'iw'),
    'search_items' => __('Cerca Marchio', 'iw'),
    'parent_item_colon' => __('Marchio genitore:', 'iw'),
    'not_found' => __('Nessuna Marchio trovata.', 'iw'),
    'not_found_in_trash' => __('Nessuna Marchi trovata nel cestino.', 'iw')
  );

  $args = array(
    'labels' => $labels,
    'description' => __('Description.', 'iw'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'marchi'),
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_icon' => 'dashicons-store',
    'orderby' => 'title', // Ordina i post in base al titolo
    'order' => 'ASC' // Ordine crescente
  );

  register_post_type('marchi', $args);
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
  add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
  if ('dns-prefetch' == $relation_type) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

    $urls = array_diff($urls, array($emoji_svg_url));
  }

  return $urls;
}


function getIdMenuFromLocation($location)
{
  $theme_locations = get_nav_menu_locations();

  $menu_obj = get_term($theme_locations[$location], 'nav_menu');

  $menu_id = $menu_obj->term_id;

  return $menu_id;
}

function buildTree(array &$elements, $parentId = 0)
{
  $branch = array();
  foreach ($elements as &$element) {
    if ($element->menu_item_parent == $parentId) {
      $children = buildTree($elements, $element->ID);
      if ($children)
        $element->gidm_children = $children;

      if (get_field('colore', $element))
        $element->colore = get_field('colore', $element);

      $branch[$element->ID] = $element;
      unset($element);
    }
  }
  return $branch;
}

/**
 * Returns all child nav_menu_items under a specific parent
 *
 * @param int the parent nav_menu_item ID
 * @param array nav_menu_items
 * @param bool gives all children or direct children only
 *
 * @return array returns filtered array of nav_menu_items
 */
function get_nav_menu_item_children($parent_id, $nav_menu_items, $depth = true)
{
  $nav_menu_item_list = array();
  foreach ((array) $nav_menu_items as $nav_menu_item) {
    if ($nav_menu_item->menu_item_parent == $parent_id) {
      $nav_menu_item_list[] = $nav_menu_item;
      if ($depth) {
        if ($children = get_nav_menu_item_children($nav_menu_item->ID, $nav_menu_items)) {
          $nav_menu_item_list = array_merge($nav_menu_item_list, $children);
        }
      }
    }
  }

  return $nav_menu_item_list;
}
add_action(
  'after_setup_theme',
  function () {
    add_theme_support('html5', ['script', 'style']);
  }
);
function my_deregister_scripts()
{
  wp_deregister_script('wp-embed');
  wp_deregister_script('comment-reply');
}
add_action('wp_footer', 'my_deregister_scripts');

// //aggiungi pagina opzioni per variabili globali
// if (function_exists('acf_add_options_page')) {

//   acf_add_options_page();
// }
