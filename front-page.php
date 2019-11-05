<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <!-- <img src="" alt="Water and rocks" class="img-fluid"/> -->
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>)">
            <h1 class="display-3 mainHeaderText"><?php echo get_bloginfo('name'); ?></h1>
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
                <?php get_theme_mod('1902_featuredPost'); ?>
                <?php get_template_part('templates/content', get_post_format()); ?>
            <?php endwhile; ?>

        </div>
        <?php
        $count_posts = wp_count_posts();
        $published_posts = $count_posts->publish;

        $default_posts_per_page = get_option( 'posts_per_page' );
        ?>
        <?php if ($published_posts > $default_posts_per_page): ?>
            <?php
            $args = array(
                'type' => 'array'
            );
            $paginationLinks = paginate_links($args);
            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php foreach($paginationLinks as $link): ?>
                        <li class="page-item">
                            <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <?php next_posts_link( 'Next »', 0 ); ?>
                    </li>
                    <li class="page-item">
                        <?php previous_posts_link( '« Previous' ); ?>
                    </li>
                </ul>
            </nav>

            <img src="<?php echo get_theme_mod('1902_frontPageBottomImage'); ?>" style="width: 100%">

            <?php if(get_theme_mod('1902_frontPageBottomImage')): ?>
                <h2 class="display-3 text-center"><?php echo get_theme_mod('1902_bottomImageText'); ?></h2>
            <?php endif; ?>

            <?php
            for ($i=1; $i <= 3; $i++) {
                if (get_theme_mod('1902_imageCarouselUpload'.$i)) {
                    $firstSlide = $i;
                    break;
                }
            }
            ?>
            <?php if(isset($firstSlide)): ?>
                <div class="container">
                    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php for ($i=1; $i <= 3 ; $i++): ?>
                                <?php if(get_theme_mod('1902_imageCarouselUpload'.$i)): ?>
                                    <div class="carousel-item <?php if($firstSlide === $i){ echo 'active';} ?>">
                                        <img src="<?php echo get_theme_mod('1902_imageCarouselUpload'.$i); ?>" class="d-block w-100" alt="...">
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>



        <?php endif; ?>
    </div>
<?php endif; ?>



<?php get_footer(); ?>
