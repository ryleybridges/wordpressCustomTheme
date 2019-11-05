<?php

    function add_custom_meta_boxes(){
        // id, title, function, type, placement, priority, $args
        add_meta_box( 'moviesInfo', 'More Movies Info', 'moviesInfoCallback', 'movie', 'normal', 'default', null);
        add_meta_box('postDetails', 'Additional Post Info', 'postInfoCallback', 'post', 'normal', 'default', null);
    }

    add_action('add_meta_boxes', 'add_custom_meta_boxes');

    function moviesInfoCallback($post){
        // echo '<div>';
        //     echo '<label>Movie Year</label>';
        //     echo '<input type="number" min="0" max="9999">';
        // echo '</div>';
        require_once get_template_directory() . '/inc/moviesInfoForm.php';

    }

    function postInfoCallback($post){
        require_once get_template_directory() . '/inc/postInfoForm.php';
    }

    function save_moviesInfo_meta_boxes($post_id){
        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
            return;
        }

        $fields = [
            '1902_year',
            '1902_runtime',
            '1902_director'
        ];

        foreach($fields as $field){
            if(array_key_exists($field, $_POST)){
                update_post_meta($post_id, $field, $_POST[$field]);
            }
        }

    }

    function save_postInfo_meta_boxes($post_id){
        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
            return;
        }

        $fields = [
            '1902_postauthor',
            '1902_postcategory'
        ];

        foreach($fields as $field){
            if(array_key_exists($field, $_POST)){
                update_post_meta($post_id, $field, $_POST[$field]);
            }
        }
    }

    add_action('save_post', 'save_moviesInfo_meta_boxes');
    add_action('save_post', 'save_postInfo_meta_boxes');
