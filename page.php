<?php get_header(); ?>

<div class="container">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="card mb-3 mt-3">
                <div class="card-header"><?php the_title(); ?></div>
                <div class="card-body">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
