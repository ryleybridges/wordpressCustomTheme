<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
            // echo 'Block number ' . $i . ' is a ' . $allBlocks[$i]['blockName'];
            // echo '<br>';
            if ($allBlocks[$i]['blockName'] === 'core/image') {
                $firstImageBlock = $allBlocks[$i];
                break;
            }
            // echo '<pre>';
        }
        // var_dump($firstVideoBlock);
        // die();
    };
?>

<?php if (get_theme_mod('1902_homePageLayout') === 'vertical'): ?>
    <div class="card ml-3 mt-2 border-info" style="width: 18rem;">
        <div class="card-body cardColour">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <?php if($firstImageBlock): ?>
                <div class="fullImage">
                    <?php echo apply_filters('the_content', render_block($firstImageBlock)); ?>
                </div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View</a>
        </div>
    </div>
<?php else: ?>
    <div class="card mb-3 mt-3 cardColour border-info" style="width: 100vw;">
        <div class="card-header"><?php the_title(); ?></div>
        <div class="card-body cardColour">
            <div class="row">
                <?php if($firstImageBlock): ?>
                    <div class="col-md-2"><?php echo apply_filters('the_content', render_block($firstImageBlock)); ?></div>
                    <div class="col-md-9 ml-4">
                        <a href="<?php the_permalink(); ?>" class="btn btn-info">View More</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
