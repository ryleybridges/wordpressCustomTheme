<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
            // echo 'Block number ' . $i . ' is a ' . $allBlocks[$i]['blockName'];
            // echo '<br>';
            if (($allBlocks[$i]['blockName'] === 'core-embed/youtube') || ($allBlocks[$i]['blockName'] === 'core/video') || ($allBlocks[$i]['blockName'] === 'core-embed/vimeo')) {
                $firstVideoBlock = $allBlocks[$i];
                break;
            }
            // echo '<pre>';
        }
        // var_dump($firstVideoBlock);
        // die();
    };
?>

<div class="card ml-3 mt-2 border-warning" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <?php if($firstVideoBlock): ?>
            <div class="fullVideo">
                <?php echo apply_filters('the_content', render_block($firstVideoBlock)); ?>
            </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-block">Watch Here</a>
    </div>
</div>
