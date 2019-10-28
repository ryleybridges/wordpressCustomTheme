<div class="card ml-3 mt-2 border-danger" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block">View Gallery</a>
    </div>
</div>
