<?php if(have_posts()) : while(have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
<?php endwhile; else: ?>
    <h3>Brak postów</h3>
<?php endif; ?>
