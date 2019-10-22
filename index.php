<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="card mt-3">
                    <div class="card-header"><?php the_title(); ?></div>
                    <div class="card-body">
                        <div class="row">

                            <?php if(has_post_thumbnail()): ?>
                                <?php if(is_home()): ?>
                                    <div class="col-md-3"><?php the_post_thumbnail('thumbnail'); ?></div>
                                <?php else: ?>
                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if(has_post_thumbnail()): ?>
                                <?php if(is_home()): ?>
                                    <div class="col-md-9">
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                    </div>
                                <?php else: ?>
                                    <?php the_content(); ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if(is_home()): ?>
                                    <div class="col">
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                    </div>
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
