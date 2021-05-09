<?php
    // Layout Section.

    $wp_customize->add_section('public_blog_footer_options',array(
        'title'=>esc_html__( 'Footer Options', 'public-blog' ),
        'description'=>esc_html__( 'Footer options', 'public-blog'),
        'priority'=>'30',
        'panel'      => 'public_blog_options_panal',
    ));



        
        $wp_customize->add_setting( 'public_blog_footer_copyright',
        array(
            'default'           => $default['public_blog_footer_copyright'],
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
        );

        $wp_customize->add_control( 'public_blog_footer_copyright',
        array(
            'label'    => esc_html__( 'Copyright Text', 'public-blog' ),
            'section'  => 'public_blog_footer_options',
            'type'     => 'textarea',
            'priority' => 40,
            'settings'  => 'public_blog_footer_copyright', // Setting ID

        )
        );

          
            $wp_customize->add_setting( 'public_blog_footer_poweredby',
            array(
                'default'           => $default['public_blog_footer_poweredby'],
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'sanitize_text_field',
            )
            );
    
            $wp_customize->add_control( 'public_blog_footer_poweredby',
            array(
                'label'    => esc_html__( 'Powered By Text', 'public-blog' ),
                'section'  => 'public_blog_footer_options',
                'type'     => 'textarea',
                'priority' => 40,
                'settings'  => 'public_blog_footer_poweredby', // Setting ID
    
            )
            );


