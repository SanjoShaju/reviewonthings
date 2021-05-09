<?php

    $wp_customize->add_section('public_blog_other_options',array(
        'title'=>esc_html__( 'Other Options', 'public-blog' ),
        'description'=>esc_html__( 'Other options', 'public-blog'),
        'priority'=>'30',
        'panel'      => 'public_blog_options_panal',
    ));


 $wp_customize->add_setting(
         'public_blog_sticky_header',
         array(
            'default'   => $default['public_blog_sticky_header'], // Set default value
            'sanitize_callback' => 'public_blog_sanitize_checkbox', // Sanitize input
            )
     );
    
     $wp_customize->add_control(
         new WP_Customize_Control(
                $wp_customize,
                'public_blog_sticky_header', // Setting ID
                array(
                    'label'     => __('Sticky Header', 'public-blog'),
                    'section'   => 'public_blog_other_options', // No hyphen
                    'settings'  => 'public_blog_sticky_header', // Setting ID
                    'type'      => 'checkbox',
                )
            )
     );
 $wp_customize->add_setting(
         'public_blog_gototop_header',
         array(
            'default'   => $default['public_blog_gototop_header'], // Set default value
            'sanitize_callback' => 'public_blog_sanitize_checkbox', // Sanitize input
            )
     );
    
     $wp_customize->add_control(
         new WP_Customize_Control(
                $wp_customize,
                'public_blog_gototop_header', // Setting ID
                array(
                    'label'     => __('Go to top Button', 'public-blog'),
                    'section'   => 'public_blog_other_options', // No hyphen
                    'settings'  => 'public_blog_gototop_header', // Setting ID
                    'type'      => 'checkbox',
                )
            )
     );