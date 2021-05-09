<?php
$readmore=  public_blog_get_option('public_blog_readmore_text');

?>



<div class="rpl-xl-4 rpl-lg-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('grid-post'); ?>>

        <?php if ( has_post_thumbnail() ) : ?>
        <figure class="entry-thumb">
            <a href="<?php echo esc_url(get_permalink()) ?>">
                <?php the_post_thumbnail( );?>
            </a>
        </figure>
        <?php endif ?>
            <div class="main-entry-content">
                <div class="entry-categories">
                    <span class="screen-reader-text">Categories</span>

                    <div class="entry-categories-inner">

                        <?php 
                            foreach((get_the_category()) as $categoryy) { 
                            $catlink=esc_url(get_category_link($categoryy->term_id));
                            $catname=esc_html($categoryy->cat_name);
                            ?>
                            <a href="<?php echo esc_url($catlink) ?>">
                                <?php echo esc_html($catname); ?>
                            </a>

                            <?php
                                    } 
                            ?>
                    </div>
                </div>
                <div class="entry-header">
                    <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                    ?>
                </div>

                <div class="post-meta-wrapper">
                
                    <div class="entry-meta-content">
                        <!-- date -->
                        <div class="post-meta is-start is-after">

                                <?php if (public_blog_get_option('public_blog_post_show_date')&& 'post' === get_post_type()):?>
                                    <div class="post-date meta-wrapper">
                                        <?php   public_blog_posted_on() ;?>    
                                    </div>
                               <?php endif;  ?>
                        
                          

                            <!-- Reading duration -->
                            <?php if(public_blog_get_option("public_blog_post_show_readtime")):?>
                                <div class="post-duration meta-wrapper">
                                    <span class="meta-text">
                                    <?php
                                        $content = get_post_field( 'post_content', $post->ID );
                                        $word_count = str_word_count( strip_tags( $content ) );
                                        $readingtime = ceil($word_count / 200);
                                        if ($readingtime == 1) {
                                        $timer = " min ";
                                        } else {
                                        $timer = " mins ";
                                        }
                                        $totalreadingtime = $readingtime . $timer;
                                        echo esc_html($totalreadingtime);
                                        ?>
                                    <span> <?php  esc_html_e('read','public-blog') ?> </span>
                                    </span>
                                </div>
                            <?php endif;?>

                        </div>
                    </div>
                </div>
                <div class="entry-content">
                    <?php echo esc_html(wp_trim_words(get_the_content(), public_blog_get_option('public_blog_post_excerpt_length') ));?> 
                </div>                                                                      
                <div class="entry-footer is-between">
                    <?php
                    if(!empty($readmore)) {
                    ?>
                    <div class="readMore"><a href="<?php the_permalink(); ?>"
                            class="common-button is-icon is-border"><span><?php echo esc_html($readmore); ?></span><?php echo  public_blog_get_icon_svg('ui', 'arrow-right' ); ?></a>
                    </div>
                    <?php  } ?>
                    
                </div>
            </div>
    </article>
</div>