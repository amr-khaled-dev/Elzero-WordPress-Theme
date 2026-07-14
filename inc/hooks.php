<?php

// Add Actions
add_action("wp_enqueue_scripts", "add_styles");
add_action("wp_enqueue_scripts", "add_scripts");
add_action("widgets_init", "enable_widgets");

// Add Filters
add_filter('homepage_random_posts_title', 'add_random_posts_icon');
