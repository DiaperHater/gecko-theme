<?php

define('DEBUG', false);
if (!defined('S_VERSION')) {
  define('S_VERSION', DEBUG ? microtime() : '1.0.0');
}

add_theme_support('title-tag');

if (!is_admin()) {

  function gecko_theme_setup()
  {

    // Styles
    wp_enqueue_style('swiper-styles', get_theme_file_uri('/assets/css/swiper.min.css'), array(), '10.0.5', 'all');
    wp_enqueue_style('gecko-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('gecko-styles', get_theme_file_uri('/assets/css/styles.css'), array('gecko-fonts'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('swiper-script', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array(), '10.0.5', true);
    wp_enqueue_script('gecko-script', get_theme_file_uri('/assets/js/main.js'), array('swiper-script'), '1.0.0', true);
  }
  add_action('after_setup_theme', 'gecko_theme_setup');
}

function gecko_admin_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gecko_admin_theme_setup');

function disable_editor_for_pages()
{
  remove_post_type_support('page', 'editor');
}
add_action('init', 'disable_editor_for_pages');

// Dont show admin bar on frontend 
add_filter('show_admin_bar', '__return_false');

// CF7
add_filter('wpcf7_autop_or_not', '__return_false');

function svg_upload_allow($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'svg_upload_allow');

class GeckoTheme
{
  public $current_lang = 'en';

  public function __construct()
  {
    if (function_exists('pll_current_language')) {
      $this->current_lang = pll_current_language();
    }
  }

  public function print_lang_switch()
  {
    if (false === function_exists('pll_the_languages')) {
      return;
    }

    $langs = pll_the_languages(array(
      'raw' => true,
      'hide_current' => true,
    ));

    if ($langs && !empty($langs)) {
      ob_start();
      foreach ($langs as $lang) {
        ?>
        <a href="<?php echo $lang['url'] ?>" class="text-inherit capitalize hover:text-blue-500 duration-200">
          <?php echo $lang['slug'] ?>
        </a>
        <?php
      }
      echo ob_get_clean();
    }
  }
}
$gecko = new GeckoTheme();

require_once get_stylesheet_directory() . '/inc/acf-fields.php';