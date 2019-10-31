<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <?php if(has_nav_menu('side_navigation')): ?>
                <div class="col-12 col-md-3">
                    <div class="card h-80 mb-2 mt-2 p-2">
                        <?php wp_nav_menu(array('theme_location' => 'side_navigation')); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <div class="card mb-3 mt-3">
                            <div class="card-header"><?php the_title(); ?></div>
                            <div class="card-body">

                                <div class="row">

                                    <?php if(has_post_thumbnail()): ?>
                                    <?php if(!is_singular()): ?>
                                            <div class="col-md-2"><?php the_post_thumbnail('thumbnail'); ?></div>
                                        <?php else: ?>
                                            <div class="col-12 text-center mb-3"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if(has_post_thumbnail()): ?>
                                        <?php if(!is_singular()): ?>
                                            <div class="col-md-9 ml-4">
                                                <div><?php the_excerpt(); ?></div>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        <?php else: ?>
                                            <div><?php the_content(); ?></div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if(!is_singular()): ?>
                                            <div class="col">
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                            </div>
                                        <?php else: ?>
                                            <?php the_content(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
