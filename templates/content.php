<?php if (get_theme_mod('1902_homePageLayout') === 'vertical'): ?>
    <div class="card ml-3 mt-2 border-primary" style="width: 18rem;">
        <?php if(has_post_thumbnail()): ?>
            <div><?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?></div>
        <?php endif; ?>
        <div class="card-body cardColour">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Read More</a>
        </div>
    </div>
<?php else: ?>
    <div class="card mb-3 mt-3 cardColour border-primary">
        <div class="card-header"><?php the_title(); ?></div>
        <div class="card-body cardColour">
            <div class="row">
                <?php if(has_post_thumbnail()): ?>
                    <div class="col-md-2"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <div class="col-md-9 ml-4">
                        <div><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                <?php else: ?>
                    <div class="col">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
