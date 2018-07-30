<?php

function tpm_scripts() {
  
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css' , array(), '1.0.0', all);
  // wp_enqueue_script('jscript', get_template_directory_uri() . '/js/jscript.js' , array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'tpm_scripts');