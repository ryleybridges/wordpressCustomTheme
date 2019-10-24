<?php
    /*
        Template Name: Large Image
        Template Post Type: post
    */
?>

<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <?php if(has_post_thumbnail()): ?>
                <div class="col-12 text-center my-3"><?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?></div>
           <?php endif; ?>
        </div>
        <div class="row">

            <h1 class="display-4 text-center"><?php the_title(); ?></h1>
        </div>
    </div>

<?php get_footer(); ?>
