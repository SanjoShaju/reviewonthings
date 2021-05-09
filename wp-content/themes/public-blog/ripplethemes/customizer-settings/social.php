<?php
    // Layout Section.

    $wp_customize->add_section('public_blog_my_social',array(
        'title'=>esc_html__( 'Social', 'public-blog' ),
        'description'=>esc_html__( 'Social Links', 'public-blog'),
        'priority'=>'30',
        'panel'      => 'public_blog_options_panal',

    ));
    
        // facebook
    $wp_customize->add_setting( 'public_blog_facebook_social', array(
        'capability' => 'edit_theme_options',
        'default' => $default['public_blog_facebook_social'],
        'sanitize_callback' => 'esc_url_raw',
      ) );
      
      $wp_customize->add_control( 'public_blog_facebook_social', array(
        'type' => 'text',
        'section' => 'public_blog_my_social', // Add a default or your own section
        'settings'=>'public_blog_facebook_social',
        'description' => __( 'Facebook','public-blog' ),
      ) );
      

        // twitter
        $wp_customize->add_setting( 'public_blog_twitter_social', array(
            'capability' => 'edit_theme_options',
            'default' => $default['public_blog_twitter_social'],
            'sanitize_callback' => 'esc_url_raw',
          ) );
          
          $wp_customize->add_control( 'public_blog_twitter_social', array(
            'type' => 'text',
            'section' => 'public_blog_my_social', // Add a default or your own section
            'settings'=>'public_blog_twitter_social',
            'description' => __( 'Twitter','public-blog' ),
          ) );

    
  

              // Instgram
              $wp_customize->add_setting( 'public_blog_instagram_social', array(
                'capability' => 'edit_theme_options',
                'default' => $default['public_blog_instagram_social'],
                'sanitize_callback' => 'esc_url_raw',
              ) );
              
              $wp_customize->add_control( 'public_blog_instagram_social', array(
                'type' => 'text',
                'section' => 'public_blog_my_social', // Add a default or your own section
                'settings'=>'public_blog_instagram_social',
                'description' => __( 'Instagram','public-blog' ),
              ) );

                // Youtube
                $wp_customize->add_setting( 'public_blog_youtube_social', array(
                  'capability' => 'edit_theme_options',
                  'default' => $default['public_blog_youtube_social'],
                  'sanitize_callback' => 'esc_url_raw',
                ) );
                
                $wp_customize->add_control( 'public_blog_youtube_social', array(
                  'type' => 'text',
                  'section' => 'public_blog_my_social', // Add a default or your own section
                  'settings'=>'public_blog_youtube_social',
                  'description' => __( 'Youtube','public-blog' ),
                ) );
                // Linkedin
                $wp_customize->add_setting( 'public_blog_linkedin_social', array(
                  'capability' => 'edit_theme_options',
                  'default' => $default['public_blog_linkedin_social'],
                  'sanitize_callback' => 'esc_url_raw',
                ) );
                
                $wp_customize->add_control( 'public_blog_linkedin_social', array(
                  'type' => 'text',
                  'section' => 'public_blog_my_social', // Add a default or your own section
                  'settings'=>'public_blog_linkedin_social',
                  'description' => __( 'Linkedin','public-blog' ),
                ) );
                // Medium
                $wp_customize->add_setting( 'public_blog_medium_social', array(
                  'capability' => 'edit_theme_options',
                  'default' => $default['public_blog_medium_social'],
                  'sanitize_callback' => 'esc_url_raw',
                ) );
                
                $wp_customize->add_control( 'public_blog_medium_social', array(
                  'type' => 'text',
                  'section' => 'public_blog_my_social', // Add a default or your own section
                  'settings'=>'public_blog_medium_social',
                  'description' => __( 'Medium','public-blog' ),
                ) );
   
                // Etsy
                $wp_customize->add_setting( 'public_blog_etsy_social', array(
                  'capability' => 'edit_theme_options',
                  'default' => $default['public_blog_etsy_social'],
                  'sanitize_callback' => 'esc_url_raw',
                ) );
                
                $wp_customize->add_control( 'public_blog_etsy_social', array(
                  'type' => 'text',
                  'section' => 'public_blog_my_social', // Add a default or your own section
                  'settings'=>'public_blog_etsy_social',
                  'description' => __( 'Etsy','public-blog' ),
                ) );
   
    