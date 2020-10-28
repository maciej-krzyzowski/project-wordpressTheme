<?php get_header() ?>

<?php get_template_part('content') ?>

<div class="last-posts">
    <h2 class="last-post__title">Latest posts</h2>
    <div class="posts__wrapper">
        <?php echo do_shortcode('[lastest-post]'); ?>
    </div>
</div>

<?php get_footer() ?>