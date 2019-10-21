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
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text"><div><?php the_content(); ?></div></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    <?php wp_footer(); ?>
</body>
</html>
