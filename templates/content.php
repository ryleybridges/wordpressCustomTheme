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
