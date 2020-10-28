<?php get_header() ?>

<?php while (have_posts()) : the_post();
    $page_title = strtolower(get_the_title());
    the_title('<h2>','</h2>');
    ?>
    <?php echo the_content(); ?>
<?php endwhile;?>

<?php get_footer() ?>