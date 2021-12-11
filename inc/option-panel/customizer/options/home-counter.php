<?php
    $wp_customize->add_section( 'craftnce_home_page_counter', array(
        'title'      => __( 'Counter Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * counter Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_home_counter_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_show_home_counter_section_ctrl', array(
        'label'             =>  __('Show counter section', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_show_home_counter_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * counter Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_counter_heading_setting', array(
        'default'           => 'Helping dreams to do ',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_counter_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_home_counter_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * counter Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_counter_subheading_setting', array(
        'default'           => 'featured case study ',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_counter_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_home_counter_subheading_setting',
        'type'              =>  'text'
    ));
    
    // counter Items
    $wp_customize->add_setting( 'craftnce_home_counter_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_show_home_counter_item_ctrl', array(
        'label'                                             =>  esc_html__('Counter Item','craftnce'),
        'section'                                           =>  'craftnce_home_page_counter',
        'settings'                                          =>  'craftnce_home_counter_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));

    function repeater_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_show_home_counter_item_ctrl' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Counter Numbers','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','repeater_labels', 10 , 3 );