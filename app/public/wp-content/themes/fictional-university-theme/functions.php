<?php

// Created/defined a brand new function that I chose the name of, within that function
// I called a WordPress function and pointed towards the CSS file that I wanted to load.
function university_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

// Calling in the function, the second argument is the name of the function that I want WP
// to call at a specific moment. The first argument is how I say which moment that will be.
add_action('wp_enqueue_scripts', 'university_files');

?>