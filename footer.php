<footer class="bg-dark text-light">
    <div class="container">
        <div class="row footer-links">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt="Logo">
                <p class="description"><?php bloginfo("description"); ?></p>
            </div>
            <div class="col-md-4">
                <h4>Categories</h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo esc_url(get_category_link(8)) ?>">
                            <?php echo get_cat_name(8); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_category_link(16)) ?>">
                            <?php echo get_cat_name(16); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_category_link(11)) ?>">
                            <?php echo get_cat_name(11); ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo esc_url(get_page_link(2)) ?>">
                            <?php echo get_the_title(2); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_page_link(50)) ?>">
                            <?php echo get_the_title(44); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_page_link(50)) ?>">
                            <?php echo get_the_title(50); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div>Copyright &copy; <?php echo date("Y"); ?> - <?php bloginfo("name"); ?> All Rights Reserved</div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons">
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="x-twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>