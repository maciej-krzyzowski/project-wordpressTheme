<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
        <?php bloginfo('description'); ?>
    </title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"/>
    <?php wp_head() ?>
</head>
<body>
    <nav class="nav">
        <div class='nav__container'>
            <a class='nav__logo' href='<?php bloginfo('wpurl')?>'><?php bloginfo('name'); ?></a>
            <?php wp_nav_menu(['theme_location' => 'main-menu', 'fallback_cb' => false]) ?>
        </div>
    </nav>
    <?php if(get_queried_object_id() !== 24 & get_queried_object_id() !== 22) : ?>
        <?php the_custom_header_markup(); ?>
    <?php endif; ?>

    <div class='container'>