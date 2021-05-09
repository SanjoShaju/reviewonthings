
<section class="hightlight-section is-bg">
    <div class="rpl-container">
        <div class="main-article">
            <article class="post hentry">
            <?php if(has_post_thumbnail()):?>
                <figure class="entry-thumb">
                    <a href="<?php echo esc_url(get_permalink()) ?>">
                    <?php the_post_thumbnail( );?>
                    </a>
                </figure>
            <?php endif; ?>
                <div class="main-entry-content">
                    <div class="entry-categories">
                        <span class="screen-reader-text">Categories</span>
                        <div class="entry-categories-inner">
                        <?php 
                            foreach((get_the_category()) as $categoryy) { 
                            $catlink=esc_url(get_category_link($categoryy->term_id));
                            $catname=esc_html($categoryy->cat_name);
                            ?>
                            <a href="<?php echo esc_html($catlink) ?>">
                                <?php echo esc_html($catname); ?>
                            </a>

                            <?php
                                    } 
                            ?>
                        </div>
                        <!-- .entry-categories-inner -->
                    </div>
                    <div class="entry-header">
                        <h1 class="entry-title"><?php the_title() ?></h1>
                    </div>
                    <div class="post-meta-wrapper">
                        <div class="post-meta is-start is-after">
                   
                            <!-- date -->
                           

                                <?php if (public_blog_get_option('public_blog_post_show_date')&& 'post' === get_post_type()):?>
                                    <div class="post-date meta-wrapper">
                                    <?php 
                                    
                                    public_blog_posted_on() ;

                                    ?>
                                    
                                    </div>
                                  <?php  endif;  ?>

                            <!-- duration -->
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
                        <?php endif; ?>
                            
                        </div>
                    </div>


                </div>
            </article>
        </div>

    </div>
</section>