<?php get_header() ?>

<h2>ABOUT ME</h2>
<div class="about-me"><?php the_content(); ?></div>

<?php get_template_part('newsletter') ?>

<div class="last-posts">
    <h2 class="last-post__title">Latest posts</h2>
    <div class="posts__wrapper">
        <?php echo do_shortcode('[lastest-post]'); ?>
    </div>
</div>

<?php get_footer() ?>