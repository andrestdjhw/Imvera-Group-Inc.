<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));

  // Explicit chunk-loading base URL — see src/public-path.js for why this
  // is needed (LiteSpeed's JS optimizer breaks webpack's auto publicPath
  // detection, which otherwise causes "Loading chunk ... failed" errors).
  wp_localize_script('ourmainjs', 'imveraBuildPath', trailingslashit(get_theme_file_uri('/build/')));

  wp_localize_script('ourmainjs', 'imveraAjax', [
    'url'   => admin_url('admin-post.php'),
    'nonce' => wp_create_nonce('imvera_inquiry'),
  ]);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');