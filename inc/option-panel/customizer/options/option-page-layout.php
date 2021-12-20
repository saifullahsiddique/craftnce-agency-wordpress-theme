<?php
    $wp_customize->add_section( 'craftnce_page_layouts', array(
        'title'      => __( 'Layout', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Page Layout Select
     */
    $wp_customize->add_setting('craftnce_page_layout_settings', array(
        'default'           => 'full_width',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));

    $wp_customize->add_control('craftnce_page_layout_ctrl', array(
        'label'             =>  __('Page Layout', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_page_layout_settings',
        'type'              =>  'select',
        'choices' => array(
            'no_sidebar'                =>  'Full Width',
            'left_sidebar'              =>  'Left Sidebar',
            'right_sidebar'             =>  'Right Sidebar',
        ),
    ));

    /**
     * Blog Single Page Layout Select
     */
    $wp_customize->add_setting('craftnce_single_blog_page_layout_settings', array(
        'default'           => 'full_width',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));
    $wp_customize->add_control('craftnce_single_blog_page_layout_ctrl', array(
        'label'             =>  __('Blog Single Layout', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_single_blog_page_layout_settings',
        'type'              =>  'select',
        'choices' => array(
            'no_sidebar'                =>  'Full Width',
            'left_sidebar'              =>  'Left Sidebar',
            'right_sidebar'             =>  'Right Sidebar',
        ),
    ));

    /**
     * Show breadcrumb
     */
    $wp_customize->add_setting('craftnce_show_breadcrumb_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_breadcrumb_ctrl', array(
        'label'             =>  __('Show breadcrumb', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_show_breadcrumb_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Page - Top and Bottom Padding
     */
    $wp_customize->add_setting('craftnce_page_top_bottom_container_padding_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_page_top_bottom_container_padding_ctrl', array(
        'label'             =>  __('Page container default padding (top & bottom)', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_page_top_bottom_container_padding_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Page - Social Share
     */

     
    $wp_customize->add_setting('craftnce_single_blog_page_social_share_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_single_blog_page_social_share_ctrl', array(
        'label'             =>  __('Show ingle blog page social share', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_single_blog_page_social_share_setting',
        'type'              =>  'checkbox'
    ));