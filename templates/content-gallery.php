<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
            // echo 'Block number ' . $i . ' is a ' . $allBlocks[$i]['blockName'];
            // echo '<br>';
            if ($allBlocks[$i]['blockName'] === 'core/gallery') {
                $firstGalleryBlock = $allBlocks[$i];
                break;
            }
            // echo '<pre>';
        }
        // var_dump($firstVideoBlock);
        // die();
    };
?>

<?php if (get_theme_mod('1902_homePageLayout') === 'vertical'): ?>
    <div class="card ml-3 mt-2 border-danger" style="width: 18rem;">
        <div class="card-body cardColour">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <?php if($firstGalleryBlock): ?>
                <div class="fullGallery">
                    <?php echo apply_filters('the_content', render_block($firstGalleryBlock)); ?>
                </div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block">View Gallery</a>
        </div>
    </div>
<?php else: ?>
    <div class="card mb-3 mt-3 cardColour border-danger">
        <div class="card-header"><?php the_title(); ?></div>
        <div class="card-body cardColour">
            <div class="row">
                <?php if($firstGalleryBlock): ?>
                    <div class="col-md-2"><?php echo apply_filters('the_content', render_block($firstGalleryBlock)); ?></div>
                    <div class="col-md-9 ml-4">
                        <a href="<?php the_permalink(); ?>" class="btn btn-danger">View Gallery</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
