<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <div class="card mb-3 mt-3">
                            <div class="card-header text-center"><h2><?php the_title(); ?></h2></div>
                            <div class="card-body">

                                <div class="row">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div class="col-12 text-center mb-3"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></div>
                                    <?php endif; ?>
                                    <div><?php the_content(); ?></div>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
