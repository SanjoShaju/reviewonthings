<?php

if (! function_exists('public_blog_category_action')) :
    function public_blog_category_action()
    {
        $count=0;
        if (public_blog_get_option('public_blog-category1')!='0') {
            $count++;
        }
        if (public_blog_get_option('public_blog-category2')!='0') {
            $count++;
        }
        if (public_blog_get_option('public_blog-category3')!='0') {
            $count++;
        }

        if ($count==1) {
            $classcat="rpl-lg-12 rpl-sm-12";
        }
        if ($count==2) {
            $classcat="rpl-lg-6 rpl-sm-12";
        }
        if ($count==3) {
            $classcat="rpl-lg-4 rpl-sm-12";
        } ?>


<section class="category-post section">
    <div class="rpl-container">
        <div class="row">

            <?php
                if (public_blog_get_option('public_blog-category1')!='0'):?>
            <div class="<?php echo esc_html($classcat)?>">
                <div class="category-post-item">
                    <figure class="entry-thumb">
                <?php if (public_blog_get_option('cat1_img')!='') {?> <img src="<?php echo esc_url(public_blog_get_option('cat1_img')) ?>" alt=<?php esc_attr_e( "category post", 'public-blog' ) ?>><?php } ?>
                        <span class="cat-links">
                            <a href="<?php echo esc_url(get_category_link(public_blog_get_option('public_blog-category1'))) ?>"
                                class="common-button is-border"><?php echo esc_html(get_cat_name(public_blog_get_option('public_blog-category1'))) ?></a>
                        </span>
                    </figure>
                </div>
            </div>

            <?php
                endif; ?>

            <?php
                if (public_blog_get_option('public_blog-category2')!='0'):?>
            <div class="<?php echo  esc_html($classcat)?>" >
                <div class="category-post-item">
                    <figure class="entry-thumb">
                    <?php if (public_blog_get_option('cat2_img')!='') {?> <img src="<?php echo esc_url(public_blog_get_option('cat2_img')) ?>" alt=<?php esc_attr_e( "category post", 'public-blog' ) ?>><?php } ?>

                        <span class="cat-links">
                            <a href="<?php echo esc_url(get_category_link(public_blog_get_option('public_blog-category2'))) ?>"
                                class="common-button is-border"><?php echo esc_html(get_cat_name(public_blog_get_option('public_blog-category2'))) ?></a>
                        </span>
                    </figure>
                </div>
            </div>

            <?php
                endif; ?>

            <?php
                if (public_blog_get_option('public_blog-category3')!='0'):?>
            <div class="<?php echo  esc_html($classcat)?>">
                <div class="category-post-item">
                    <figure class="entry-thumb">
                    <?php if (public_blog_get_option('cat3_img')!='') {?> <img src="<?php echo esc_url(public_blog_get_option('cat3_img')) ?>" alt=<?php esc_attr_e( "category post", 'public-blog' ) ?>><?php } ?>

                        <span class="cat-links">
                            <a href="<?php echo esc_url(get_category_link(public_blog_get_option('public_blog-category3'))) ?>"
                                class="common-button is-border"><?php echo esc_html(get_cat_name(public_blog_get_option('public_blog-category3'))) ?></a>
                        </span>
                    </figure>
                </div>
            </div>

            <?php
                endif; ?>

        </div>
    </div>
</section>

<?php
    }
    endif;
    add_action('public_blog_category_action', 'public_blog_category_action');

    ?>