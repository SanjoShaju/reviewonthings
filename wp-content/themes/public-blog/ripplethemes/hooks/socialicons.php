<?php

if (! function_exists('public_blog_Socialicons')) :
function public_blog_Socialicons(){
?>


<?php

// facebook
if(public_blog_get_option('public_blog_facebook_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url(public_blog_get_option('public_blog_facebook_social'))  ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'facebook')?>


    </a>
</li>
<?php
endif;

// twitter
if(public_blog_get_option('public_blog_twitter_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo  esc_url(public_blog_get_option('public_blog_twitter_social')) ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'twitter')?>


    </a>
</li>
<?php
endif;
?>

<?php

// instagram
if(public_blog_get_option('public_blog_instagram_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( public_blog_get_option('public_blog_instagram_social')) ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'instagram')?>


    </a>
</li>
<?php
endif;
?>

<?php

// Youtube
if(public_blog_get_option('public_blog_youtube_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( public_blog_get_option('public_blog_youtube_social')) ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'youtube')?>


    </a>
</li>
<?php
endif;
?>
<?php
// Medium
if(public_blog_get_option('public_blog_linkedin_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( public_blog_get_option('public_blog_linkedin_social')) ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'linkedin')?>


    </a>
</li>
<?php
endif;
?>

<?php
// Medium
if(public_blog_get_option('public_blog_medium_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( public_blog_get_option('public_blog_medium_social')) ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'medium')?>


    </a>
</li>
<?php
endif;
?>

<?php

// Etsy
if(public_blog_get_option('public_blog_etsy_social')!=''):
    ?>
<li>
    <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( public_blog_get_option('public_blog_etsy_social')) ?>"
        class="social-icon">
        <?php echo public_blog_get_icon_svg( 'social', 'etsy')?>


    </a>
</li>
<?php
endif;
?>



<?php
}
endif;

add_action('public_blog_social_action', 'public_blog_Socialicons');