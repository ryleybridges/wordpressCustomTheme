<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>
    <?php if (has_nav_menu('top_navigation')): ?>
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'top_navigation',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        </div>
    </nav>
    <?php endif; ?>

    <?php if(has_nav_menu('side_navigation')): ?>
        <div class="sidebar container-fluid">
            <ul class="nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                ?>
            </ul>
        </div>
    <?php endif; ?>


    <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="card mt-3">
                    <div class="card-header"><?php the_title(); ?></div>
                    <div class="card-body">

                        <div class="row">

                            <?php if(has_post_thumbnail()): ?>
                                <?php if(is_home()): ?>
                                    <div class="col-md-2"><?php the_post_thumbnail('thumbnail'); ?></div>
                                <?php else: ?>
                                    <div class="col-12 text-center mb-3"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if(has_post_thumbnail()): ?>
                                <?php if(is_home()): ?>
                                    <div class="col-md-10">
                                        <div><?php the_excerpt(); ?></div>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                    </div>
                                <?php else: ?>
                                    <div><?php the_content(); ?></div>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if(is_home()): ?>
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

    <?php wp_footer(); ?>
</body>
</html>
