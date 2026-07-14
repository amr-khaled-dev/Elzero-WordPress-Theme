<?php

function statistics($cat_id)
{
    $main_cats = get_categories(array('child_of' => $cat_id,));
    $main_count = 0;
    foreach ($main_cats as $main_cat) {
        $main_count += $main_cat->category_count;
    }
    wp_reset_query();
    return $main_count;
}

$books_count = statistics(8);
$games_count = statistics(11);
$movies_count = statistics(16);
?>

<div class="widget stats">
    <h3 class="widget-title">
        <i class="fa-solid fa-chart-line"></i>
        Statistics
    </h3>
    <ul>
        <li>
            <span>
                <i class="fa-solid fa-book fa-fw"></i>
                Books
            </span>
            <span><?php echo $books_count; ?></span>
        </li>
        <li>
            <span>
                <i class="fa-solid fa-gamepad fa-fw"></i>
                Games
            </span>
            <span><?php echo $games_count; ?></span>
        </li>
        <li>
            <span>
                <i class="fa-solid fa-film fa-fw"></i>
                Movies
            </span>
            <span><?php echo $movies_count; ?></span>
        </li>
    </ul>
</div>