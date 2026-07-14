<?php if (!is_user_logged_in()) : ?>
    <div class="widget">
        <h3 class="widget-title">Advertisement</h3>
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/offer-one.jpg" alt="Advertisement" class="ad-image">
        </a>
    </div>
<?php endif; ?>