<?php get_header(); ?>
<div class="homepage">
    <!-- Start Introduction Section -->
    <div class="section introduction">
        <div class="container">
            <?php
            echo generate_headings(
                "Welcome to " . get_bloginfo('name'),
                "We are Happy to help you.",
                "title-two"
            );
            get_search_form();
            ?>
        </div>
    </div>
    <!-- End Introduction Section -->
    <!-- Start Movies Section -->
    <div class="section movies">
        <div class="container">
            <?php echo generate_headings("Movies", "Latest Added Movies", "title-two"); ?>
            <div class="single-post">
                <?php
                $movies_args = array(
                    'posts_per_page' => -1,
                    'cat'            => 16
                );
                $movies = new WP_Query($movies_args);
                if ($movies->have_posts()) :
                    while ($movies->have_posts()) :
                        $movies->the_post(); ?>
                        <a class="thumbnail-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail("full"); ?></a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End Movies Section -->
    <!-- Start Books Section -->
    <div class="section books">
        <div class="container">
            <?php echo generate_headings("Books", "Latest Added Books", "title-two"); ?>
            <div class="multiple-posts">
                <?php
                $books_args = array(
                    'posts_per_page' => -1,
                    'cat'            => 8
                );
                $books = new WP_Query($books_args);
                if ($books->have_posts()) :
                    while ($books->have_posts()) :
                        $books->the_post();
                        get_template_part("template-parts/cards/card", "book");
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End Books Section -->
    <!-- Start Random Posts Section -->
    <div class="section random-posts">
        <div class="container">
            <?php echo generate_headings("Random Posts", "Random Posts From Our Blog", "title-four"); ?>
            <div class="posts-container">
                <?php
                $random_args = array(
                    'posts_per_page' => 8,
                    'orderby'        => 'rand'
                );
                $random = new WP_Query($random_args);
                if ($random->have_posts()) :
                    while ($random->have_posts()) :
                        $random->the_post();
                        $categories = get_the_category();
                        $the_parent = '';
                        foreach ($categories as $category) :
                            if ($category->parent) :
                                $parent_cat = get_category($category->parent);
                                $the_parent = '<a href="' . esc_url(get_category_link($parent_cat->term_id)) . '">' . $parent_cat->name . '</a>';
                            endif;
                        endforeach;
                        get_template_part("template-parts/cards/card", "random", array('the_parent' => $the_parent));
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End Random Posts Section -->
    <!-- Start Games Section -->
    <div class="section games">
        <div class="container">
            <?php echo generate_headings("Games", "Latest Added Games", "title-two"); ?>
            <div class="games-container">
                <?php
                $games_args = array(
                    'posts_per_page' => -1,
                    'cat'            => 11
                    // 'meta_key'       => 'heart',    // Select post using custom field
                    // 'meta_value'     => '1'         // Select post using custom field value
                );
                $games = new WP_Query($games_args);
                if ($games->have_posts()) :
                    while ($games->have_posts()) :
                        $games->the_post();
                        get_template_part("template-parts/cards/card", "game");
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End Games Section -->
    <!-- Start Stats Section -->
    <div class="section stats">
        <div class="container">
            <?php echo generate_headings("General Statistics", "some General Statistics About Our Website", "title-two"); ?>
        </div>
        <div class="stats-container">
            <div class="stat-box">
                <img src="<?php echo get_template_directory_uri() . '/imgs/users.png' ?>" alt="Users">
                <span>Users</span>
                <span class="count"><?php echo count_users()['total_users']; ?></span>
            </div>
            <div class="stat-box second">
                <img src="<?php echo get_template_directory_uri() . '/imgs/posts.png' ?>" alt="Users">
                <span>Posts</span>
                <span class="count"><?php echo wp_count_posts()->publish; ?></span>
            </div>
            <div class="stat-box">
                <img src="<?php echo get_template_directory_uri() . '/imgs/comments.png' ?>" alt="Users">
                <span>Comments</span>
                <span class="count"><?php echo wp_count_comments()->approved; ?></span>
            </div>
        </div>
    </div>
    <!-- End Stats Section -->
    <!-- Start Cats Stats Section -->
    <div class="section cats-stats">
        <div class="container">
            <?php echo generate_headings("Categories Statistics", "Some Statistics About Our Categories", "title-four"); ?>
            <div class="stats-container">
                <div class="stat-box">
                    <i class="fa-solid fa-gamepad"></i>
                    <span>Games</span>
                    <span class="count">
                        <?php
                        $games = get_posts(array('category' => 11, 'numberposts' => -1));
                        echo count($games);
                        ?>
                    </span>
                </div>
                <div class="stat-box">
                    <i class="fa-solid fa-film"></i>
                    <span>Movies</span>
                    <span class="count">
                        <?php
                        $games = get_posts(array('category' => 16, 'numberposts' => -1));
                        echo count($games);
                        ?>
                    </span>
                </div>
                <div class="stat-box">
                    <i class="fa-solid fa-book"></i>
                    <span>Books</span>
                    <span class="count">
                        <?php
                        $games = get_posts(array('category' => 8, 'numberposts' => -1));
                        echo count($games);
                        ?>
                    </span>
                </div>
                <div class="stat-box">
                    <i class="fa-solid fa-link"></i>
                    <span>Websites</span>
                    <span class="count">0</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cats Stats Section -->
    <!-- Start Newsletter -->
    <div class="newsletter">
        <div class="container">
            <h2>Newsletter</h2>
            <p>Subscribe to our newsletter and get our newest updates right in your inbox.</p>
            <form method="post">
                <input type="email" name="email" placeholder="Enter Your Email">
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </div>
    <!-- End Newsletter -->
</div>

<?php get_footer(); ?>