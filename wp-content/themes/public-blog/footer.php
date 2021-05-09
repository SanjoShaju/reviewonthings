<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package public_blog
 */

 $fwidgetscount=0;
 $total_widgets = wp_get_sidebars_widgets();
if (count($total_widgets['footer-1'])>0) {
    $fwidgetscount++;
}
if (count($total_widgets['footer-2'])>0) {
    $fwidgetscount++;
} if (count($total_widgets['footer-3'])>0) {
    $fwidgetscount++;
} if (count($total_widgets['footer-4'])>0) {
    $fwidgetscount++;
}

$fotterclasses="";
if ($fwidgetscount==1) {
    $fotterclasses="rpl-xl-12 rpl-md-6 rpl-sm-12 footer-widget-item";
}
if ($fwidgetscount==2) {
    $fotterclasses="rpl-xl-6 rpl-md-6 rpl-sm-12 footer-widget-item";
} if ($fwidgetscount==3) {
    $fotterclasses="rpl-xl-4 rpl-md-6 rpl-sm-12 footer-widget-item";
} if ($fwidgetscount==4) {
    $fotterclasses="rpl-xl-3 rpl-md-6 rpl-sm-12 footer-widget-item";
}

$footerCopyright=public_blog_get_option('public_blog_footer_copyright');
$footerPoweredBy=public_blog_get_option('public_blog_footer_copyright');

?>



<footer class="site-footer is-bg">
    <div class="footer-in">
        <div class="rpl-container">
            <div class='row'>
                <?php
            if (count($total_widgets['footer-1'])>0) {?>
                <div class="<?php echo esc_attr($fotterclasses) ?>">

                    <?php dynamic_sidebar('footer-1'); ?>


                </div>
                <?php }?>
                <?php
            if (count($total_widgets['footer-2'])>0) {?>
                <div class="<?php echo esc_attr($fotterclasses) ?>">

                    <?php dynamic_sidebar('footer-2'); ?>


                </div>
                <?php }?>
                <?php
            if (count($total_widgets['footer-3'])>0) {?>
                <div class="<?php echo esc_attr($fotterclasses) ?>">

                    <?php dynamic_sidebar('footer-3'); ?>


                </div>
                <?php }?>
                <?php
            if (count($total_widgets['footer-4'])>0) {?>
                <div class="<?php echo esc_attr($fotterclasses) ?>">

                    <?php dynamic_sidebar('footer-4'); ?>


                </div>
                <?php }?>

            </div>

        </div>

    </div>
    <div class="site-info">
        <div class="rpl-container">
            <div class="siteinfo-text">
                <p>
                    <?php
                      echo  esc_html($footerCopyright,'public-blog') ;
                    ?>
                </p>


                <p>
                    <?php
                        echo esc_html($footerPoweredBy,'public-blog') ;
                    ?>
                </p>


            </div>
        </div>
    </div>

</footer>

<?php if(public_blog_get_option('public_blog_gototop_header')):?>
    <a href="#" class="goto-top"><?php echo public_blog_get_icon_svg('ui', 'arrow_right' ); ?></a>
<?php endif; ?>
<?php wp_footer() ?>


</div>

</body>

</html>