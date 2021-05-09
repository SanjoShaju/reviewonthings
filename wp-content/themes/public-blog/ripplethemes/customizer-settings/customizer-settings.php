<?php
    /* Theme Options Panel */
    $wp_customize->add_panel('public_blog_options_panal', array(
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'title' => __('Public Blog Theme Options', 'public-blog'),
    ));

    
    

require get_template_directory().'/ripplethemes/customizer-settings/sanitize-functions.php';

// social links
require get_template_directory().'/ripplethemes/customizer-settings/social.php';

// post settings
require get_template_directory().'/ripplethemes/customizer-settings/postsetting.php';




// Footer
require get_template_directory().'/ripplethemes/customizer-settings/footersettings.php';

// related Posts
require get_template_directory().'/ripplethemes/customizer-settings/single-page-settings.php';

// others
require get_template_directory().'/ripplethemes/customizer-settings/others.php';

// pro button
require get_stylesheet_directory() .'/ripplethemes/customizer-settings/pro-button.php';


// canvas slider
require get_template_directory().'/ripplethemes/customizer-settings/canvas-slider.php';
