<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package public_blog
 */


get_header();
$count = $GLOBALS['wp_query']->found_posts;

?>
<div class="custom-breadcrumb">
    <div class="rpl-container">
        <div class="breadcrumb-title is-start">
            <?php
                the_archive_title('<h1 class="title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
             ?>
             <div class="term-count">
               <span> <?php echo  esc_html($count); ?></span><?php  esc_html_e(' Articles','public-blog');?>
             </div>
        </div>
     
    </div>

</div>

<div class="rpl-container">
    <div id="primary" class="content-area  primary">
        <main id="main" class="site-main">

            <div class="grid-view">
                <div class="row">
                    <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                ?>


                    <?php get_template_part('ripplethemes/contents/otherspost'); ?>


                    <?php
                endwhile;
                else :

                    get_template_part( 'template-parts/post/content', 'none' );
                endif;
                ?>


                </div>
                <nav class="navigation pagination">
                    <div class="nav-links is-center">
                        <?php
                    
                        the_posts_pagination();
                        ?>

                    </div>
                    <!-- .nav-links -->
                </nav>
            </div>

        </main>
    </div>
</div>

<?php get_footer() ?>