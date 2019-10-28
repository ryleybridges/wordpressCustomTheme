<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <!-- <img src="" alt="Water and rocks" class="img-fluid"/> -->
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>)">
            <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="card ml-3 mt-2" style="width: 18rem;">
                    <?php if(has_post_thumbnail()): ?>
                        <div><?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?></div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <?php if (has_post_format('video')): ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-warning">Watch Here</a>
                        <?php elseif (has_post_format('audio')): ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-success">Listen Here</a>
                        <?php elseif (has_post_format('image')): ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-info">Look Here</a>
                        <?php elseif (has_post_format('gallery')): ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-danger">Look Here</a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
