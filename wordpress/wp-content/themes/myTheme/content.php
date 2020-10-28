<?php if(have_posts()) : while(have_posts() ) : the_post(); ?>
    <h1 class="single__title"><?php the_title(); ?></h1>
    <div class="single__content">
        <?php the_content(); ?>
    </div>
<?php endwhile; else: ?>
    <h3>Brak postów</h3>
<?php endif; ?>
