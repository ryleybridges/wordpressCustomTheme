<?php get_header(); ?>

<div class="container">
    <div class="row">

        <?php if(has_nav_menu('side_navigation')): ?>
            <?php if(get_theme_mod('1902_sidebarSwitch') === 'left'): ?>
                <div class="col-4 col-md-3">
                    <div class="card h-80 mb-2 mt-2 p-2">
                        <?php wp_nav_menu(array('theme_location' => 'side_navigation')); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="col-8">
                        <div class="card mb-3 mt-3">
                            <div class="card-header"><?php the_title(); ?></div>
                            <div class="card-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        <?php if(has_nav_menu('side_navigation')): ?>
            <?php if(get_theme_mod('1902_sidebarSwitch') === 'right'): ?>
                <div class="col-4 col-md-3">
                    <div class="card h-80 mb-2 mt-2 p-2">
                        <?php wp_nav_menu(array('theme_location' => 'side_navigation')); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
