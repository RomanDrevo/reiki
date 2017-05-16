<?php

add_action( 'wp_enqueue_scripts', 'twenty_sixteen_child_styles' );
function twenty_sixteen_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

