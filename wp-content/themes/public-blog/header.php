<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package public_blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'public-blog'); ?></a>
        <?php 
        $header_image = esc_url(get_header_image());
        $header_image_class = ($header_image == "") ? '' : 'header-image';
        $sticky_class = public_blog_get_option('public_blog_sticky_header') ? 'site-header-sticky' : '';
        
        $header_class= $header_image_class." ".$sticky_class;
        ?>

        <!-- header start -->
        <header class="site-header  <?php echo esc_attr($header_class);  ?>"
            style="background-image:url(<?php echo esc_url($header_image) ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="top-header">
                <div class="rpl-container">
                    <div class="top-header-in">
                        <nav class="top-nav">
                            <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-2',
                                            'menu_id'        => 'menu-2',
                                        )
                                    );
                                ?>
                        </nav>
                        <ul class="social-list">
                            <?php
                                do_action('public_blog_social_action')
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="middle-header">
                <div class="rpl-container">
                    <div class="middle-header-in">
                        <!-- .site-branding -->
                        <div class="site-logo">
                            <?php
                                    the_custom_logo();
                                    if (is_front_page() && is_home()) :
                                        ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a></h1>
                                <?php
                                    else :
                                        ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a></p>
                            <?php
                                    endif;
                                    $public_blog_description = get_bloginfo('description', 'display');
                                    if ($public_blog_description || is_customize_preview()) :
                                ?>
                            <p class="site-description">
                                <?php echo esc_html($public_blog_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-menu">
                <div class="canvas-overlay"></div>
                <div class="canvas-sidebar">
                    <a href="#" class="close-sidebar">
                        <?php echo public_blog_get_icon_svg('ui', 'cross' ); ?>
                    </a>
                    <div class=" widget about-widget">
                        <div class="sidebar-title is-center">
                            <h3 class="widget-title"><?php
                            echo esc_html(public_blog_get_option('public_blog_canvas_aboutme_title'))
                            ?></h3>
                        </div>

                        <?php
                            if (esc_url(get_theme_mod('profile_image'))!=''):
                        ?>
                        <figure>
                            <img src="<?php echo esc_url(get_theme_mod('profile_image')); ?>"
                                alt=<?php esc_attr_e( "Profile", 'public-blog' ) ?>>
                        </figure>
                        <?php endif;?>

                        <div class="about-body text-center">
                            <h5 class="author-name">
                                <?php
                                    echo  esc_html(public_blog_get_option('public_blog_canvas_Author_Name'))
                        
                                ?>
                            </h5>
                            <p class="author-description">
                                <?php
                                    echo esc_html(public_blog_get_option('public_blog_canvas_Author_Desc'))
                        
                                ?>
                            </p>
                            <div class="social-icons">
                                <ul>
                                    <?php if(public_blog_get_option('public_blog_canvas_Author_facebook')!=''):?>
                                    <li><a
                                            href="<?php echo  esc_url(public_blog_get_option('public_blog_canvas_Author_facebook')) ?>"><?php echo public_blog_get_icon_svg( 'social', 'facebook')?></a></li>
                                    <?php endif; ?>
                                    <?php if(public_blog_get_option('public_blog_canvas_Author_instagram')!=''):?>

                                    <li><a href="<?php echo  esc_url(public_blog_get_option('public_blog_canvas_Author_instagram')) ?>"><?php echo public_blog_get_icon_svg( 'social', 'instagram');?>
                                    </a></li>
                                    <?php endif; ?>

                                    <?php if(public_blog_get_option('public_blog_canvas_Author_twitter')!=''):?>

                                    <li><a
                                            href="<?php echo  esc_url(public_blog_get_option('public_blog_canvas_Author_twitter')) ?>"><?php echo public_blog_get_icon_svg( 'social', 'twitter');?></a></li>
                                    <?php endif; ?>

                                    <?php if(public_blog_get_option('public_blog_canvas_Author_linkedin')!=''):?>

                                    <li><a
                                            href="<?php echo  esc_url(public_blog_get_option('public_blog_canvas_Author_linkedin')) ?>"><?php echo public_blog_get_icon_svg( 'social', 'linkedin');?></a></li>
                                    <?php endif; ?>

                                    <?php if(public_blog_get_option('public_blog_canvas_Author_youtube')!=''):?>

                                    <li><a
                                            href="<?php echo  esc_url(public_blog_get_option('public_blog_canvas_Author_youtube')) ?>"><?php echo public_blog_get_icon_svg( 'social', 'youtube');?></a></li>
                                    <?php endif; ?>

                                    <?php if(public_blog_get_option('public_blog_canvas_Author_medium')!=''):?>
                                    <li><a
                                            href="<?php echo  esc_url(public_blog_get_option('public_blog_canvas_Author_medium')) ?>"><?php echo public_blog_get_icon_svg( 'social', 'medium');?></a></li>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="bottom-header">
                <div class="rpl-container">
                    <div class="bottom-header-in">
                        
                        <div class="main-navigation-wrap">
                            <div class="mobile-menu">
                                <div class="mobile-menu-button">
                                    <a href="#" class="toggle-button open-button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                    <b><?php  esc_html_e('Menu', 'public-blog') ?></b>
                                </div>
                            </div>
                            <nav class="main-navigation">
                                <a href="#" class="toggle-button active">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'primary-menu',
                                        )
                                    );
                                ?>
                                
                            </nav>
                        </div>
                        <div class="bottom-header-right">
                            <div class="search-toggle">

                                <a href="#">
                                <?php echo public_blog_get_icon_svg('ui', 'search' ); ?>
                                </a>

                                <?php get_search_form() ?>

                            </div>
                            <div class="canvas-button">
                                <a href="#" class="canvas-open">
                                    <span></span>
                                </a>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </header>