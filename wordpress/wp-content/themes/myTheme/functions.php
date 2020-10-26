<?php

    if (!function_exists('theme_setup')):
        function theme_setup(){

            register_nav_menus([
                'main-menu' => 'Menu główne',
                'footer-menu' => 'Menu stopka',
                'social-media' => 'Menu social media',
            ]);

            add_theme_support( 'custom-header', array(
                'height' => 521,
                'width' => 1100,
            ));

        }
    endif;
    add_action('after_setup_theme', 'theme_setup');

    function latest_post() {
        $args = array(
            'posts_per_page' => 2,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="post">
                    <?php the_post_thumbnail(); ?>
                    <h2 class="post__subtitle"><?php the_category() ?></h2>
                    <h1><a class="post__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile;
        endif;
    }

    add_shortcode('lastest-post', 'latest_post');

    function my_excerpt_length($length) {
        return 28;
    }

    add_filter('excerpt_length', 'my_excerpt_length');

    function wplab_new_excerpt_more( $more ) {
        return '' . __( '', 'your-text-domain' ) . '';
    }
    add_filter( 'excerpt_more', 'wplab_new_excerpt_more' );

    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
    }

    function add_font_inconsolota() {
        wp_enqueue_style( 'google-font-inconsolota', 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_font_inconsolota' );

    function add_font_ubuntu() {
        wp_enqueue_style( 'google-font-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_font_ubuntu' );

    function add_font_playfair() {
        wp_enqueue_style( 'google-font-playfair', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'add_font_playfair' );

?>