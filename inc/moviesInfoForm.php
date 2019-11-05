<div class="">
    <label for="">Year Released</label>
    <input type="number" name="1902_year" min="0" max="9999" value="<?php echo get_post_meta(get_the_ID(),
'1902_year', true); ?>">
    <label for="">Film Runtime</label>
    <input type="number" name="1902_runtime" min="0" max="300" value="<?php echo get_post_meta(get_the_ID(),
'1902_runtime', true); ?>">
    <label for="">Director</label>
    <input type="text" name="1902_director" value="<?php echo get_post_meta(get_the_ID(),
'1902_director', true); ?>">
</div>
