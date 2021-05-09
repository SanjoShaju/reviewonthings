<?php

 
$wp_customize->add_section('public_blog_single_page_section',array(
    'title'=>esc_html__( 'Single Page Settings', 'public-blog' ),
    'panel'      => 'public_blog_options_panal',
    
    'priority'=>'30'    
));

$wp_customize->add_setting( 'public_blog_you_may_like_title',
        array(
            'default'           => $default['public_blog_you_may_like_title'],
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control( 'public_blog_you_may_like_title',
        array(
            'label'    => esc_html__( 'Related Posts Title', 'public-blog' ),
            'section'  => 'public_blog_single_page_section',
            'type'     => 'text',
            'priority' => 100,
        )
    );

    
    $wp_customize->add_setting(
        'public_blog_show_related',
        array(
           'default'            => $default['public_blog_show_related'], // Set default value
           'sanitize_callback'  => 'public_blog_sanitize_checkbox', // Sanitize input
           )
    );
   
    $wp_customize->add_control(
        new WP_Customize_Control(
               $wp_customize,
               'public_blog_show_related', // Setting ID
               array(
                   'label'     => __('Show Related Posts', 'public-blog'),
                   'section'   => 'public_blog_single_page_section', // No hyphen
                   'settings'  => 'public_blog_show_related', // Setting ID
                   'type'      => 'checkbox',
               )
           )
    );

    $wp_customize->add_setting(
        'public_blog_post_next_post_link',
        array(
           'default'   => $default['public_blog_post_next_post_link'], // Set default value
           'sanitize_callback' => 'public_blog_sanitize_checkbox', // Sanitize input
           )
    );
   
    $wp_customize->add_control(
        new WP_Customize_Control(
               $wp_customize,
               'public_blog_post_next_post_link', // Setting ID
               array(
                   'label'     => __('Next/Previous Post Link', 'public-blog'),
                   'section'   => 'public_blog_single_page_section', // No hyphen
                   'settings'  => 'public_blog_post_next_post_link', // Setting ID
                   'type'      => 'checkbox',
               )
           )
    );
