<?php 
if ( ! function_exists( 'public_blog_related_post_action' ) ) :
function public_blog_related_post_action() {
	global $post;

	$categories        = get_the_category($post->ID);

	$related_post_title = public_blog_get_option( 'public_blog_you_may_like_title' );

	$post_id = get_the_ID();
	$cat_ids = array();
	
	if(!empty($categories) && is_wp_error($categories)):
		foreach ($categories as $category):
			array_push($cat_ids, $category->term_id);
		endforeach;
	endif;
	
	$current_post_type = get_post_type($post_id);
	$query_args = array( 
	

		'category__in'       => $cat_ids,
		'post_type'      => $current_post_type,
		'post__not_in'       => array($post->ID),
		'posts_per_page'     => 4, // Number of related posts that will be shown.
		'ignore_sticky_posts'=> 1,
		'orderby'            => 'rand'
	
	
	 );
	
	$related_cats_post = new WP_Query( $query_args );
	
	if($related_cats_post->have_posts()):?>
	<aside class="related-posts">
		<h3 class="section-title meta-title"><?php echo esc_html($related_post_title); ?></h3>
		<div class="row">
		<?php
		 while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
			<div class="rpl-xl-3  rpl-lg-6">
                    <article class="related-post hentry post">
					<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
	                        <figure class="entry-thumb">
	                        	<?php the_post_thumbnail( 'random-thumb', array( 'class' => 'img-responsive' ) );
	                        	?>
                        </figure>
                        <?php endif; ?>
						
					 <div class="main-entry-content">
                    
                        <header class="entry-header">
                            <h4><a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title(); ?></a></h4>
                        </header> 
						<div class="post-meta-wrapper">
                
                    <div class="entry-meta-content">
                        <!-- date -->
                        <div class="post-meta is-start is-after">

                            <div class="post-date meta-wrapper">

                                <?php if (public_blog_get_option('public_blog_post_show_date')&& 'post' === get_post_type()):
                                
                                public_blog_posted_on() ;
                                
                                endif;
                                ?>
                        
                            </div>
                          

						<?php if(public_blog_get_option("public_blog_post_show_readtime")):?>
                            <!-- Reading duration -->
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
                                <span> <?php  esc_html_e('Read','public-blog') ?> </span>
                                </span>
                            </div>
						<?php endif; ?>

                        </div>
                    </div>
                </div>
						</div>
                        
                    </article>
                </div>
		<?php endwhile ?>
		</div>
		</aside>
	 <?php endif; wp_reset_postdata();
	}
endif;
add_action('public_blog_related_post', 'public_blog_related_post_action');



