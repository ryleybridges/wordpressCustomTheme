<?php
    /*
        Template Name: Alternate Post
        Template Post Type: page, post
    */
 ?>

 <?php get_header(); ?>

 <div class="container">
     <div class="form d-flex justify-content-center">
         <input type="text" name="" value="">
         <button type="button" name="button" class="btn btn-primary">Search</button>
     </div>
     <?php if(have_posts()): ?>
         <?php while(have_posts()): the_post(); ?>
             <div class="row">
                 <?php if(has_post_thumbnail()): ?>
                     <div class="col-12 text-center my-3"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></div>
                <?php endif; ?>
             </div>
             <div class="row">
                 <h1 class="display-4"><?php the_title(); ?></h1>
             </div>
             <div class="row">
                 <p><?php the_content(); ?></p>
             </div>
         <?php endwhile; ?>
     <?php endif; ?>
 </div>

 <?php get_footer(); ?>
