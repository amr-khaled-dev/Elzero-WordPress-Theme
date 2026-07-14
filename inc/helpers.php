<?php

// Add Menu to Design
function header_menu()
{
    wp_nav_menu(
        array(
            "theme_location" => "header",
            "container" => false,
            "menu_class" => "",
            "fallback_cb" => "__return_false",
            "items_wrap" => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            "depth" => 2,
            "walker" => new bootstrap_5_wp_nav_menu_walker()
        )
    );
}

// Add Generate Headings Function
function generate_headings($heading, $desc, $style = "title-one")
{
    $output = "";
    $output .= "<div class='title-box'>";
    $output .= "<h2 class='$style'>$heading</h2>";
    $output .= "<p class='description'>$desc</p>";
    $output .= "</div>";
    return $output;
}

// Enable Widgets
function enable_widgets()
{
    register_sidebar(
        array(
            "name" => "Main Sidebar",
            "id" => "main-sidebar",
            "before_widget" => "<div class='widget'>",
            "after_widget" => "</div>",
            "before_title" => "<h3 class='widget-title'>",
            "after_title" => "</h3>"
        )
    );
}

// Add Icons to Random Posts Title
function add_random_posts_icon($title)
{
    global $post;
    if (!$post) {
        return $title;
    };
    $categories = get_the_category($post->ID);
    if (!$categories) {
        return $title;
    }
    foreach ($categories as $cat) {
        if ($cat->category_parent == 16) {
            return '🎬 ' . $title;
        };
        if ($cat->category_parent == 11) {
            return '🎮 ' . $title;
        };
        if ($cat->category_parent == 8) {
            return '📚 ' . $title;
        };
    };
    return $title;
}
