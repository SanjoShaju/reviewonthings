<?php

$wp_customize->add_section( 'public_blog_pro_sec' , array(
    'title'          => 'Upgrade to PRO',
    'description'    => '',
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
   
) );



$wp_customize->add_control( 'public_blog_button_id', array(
    'type' => 'button',
    'settings' => array(),  
    'priority' => 10,
    'section' => 'public_blog_pro_sec',
    'input_attrs' => array(
        'value' => __( 'Upgrade to Pro', 'public-blog' ),
        'class' => 'button-primary',
        'onclick'=>"location.href='https://ripplethemes.com/downloads/public-blog-pro/'"
),
) );

$wp_customize->add_control( 'public_blog_pro_section_label', array(
    'type' => 'button',
    'settings' => array(),  
    'label'=>'Key Features',
    'priority' => 10,
    'section' => 'public_blog_pro_sec',
    'input_attrs' => array(
        'value' => __( 'Fully Responsive', 'public-blog' ),
        'class' => 'button-secondary',
       
),
) );

$wp_customize->add_control( 'public_blog_pro_section_label1', array(
    'type' => 'button',
    'settings' => array(),  
    
    'priority' => 10,
    'section' => 'public_blog_pro_sec',
    'input_attrs' => array(
        'value' => __( 'Live Custumization', 'public-blog' ),
        'class' => 'button-secondary',
       
),
) );

$wp_customize->add_control( 'public_blog_pro_section_label2', array(
    'type' => 'button',
    'settings' => array(),  
    
    'priority' => 10,
    'section' => 'public_blog_pro_sec',
    'input_attrs' => array(
        'value' => __( 'SEO Optimized', 'public-blog' ),
        'class' => 'button-secondary',
       
),
) );

$wp_customize->add_control( 'public_blog_pro_section_label3', array(
    'type' => 'button',
    'settings' => array(),  
    
    'priority' => 10,
    'section' => 'public_blog_pro_sec',
    'input_attrs' => array(
        'value' => __( 'Many more', 'public-blog' ),
        'class' => 'button-secondary',
       
),
) );






