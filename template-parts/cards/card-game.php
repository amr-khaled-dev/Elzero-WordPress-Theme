<div class="game">
    <a class="thumbnail-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail("full"); ?></a>
    <span class="id"><?php echo get_the_ID(); ?></span>
    <span class="comments"><i class="fa-regular fa-comments fa-fw"></i> <?php comments_number('0', '1', '%'); ?></span>
    <?php
    $author_id = get_the_author_meta('ID');
    $author_avatar = get_avatar($author_id, 64);
    $author_link = get_author_posts_url($author_id);
    echo '<a class="author-avatar" href="' . esc_url($author_link) . '">' . $author_avatar . '</a>';
    ?>
    <div class="info">
        <?php
        $heart = get_post_meta(get_the_ID(), 'heart', true);
        if ($heart) :
            echo '<i class="game-heart fa-regular fa-heart fa-fw"></i>';
        endif; ?>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        <div class="excerpt"><?php echo get_the_excerpt(); ?></div>
        <div class="company">
            <?php
            $company = get_post_meta(get_the_ID(), 'company', true);
            if ($company) :
                echo 'Created By <span>' .  $company . '</span>';
            endif; ?>
        </div>
        <div class="data">
            <span class="date"><i class="fa-regular fa-calendar fa-fw"></i><?php the_time('j F Y'); ?></span>
            <span class="author"><i class="fa-regular fa-user fa-fw"></i><?php the_author(); ?></span>
        </div>
        <div class="tags">
            <!-- <i class="fa-solid fa-tags fa-fw"></i> -->
            <!-- echo get_the_tag_list("", " | "); -->
            <?php
            $tags = get_the_tags();
            if ($tags) :
                foreach ($tags as $tag) : ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)) ?>"><?php echo $tag->name; ?></a>
            <?php
                endforeach;
            endif; ?>
        </div>
    </div>
</div>