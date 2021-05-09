<?php


$wp_customize->add_section('public_blog_slider_setting',array(
  'title'=>esc_html__( 'Canvas Slider', 'public-blog' ),
  'panel'      => 'public_blog_options_panal',        
  'priority'=>'30'    
));




// About me text
   // Read More Text
   $wp_customize->add_setting( 'public_blog_canvas_aboutme_title',
   array(
          'capability'        => 'edit_theme_options',
          'default'           => $default['public_blog_canvas_aboutme_title'],
          'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'public_blog_canvas_aboutme_title', array(
       'type' => 'text',
       'section' => 'public_blog_slider_setting', 
       'settings'  => 'public_blog_canvas_aboutme_title',
       
       'description' => __( 'About Title','public-blog' ),
     ) );

    

     $wp_customize->add_setting('profile_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
        'sanitize_callback'=>'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'profile_image', array(
        'label'             => __('Select Profile Image', 'public-blog'),
        'section'           => 'public_blog_slider_setting',
        'settings'          => 'profile_image',    
    )));

    $wp_customize->add_setting( 'public_blog_canvas_Author_Name',
    array(
           'capability'        => 'edit_theme_options',
           'default'           => $default['public_blog_canvas_Author_Name'],
           'sanitize_callback' => 'sanitize_text_field',
     ) );
 
     $wp_customize->add_control( 'public_blog_canvas_Author_Name', array(
        'type' => 'text',
        'section' => 'public_blog_slider_setting', 
        'settings'  => 'public_blog_canvas_Author_Name',
        
        'description' => __( 'Author Name','public-blog' ),
      ) );

      $wp_customize->add_setting( 'public_blog_canvas_Author_Desc',
      array(
             'capability'        => 'edit_theme_options',
             'default'           => $default['public_blog_canvas_Author_Desc'],
             'sanitize_callback' => 'sanitize_text_field',
       ) );
   
       $wp_customize->add_control( 'public_blog_canvas_Author_Desc', array(
          'type' => 'textarea',
          'section' => 'public_blog_slider_setting', 
          'settings'  => 'public_blog_canvas_Author_Desc',
          
          'description' => __( 'Author Description','public-blog' ),
        ) );


        // Author social Links
        $wp_customize->add_setting( 'public_blog_canvas_Author_youtube', array(
          'capability' => 'edit_theme_options',
          'default' => $default['public_blog_canvas_Author_youtube'],
          'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'public_blog_canvas_Author_youtube', array(
          'type' => 'text',
          'section' => 'public_blog_slider_setting', // Add a default or your own section
          'settings'=>'public_blog_canvas_Author_youtube',
          'description' => __( 'Youtube','public-blog' ),
        ) );

        $wp_customize->add_setting( 'public_blog_canvas_Author_twitter', array(
          'capability' => 'edit_theme_options',
          'default' => $default['public_blog_canvas_Author_twitter'],
          'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'public_blog_canvas_Author_twitter', array(
          'type' => 'text',
          'section' => 'public_blog_slider_setting', // Add a default or your own section
          'settings'=>'public_blog_canvas_Author_twitter',
          'description' => __( 'Twitter','public-blog' ),
        ) );

        $wp_customize->add_setting( 'public_blog_canvas_Author_facebook', array(
          'capability' => 'edit_theme_options',
          'default' => $default['public_blog_canvas_Author_facebook'],
          'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'public_blog_canvas_Author_facebook', array(
          'type' => 'text',
          'section' => 'public_blog_slider_setting', // Add a default or your own section
          'settings'=>'public_blog_canvas_Author_facebook',
          'description' => __( 'Facebook','public-blog' ),
        ) );

        $wp_customize->add_setting( 'public_blog_canvas_Author_linkedin', array(
          'capability' => 'edit_theme_options',
          'default' => $default['public_blog_canvas_Author_linkedin'],
          'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'public_blog_canvas_Author_linkedin', array(
          'type' => 'text',
          'section' => 'public_blog_slider_setting', // Add a default or your own section
          'settings'=>'public_blog_canvas_Author_linkedin',
          'description' => __( 'Linkedin','public-blog' ),
        ) );

        $wp_customize->add_setting( 'public_blog_canvas_Author_instagram', array(
          'capability' => 'edit_theme_options',
          'default' => $default['public_blog_canvas_Author_instagram'],
          'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'public_blog_canvas_Author_instagram', array(
          'type' => 'text',
          'section' => 'public_blog_slider_setting', // Add a default or your own section
          'settings'=>'public_blog_canvas_Author_instagram',
          'description' => __( 'Instagram','public-blog' ),
        ) );
        
        $wp_customize->add_setting( 'public_blog_canvas_Author_medium', array(
          'capability' => 'edit_theme_options',
          'default' => $default['public_blog_canvas_Author_medium'],
          'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'public_blog_canvas_Author_medium', array(
          'type' => 'text',
          'section' => 'public_blog_slider_setting', // Add a default or your own section
          'settings'=>'public_blog_canvas_Author_medium',
          'description' => __( 'Medium','public-blog' ),
        ) );