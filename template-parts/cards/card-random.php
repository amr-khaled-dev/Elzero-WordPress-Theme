<?php $the_parent = $args['the_parent']; ?>
<div class="post">
    <h3><a href="<?php the_permalink() ?>"><?php echo apply_filters('homepage_random_posts_title', get_the_title()); ?></a></h3>
    <div class="excerpt"><?php echo get_the_excerpt(); ?></div>
    <div class="info">
        <span class="date"><i class="fa-regular fa-calendar fa-fw"></i><?php the_time('j F Y'); ?></span>
        <span class="author"><i class="fa-regular fa-user fa-fw"></i><?php the_author(); ?></span>
        <span class="categories"><i class="fa-solid fa-tags fa-fw"></i><?php echo $the_parent; ?> > <?php echo get_the_category_list(' | '); ?></span>
        <span class="comments"><i class="fa-regular fa-comments fa-fw"></i><?php comments_number('0', '1', '%'); ?></span>
    </div>
</div>