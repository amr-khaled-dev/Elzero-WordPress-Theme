<?php
if (is_category(array(9, 10))) {      // Books Categories
    include(get_template_directory() . '/template-parts/categories/without-sidebar.php');
} else {
    include(get_template_directory() . '/template-parts/categories/default.php');
}
