<?php
/**
 * public_blog Theme Customizer
 *
 * @package public_blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'public_blog_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function public_blog_default_theme_options() {

		$defaults                                 = array();
		
		//Top header

		// top header social links
		$defaults['public_blog_facebook_social']             =  esc_url('https://www.facebook.com/');
		$defaults['public_blog_twitter_social']             = esc_url('https://www.twitter.com/');
		$defaults['public_blog_instagram_social']         	= esc_url('https://www.instagram.com/');
		$defaults['public_blog_youtube_social']         				= esc_url('https://www.youtube.com/');
		$defaults['public_blog_medium_social']         				   = esc_url('https://www.medium.com/');
		$defaults['public_blog_etsy_social']         				   = esc_url('https://www.etsy.com/');
		$defaults['public_blog_linkedin_social']         				   = esc_url('https://www.linkedin.com/');

	


	

		// category
		
		$defaults['public_blog_hide_category_section']			= 0;

		
		$defaults['public_blog-category1']			= '0';
		$defaults['public_blog-category2']			= '0';
		$defaults['public_blog-category3']			= '0';

		//canvas sidebar
		$defaults['public_blog_canvas_aboutme_title']        = esc_html__( 'About Me', 'public-blog' );
		$defaults['public_blog_canvas_Author_Name']        	= esc_html__( 'I am public blog', 'public-blog' );
		$defaults['public_blog_canvas_Author_Desc']  	  	= esc_html__( 'Hello word I am Public Blog', 'public-blog' );

		//canvas sidebar social share
		$defaults['public_blog_canvas_Author_facebook']  	  	= esc_url('https://www.facebook.com/');
		$defaults['public_blog_canvas_Author_twitter']  	  	= esc_url('https://www.twitter.com/');
		$defaults['public_blog_canvas_Author_linkedin']  	  	= esc_url('https://www.linkedin.com/');
		$defaults['public_blog_canvas_Author_youtube']  	  	= esc_url('https://www.youtube.com/');
		$defaults['public_blog_canvas_Author_instagram']  	  	= esc_url('https://www.instagram.com/');
		$defaults['public_blog_canvas_Author_medium']  	  	= esc_url('https://www.medium.com/');

		// post options
		$defaults['public_blog_post_show_readtime']				= 1;
		$defaults['public_blog_post_show_date']				= 1;
		$defaults['public_blog_post_next_post_link']			= 1;
		$defaults['public_blog_post_excerpt_length']			= 30;
		$defaults['public_blog_readmore_text']        		= esc_html__( 'Read more', 'public-blog' );

		
		// Related Posts
		$defaults['public_blog_you_may_like_title']             = esc_html__( 'Related Post', 'public-blog' );
		$defaults['public_blog_show_related']             = 1;

		// Breadcrumbs
		$defaults['public_blog_show_breadcrumbs']			= 1;

		// others
		$defaults['public_blog_gototop_header']				= 0;
		$defaults['public_blog_sticky_header']				= 0;

		

		//copyright
		$defaults['public_blog_footer_copyright']        		=  esc_html__('Copyright © 2020  All Rights Reserved.','public-blog');
			
		//powered by

		$defaults['public_blog_footer_poweredby']        		=  esc_html__('Powered by : Ripplethemes ','public-blog');
		$defaults['show_logo_in_footer']        		=  '1';

		return $defaults;
	}

endif;



if ( ! function_exists( 'public_blog_get_option' ) ) :

	/**
	 * Get theme option.
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function public_blog_get_option( $key ) {

		if ( empty( $key ) ) {

			return;

		}

		$value            = '';

		$default          = public_blog_default_theme_options();

		$default_value    = null;

		if ( is_array( $default ) && isset( $default[ $key ] ) ) {

			$default_value = $default[ $key ];

		}

		if ( null !== $default_value ) {

			$value = get_theme_mod( $key, $default_value );

		}else {

			$value = get_theme_mod( $key );

		}

		return $value;

	}

endif;


function public_blog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'public_blog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'public_blog_customize_partial_blogdescription',
			)
		);
	}
	$default          = public_blog_default_theme_options();
	// load all custom settings
	require get_template_directory() . '/ripplethemes/customizer-settings/customizer-settings.php';
}
add_action( 'customize_register', 'public_blog_customize_register' );



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function public_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function public_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function public_blog_customize_preview_js() {
	wp_enqueue_script( 'public_blog-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'public_blog_customize_preview_js' );

/**
 * enqueue Script for admin dashboard.
 */

if (!function_exists('public_blog_widgets_backend_enqueue')) :
    function public_blog_widgets_backend_enqueue($hook)
    {
        

        wp_register_script('public_blog-custom-widgets', get_template_directory_uri() . '/assets/js/widget.js', array('jquery'), true);
        
        wp_enqueue_media();
        wp_enqueue_script('public_blog-custom-widgets');
    }

    add_action('admin_enqueue_scripts', 'public_blog_widgets_backend_enqueue');
endif;