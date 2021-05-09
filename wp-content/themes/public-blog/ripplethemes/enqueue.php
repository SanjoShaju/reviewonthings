<?php
function public_blog_scripts() {
	global $public_blog_theme_options;
	/*body  */
    wp_enqueue_style('public-blog-body', '//fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap', array(), null);
    /*heading  */
	wp_enqueue_style('public-heading-font', '//fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null);


	wp_enqueue_style( 'public-style', get_stylesheet_uri(), array(), PUBLIC_BLOG_VERSION );

	wp_style_add_data( 'public-style-rtl', 'rtl', 'replace' );

	wp_enqueue_script( 'public-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), PUBLIC_BLOG_VERSION, true );
	wp_enqueue_script( 'public-index', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), PUBLIC_BLOG_VERSION, true );
	wp_enqueue_script( 'public-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), PUBLIC_BLOG_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'public_blog_scripts' );