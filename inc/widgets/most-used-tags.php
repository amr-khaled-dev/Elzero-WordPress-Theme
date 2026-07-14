<div class="widget most-used-tags">
    <h3 class="widget-title">
        <i class="fa-solid fa-tags"></i>
        Most Used Tags
    </h3>
    <ul>
        <?php
        $tags = get_tags(array(
            'orderby' => 'count',
            'order' => 'DESC',
            'number' => 4
        ));
        foreach ($tags as $tag) :
            echo '<li>';
            echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
            echo '<span class="count">' . $tag->count . '</span>';
            echo '</li>';
        endforeach;
        wp_reset_query();
        ?>
    </ul>
</div>