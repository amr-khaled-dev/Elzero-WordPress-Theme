<div class="widget latest-posts-imgs">
    <h3 class="widget-title">
        <i class="fa-solid fa-image"></i>
        Latest Games & Movies
    </h3>
    <ul>
        <?php
        $latest_gm = new WP_Query(array(
            'cat'             => '11, 16',
            'order'           => 'DESC',
            'orderby'         => 'id',
            'posts_per_page'  => 6
        ));
        if ($latest_gm->have_posts()) :
            while ($latest_gm->have_posts()) : $latest_gm->the_post(); ?>
                <li>
                    <?php the_post_thumbnail(); ?>
                    <div class="info">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="excerpt"><?php echo get_the_excerpt(); ?></div>
                    </div>
                </li>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </ul>
</div>