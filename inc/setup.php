<?php

// Add Theme Support
add_theme_support("post-thumbnails");
add_theme_support("post-formats", array("video", "audio", "image", "gallery"));
add_theme_support("html5", array("search-form", "comment-form", "comment-list", "gallery", "caption"));

// Register Menu
register_nav_menu("header", "Header Menu");
