<?php
if (!is_single()) return;
$random_args = array(
    'posts_per_page' => 4,
    'orderby' => 'rand'
);
$random_query = new WP_Query($random_args);
if ($random_query->have_posts()) : ?>
    <div class="widget random-posts">
        <h3 class="widget-title">
            <i class="fa-solid fa-random"></i>
            Random Posts
        </h3>
        <ul>
            <?php while ($random_query->have_posts()) : $random_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span class="date"><?php echo get_the_date(); ?></span>
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>
<?php endif; ?>