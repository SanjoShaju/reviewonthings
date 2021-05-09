<div class="main-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="main-entry-content is-flex is-start is-align-start">
                <div class="entry-footer is-horiz is-start">
                    <?php do_action('public_blog_social_sharing', get_the_ID());?>
                </div>
                <div class="entry-content">
                    <?php the_content();
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'public-blog' ),
                            'after'  => '</div>',
                        ) );
                     ?>
                </div>
                
            </div>
        
            
    </article>
</div>