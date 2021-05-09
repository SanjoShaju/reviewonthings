<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package public_blog
 */
get_header();

?>
<div id="content" class="site-content">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            
            <?php get_template_part('ripplethemes/contents/single-highlighted'); ?>


        <div class="rpl-container">
            <div id="primary" class="content-area primary">
                <main id="main" class="site-main">

                    <?php get_template_part('ripplethemes/contents/single-content'); ?>
                    
                    <?php if ( ! is_singular( 'attachment' ) ) : ?>
                        <?php get_template_part( 'ripplethemes/templates-parts/authorbio' ); ?>
                    <?php endif; ?>

                    <?php
                    $next_post = get_next_post();
                    $previous_post = get_previous_post();
                    $public_next_icon = is_rtl() ? public_blog_get_icon_svg(  'ui', 'arrow_left') : public_blog_get_icon_svg( 'ui', 'arrow_right');
                    $public_previous_icon = is_rtl() ? public_blog_get_icon_svg( 'ui', 'arrow_right') : public_blog_get_icon_svg(  'ui', 'arrow_left');
                    
                    if(!empty( $previous_post )){
                        $previous_html='<div class="post-nav-content"> <span class="nav-subtitle">' . esc_html__( 'Next:', 'public-blog' ) .
                        '</span> <span class="nav-title">%title</span></div><div class="post-nav-thumb">'.
                       $public_previous_icon.  get_the_post_thumbnail($previous_post->ID,'thumbnail').
                       '</div>';
                      }
                    else{
                        $previous_html='<div class="post-nav-content"> <span class="nav-subtitle">' . esc_html__( 'Next:', 'public-blog' ) .
                        '</span> <span class="nav-title">%title</span></div><div class="post-nav-thumb">'.
                       $public_previous_icon.
                       '</div>';
                    }
                   

                    if (!empty( $next_post )){
                        $next_html='<div class="post-nav-content"> <span class="nav-subtitle">' . esc_html__( 'Next:', 'public-blog' ) .
                         '</span> <span class="nav-title">%title</span></div><div class="post-nav-thumb">'.
                        $public_next_icon.  get_the_post_thumbnail($next_post->ID,'thumbnail').
                        '</div>';
                          
                    }
                    else{
                        $next_html='<div class="post-nav-content"> <span class="nav-subtitle">' . esc_html__( 'Next:', 'public-blog' ) .
                        '</span> <span class="nav-title">%title</span></div><div class="post-nav-thumb">'.
                       $public_next_icon.
                       '</div>';
                    }

                    
                   
                    
                    if(public_blog_get_option('public_blog_post_next_post_link')){
                        the_post_navigation(
                            array(
                                'prev_text' => $previous_html,
                                'next_text' => $next_html,
                            )
                        );

                    }

                    
                    if(public_blog_get_option('public_blog_show_related')) :
                        do_action( 'public_blog_related_post' );
                    endif; 
            
                ?>


            </main>
            <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                endwhile; 
            ?>
        </div>
    </div>
</div>
<?php

    get_footer();
    ?>