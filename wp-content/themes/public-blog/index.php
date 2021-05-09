<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package public_blog
 */

get_header();
$GLOBALS['firstPosts']=array();
?>
<div id="content" class="site-content">
    <?php
   
    do_action('public_blog_otherspost_action');
    
    ?>

</div>

</div>
</div>

<?php get_footer();?>