<?php

/* --------------------------------------------
    REMOVE ADMIN BAR STYLE
   -------------------------------------------- */
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}



/* --------------------------------------------
    THEME STYLES AND SCRIPTS
   -------------------------------------------- */
function tpm_scripts() {
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('jscript', get_template_directory_uri() . '/js/tpm.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'tpm_scripts');



/* --------------------------------------------
    THEME SETUP FOR MENUS
   -------------------------------------------- */

function tpm_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primäre Header-Navigation');
  register_nav_menu('secondary', 'Sekundäre Footer-Navigation');
}
add_action('init', 'tpm_setup');