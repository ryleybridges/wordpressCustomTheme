<?php

    function mytheme_customize_register( $wp_customize ) {

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

        $wp_customize->add_section( 'footer_info' , array(
            'title'      => __( 'Footer Info', '1902Custom' ),
            'priority'   => 35,
        ) );

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
