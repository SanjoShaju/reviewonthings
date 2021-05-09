<?php

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'public_blog_Customize_Category_Dropdown_Control' )):

    /**
     * Custom Control for category dropdown
     * @package public_blog
     * @subpackage public_blog
     * @since 1.0.0
     *
     */
    class public_blog_Customize_Category_Dropdown_Control extends WP_Customize_Control {

        /**
         * Declare the control type.
         *
         * @access public
         * @var string
         */
        public $type = 'category_dropdown';

        /**
         * Function to  render the content on the theme customizer page
         *
         * @access public
         * @since 1.0.0
         *
         * @param null
         * @return void
         *
         */
        public function render_content()
        {
            $public_blog_customizer_name = 'public_blog_customizer_dropdown_categories_' . $this->id;
            $public_blog_dropdown_categories = wp_dropdown_categories(
                array(
                    'name'              => $public_blog_customizer_name,
                    'echo'              => 0,
                    'show_option_none'  =>__('Select Category','public-blog'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );
           $public_blog_dropdown_final = str_replace( '<select', '<select ' . $this->get_link(), $public_blog_dropdown_categories );
            printf(
                '<label><span class="customize-control-title">%s</span> %s</label>',
                esc_html($this->label),
                $public_blog_dropdown_final
            );
        }
    }
    endif;