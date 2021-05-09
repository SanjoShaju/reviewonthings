<?php

if (!function_exists('public_blog_social_sharing')) :
    function public_blog_social_sharing($post_id)
    {
        $public_blog_url = get_the_permalink($post_id);
        $public_blog_title = get_the_title($post_id);
        $public_blog_image = get_the_post_thumbnail_url($post_id);
        
        //sharing url
        $public_blog_twitter_sharing_url = esc_url('http://twitter.com/share?text=' . $public_blog_title . '&url=' . $public_blog_url);
        $public_blog_facebook_sharing_url = esc_url('https://www.facebook.com/sharer/sharer.php?u=' . $public_blog_url);
        $public_blog_pinterest_sharing_url = esc_url('http://pinterest.com/pin/create/button/?url=' . $public_blog_url . '&media=' . $public_blog_image . '&description=' . $public_blog_title);
        $public_blog_linkedin_sharing_url = esc_url('http://www.linkedin.com/shareArticle?mini=true&title=' . $public_blog_title . '&url=' . $public_blog_url);
        
        ?>

<ul class="post-share">
    <li>
        <a target="_blank" href="<?php echo esc_url($public_blog_facebook_sharing_url); ?>">
            <?php  echo public_blog_get_icon_svg( 'social', 'facebook');?> 
        </a>
    </li>
    <li><a target="_blank" href="<?php echo esc_url($public_blog_twitter_sharing_url); ?>"><?php echo public_blog_get_icon_svg( 'social', 'twitter');?> </a></li>
    <li><a target="_blank" href="<?php echo esc_url($public_blog_pinterest_sharing_url); ?>"><?php  echo public_blog_get_icon_svg( 'social', 'pinterest');?> </a></li>
    <li> <a target="_blank" href="<?php echo esc_url($public_blog_linkedin_sharing_url); ?>"><?php echo public_blog_get_icon_svg( 'social', 'linkedin');?> </a></li>
</ul>
<?php
    }
endif;
add_action('public_blog_social_sharing', 'public_blog_social_sharing', 10);