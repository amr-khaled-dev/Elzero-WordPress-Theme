<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page">
            <div class="container">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
<?php endwhile;
    wp_reset_postdata();
endif; ?>
<?php get_footer() ?>