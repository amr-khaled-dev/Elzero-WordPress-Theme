<div class="book">
    <a class="thumbnail-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail("full"); ?></a>
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <div class="excerpt">
        <?php echo get_the_excerpt(); ?>
    </div>
</div>