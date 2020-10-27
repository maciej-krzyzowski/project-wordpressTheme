<?php get_header() ?>

<?php while (have_posts()) : the_post();
    $page_title = strtolower(get_the_title());
    the_title('<h2>','</h2>');
    ?>
    <?php echo the_content(); ?>
<?php endwhile;?>

<div class="posts__wrapper">
    <?php $args = array('tag' => $page_title, 'posts_per_page' => -1,);
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="post">
                <?php the_post_thumbnail(); ?>
                <h2 class="post__subtitle"><?php the_category() ?></h2>
                <h1><a class="post__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; else: ?>
            <p>Sorry, no posts with this tag!</p>
    <?php endif; wp_reset_query(); ?>
</div>

<?php get_template_part('newsletter') ?>

<div class="last-posts">
    <h2 class="last-post__title">Latest posts</h2>
    <div class="posts__wrapper">
        <?php echo do_shortcode('[lastest-post]'); ?>
    </div>
</div>

<?php get_footer() ?>