<?php get_header(); ?>
<div class="page search-page">
    <div class="container">
        <?php echo generate_headings(
            "Result for " . '"' . get_search_query() . '"',
            "Found [$wp_query->found_posts] Items"
        ); ?>
        <div class="search-results">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="result">
                        <a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="post-excerpt"><?php echo get_the_excerpt(); ?></div>
                        <div class="post-date"><?php the_time('j F Y'); ?></div>
                        <?php if (has_category()) : ?>
                            <div class="post-categories"><?php the_category(' | '); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="no-result">No Result Found</div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>