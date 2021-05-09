<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package public_blog
 */

get_header() ?>

<div class="custom-breadcrumb">
    <div class="rpl-container">
        <div class="breadcrumb-title is-start">
            <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for:  %s', 'public-blog' ), '<span>'." " . get_search_query() . '</span>' );
					?>
        </div>

      
    </div>

</div>
<div id="content" class="site-content">

    <div class="rpl-container">
        <div class="row">
            <div id="primary" class="content-area rpl-lg-12 primary">
                <main id="main" class="site-main">

                    <div class="grid-view">
                        <div class="row">
                            <?php 
                        if(have_posts()):
                            while(have_posts()):
                                the_post(  );
                        ?>


                            <?php
                             get_template_part('ripplethemes/contents/otherspost');
                           
                        endwhile;

                    else:
                         get_template_part('ripplethemes/contents/content','none');
                         
                        endif;
                        ?>


                        </div>
                        <nav class="navigation pagination">
                            <div class="nav-links is-center">
                                <?php  
                                // global $wp_query; 
                                the_posts_pagination( ) ;?>

                            </div>
                            <!-- .nav-links -->
                        </nav>
                    </div>

                </main>
            </div>
       
        </div>

    </div>
</div>

<?php get_footer() ?>