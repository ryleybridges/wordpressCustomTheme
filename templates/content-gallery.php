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
