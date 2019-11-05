<?php

    function mytheme_customize_register( $wp_customize ) {

        // SETTINGS
        $wp_customize->add_setting( '1902_backgroundColour' , array(
            'default'   => '#d35400',
            'transport' => 'refresh',
        ) );

        $wp_customize->add_setting( '1902_headerFooterColour' , array(
            'default'   => '#2d3436',
            'transport' => 'refresh',
        ) );

        $wp_customize->add_setting( '1902_footerText' , array(
            'transport' => 'refresh',
        ) );

        $wp_customize->add_setting('1902_cardColour', array(
            'default' => '#FFFFFF',
            'transport' => 'refresh'
        ) );

        $wp_customize->add_setting('1902_mainHeaderTextColour', array(
            'default' => '#000000',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('1902_frontPageBottomImage', array(
            'default' => '',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('1902_bottomImageText', array(
            'default' => '',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('1902_sidebarSwitch', array(
            'default' => 'left',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('1902_homePageLayout', array(
            'default' => 'vertical',
            'transport' => 'refresh'
        ));

        for ($i=1; $i <= 3 ; $i++) {
            $wp_customize->add_setting('1902_imageCarouselUpload'.$i, array(
                'default' => '',
                'transport' => 'refresh'
            ));

            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '1902_imageCarouselUpload'.$i, array(
                'label' => __('Image #'.$i.' Upload', '1902Custom'),
                'section' => 'carousel',
                'settings' => '1902_imageCarouselUpload'.$i
            )));
        }

        $wp_customize->add_setting('1902_featuredPost', array(
            'default' => '',
            'transport' => 'refresh'
        ));

        // SECTIONS
        $wp_customize->add_section( 'footer_info' , array(
            'title'      => __( 'Footer Info', '1902Custom' ),
            'priority'   => 35,
        ) );

        $wp_customize->add_section( 'bottom_image' , array(
            'title'      => __( 'Bottom Image', '1902Custom' ),
            'priority'   => 68,
        ) );

        $wp_customize->add_section('layout', array(
            'title' => __('Layout', '1902Custom'),
            'priority' => 50
        ));

        $wp_customize->add_section('carousel', array(
            'title' => __('Image Carousel', '1902Custom'),
            'priority' => 52
        ));

        // CONTROLS
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
            'label'      => __( 'Background Colour', '1902Custom' ),
            'description' => 'Change the background colour',
            'section'    => 'colors',
            'settings'   => '1902_backgroundColour',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_headerFooterColour', array(
            'label'      => __( 'Header Footer Colour', '1902Custom' ),
            'description' => 'Change the header & footer colour',
            'section'    => 'colors',
            'settings'   => '1902_headerFooterColour',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_cardColour', array(
            'label'      => __( 'Card Colour', '1902Custom' ),
            'description' => 'Change the background card colour',
            'section'    => 'colors',
            'settings'   => '1902_cardColour',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_mainHeaderTextColour', array(
            'label'      => __( 'Main Header Text Colour', '1902Custom' ),
            'description' => 'Change the main header text colour',
            'section'    => 'colors',
            'settings'   => '1902_mainHeaderTextColour',
        ) ) );

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, '1902_footerText', array(
            'label'          => __( 'Footer Text', '1902Custom' ),
            'section'        => 'footer_info',
            'settings'       => '1902_footerText',
            'type'           => 'text'
        ) ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '1902_frontPageBottomImage', array(
            'label'          => __( 'Front Page Bottom Image', '1902Custom' ),
            'section'        => 'bottom_image',
            'settings'       => '1902_frontPageBottomImage'
        ) ) );

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, '1902_bottomImageText', array(
            'label'          => __( 'Text over top of bottom image', '1902Custom' ),
            'section'        => 'bottom_image',
            'settings'       => '1902_bottomImageText',
            'type'           => 'text'
        ) ) );

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, '1902_sidebarSwitch', array(
            'label' => __('Switch sidebar from left to right', '1902Custom'),
            'section' => 'layout',
            'settings' => '1902_sidebarSwitch',
            'type' => 'radio',
            'choices' => array(
                'left' => 'Left',
                'right' => 'Right'
            )
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, '1902_homePageLayout', array(
            'label' => __('Switch home page layout from square cards to horizontal cards', '1902Custom'),
            'section' => 'layout',
            'settings' => '1902_homePageLayout',
            'type' => 'radio',
            'choices' => array(
                'vertical' => 'Vertical',
                'horizontal' => 'Horizontal'
            )
        )));

        // $allChoices=array();//define array
        // foreach($nodeids as $field => $value) {
        //     $field_data[$field]=$value;
        // }


        $wp_customize->add_control(new WP_Customize_Control($wp_customize, '1902_featuredPost', array(
            'label' => __('Choose a featured post', '1902Custom'),
            'section' => 'layout',
            'settings' => '1902_featuredPost',
            'type' => 'select',
            'choices' => array (
                $allChoices
            )
        )));

    }

    add_action( 'customize_register', 'mytheme_customize_register' );


    function mytheme_customize_css()
    {
        ?>
             <style type="text/css">
                 body { background-color: <?php echo get_theme_mod('1902_backgroundColour', '#000000'); ?>; }
                 .navColour { background-color: <?php echo get_theme_mod('1902_headerFooterColour', '#2d3436'); ?>; }
                 .cardColour { background-color: <?php echo get_theme_mod('1902_cardColour', '#FFFFFF'); ?>; }
                 .mainHeaderText { color: <?php echo get_theme_mod('1902_mainHeaderTextColour', '#000000'); ?>; }
             </style>
        <?php
    }
    add_action( 'wp_head', 'mytheme_customize_css');
