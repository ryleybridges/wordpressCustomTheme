<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
            // echo 'Block number ' . $i . ' is a ' . $allBlocks[$i]['blockName'];
            // echo '<br>';
            if (($allBlocks[$i]['blockName'] === 'core/audio') && ($allBlocks[$i]['blockName'] === 'core/embed-spotify') && ($allBlocks[$i]['blockName'] === 'core/embed-soundcloud')) {
                $firstAudioBlock = $allBlocks[$i];
                break;
            }
            // echo '<pre>';
        }
        // var_dump($firstVideoBlock);
        // die();
    };
?>

<div class="card ml-3 mt-2 border-success" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <?php if($firstAudioBlock): ?>
            <div class="fullAudio">
                <?php echo apply_filters('the_content', render_block($firstAudioBlock)); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
