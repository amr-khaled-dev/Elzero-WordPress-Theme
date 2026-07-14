<?php

// Add Styles
function add_styles()
{
    wp_enqueue_style("framework", get_template_directory_uri() . "/css/framework.css", array(), "2.0", "all");
    wp_enqueue_style("font-awesome", get_template_directory_uri() . "/css/all.min.css");
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style("main", get_template_directory_uri() . "/css/main.css", array(), filemtime(get_template_directory() . "/css/main.css"), "all");
}

// Add Scripts
function add_scripts()
{
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.bundle.min.js", array(), false, true);
    wp_enqueue_script("jquery-core", false, array(), false, true);
    wp_enqueue_script("jquery-migrate", false, array(), false, true);
    wp_enqueue_script("slick", get_template_directory_uri() . "/js/slick.min.js", array(), false, true);
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array(), filemtime(get_template_directory() . "/js/main.js"), true);
}
