<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-single">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-content">
                                <div class="post-thumbnail"><?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?></div>
                                <div class="post-body"><?php the_content(); ?></div>
                                <div class="post-comments"><?php comments_template(); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    wp_reset_postdata();
endif; ?>

    <?php get_footer(); ?>