<?php


$wp_customize->add_section('public_blog_breadcrumbs',array(
    'title'=>esc_html__( 'Breadcrumbs', 'public-blog' ),
    'panel'      => 'public_blog_options_panal',
    
    'priority'=>'30'    
));

$wp_customize->add_setting(
    'public_blog_show_breadcrumbs',
    array(
       'default'   => $default['public_blog_show_breadcrumbs'], // Set default value
       'sanitize_callback' => 'public_blog_sanitize_checkbox', // Sanitize input
       )
);

$wp_customize->add_control(
    new WP_Customize_Control(
           $wp_customize,
           'public_blog_show_breadcrumbs', // Setting ID
           array(
               'label'     => __('Show Breadcrumbs', 'public-blog'),
               'section'   => 'public_blog_breadcrumbs', // No hyphen
               'settings'  => 'public_blog_show_breadcrumbs', // Setting ID
               'type'      => 'checkbox',
           )
       )
);
