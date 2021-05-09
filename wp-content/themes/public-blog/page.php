<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package public_blog
 */

get_header();
?>

<?php if(!is_front_page()):?>
        <div class="custom-breadcrumb">
            
                <div class="rpl-container">

                <div class="breadcrumb-title is-start">
                    <?php
                        the_title( '<h1 class="entry-title">', '</h1>' );

                            ?>
                </div>
                    

                </div>


        </div>

    <?php endif; ?>

<div id="content" class="site-content default-page">
<div class="rpl-container">
<div class="row">
<div id="primary" class="content-area rpl-lg-12 primary ">
<main id="main" class="site-main">



        <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'ripplethemes/contents/content-page' );
    

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile;
    
    ?>
    </div>
    

    

</div>

</div>
</div>

<?php

get_footer();