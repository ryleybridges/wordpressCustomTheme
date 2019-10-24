<?php
    /*
        Template Name: Search
        Template Post Type: page
    */
?>

<?php get_header(); ?>

<div class="container">

    <form method="get" action="<?php echo home_url(); ?>">
        <div class="form-group">
            <label for="search">Search for Posts</label>
            <input type="hidden" name="post_type" value="post">
            <input type="text" name="s" value="<?php the_search_query(); ?>" aria-describedby="searchPosts">
            <button type="button" class="btn btn-primary">Search</button>
        </div>
    </form>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
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
