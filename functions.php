<?php

function grodriguez_config() {

    echo "Configuro el tema";

}
add_action('after_setup_theme', 'grodriguez_config');

function grodriguez_scripts() {
   wp_enqueue_script('bootstrap_js', get_theme_file_uri('inc/js/bootstrap.min.js'), array('jquery'), '5.3.8', true);
   wp_enqueue_style('bootstrap_css', get_theme_file_uri('inc/css/bootstrap.min.css'), array(), '5.3.8', 'all');
   
}
add_action('wp_enqueue_scripts', 'grodriguez_scripts');

    