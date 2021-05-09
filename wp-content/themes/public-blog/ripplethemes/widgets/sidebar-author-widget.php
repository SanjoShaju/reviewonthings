<?php

class public_blog_Author_Widget extends WP_Widget
{
     public function __construct()
     {
          parent::__construct(
               'sidebar-author-widget',
               __( 'RP: Sidebar Author Widget', 'public-blog' ),
               array( 'description' => __( 'Best displayed in Sidebar.', 'public-blog' ) )
          );
      }
    
     public function widget( $args, $instance )
     {
          extract( $args );
        if(!empty($instance))
       { 

         $facebook  = $instance['facebook'];
         $twitter   = $instance['twitter'];
         $instagram = $instance['instagram'];
         $linkedin  = $instance['linkedin'];
         $youtube   = $instance['youtube'];
         $image     = $instance['image_uri'];
         $name      = $instance['full_name'];

         if( !empty($image))
         {
          ?>
<div class=" widget about-widget">
    <?php echo $args['before_title'] . esc_html($instance['title']) . $args['after_title']; ?>


    <figure>
        <img src="<?php echo esc_url( $instance['image_uri'] );?>" alt=<?php esc_attr_e( "about me", 'public-blog' ) ?>>
    </figure>

    <div class="about-body text-center">
        <h5 class="author-name"><?php echo esc_html($name); ?></h5>
        <p class="author-description"><?php echo wp_kses_post( $instance['description'] );?></p>
        <div class="social-icons">
            <ul>

                <?php 
                          if ( !empty( $facebook ) ) { ?>
                <li>
                    <a class="img-circle" href="<?php echo esc_url( $facebook ); ?>"
                        data-title=<?php esc_attr_e( "Facebook", 'public-blog' )?> target="_blank"><?php echo public_blog_get_icon_svg( 'social', 'facebook');?></a>
                </li>
                <?php }
                          if ( !empty( $twitter ) ) { ?>
                <li>
                    <a class="img-circle" href="<?php echo esc_url( $twitter ); ?>"
                        data-title=<?php esc_attr_e( "Twitter", 'public-blog' )?> target="_blank"><?php echo public_blog_get_icon_svg( 'social', 'twitter');?></a>
                </li>
                <?php }
                          if ( !empty( $linkedin ) ) {
                              ?>
                <li>
                    <a class="img-circle" href="<?php echo esc_url( $linkedin ); ?>"
                        data-title=<?php esc_attr_e( "Linkedin", 'public-blog' )?> target="_blank"><?php echo public_blog_get_icon_svg( 'social', 'linkedin');?></i></a>
                </li>
                <?php
                          }
                          if ( !empty( $instagram) ) {
                                              ?>
                <li>
                    <a class="img-circle" href="<?php echo esc_url( $instagram); ?>"
                        data-title=<?php esc_attr_e( "Instagram", 'public-blog' )?> target="_blank"><?php echo public_blog_get_icon_svg( 'social', 'instagram');?></a>
                </li>
                <?php
                          }
                                        if ( !empty( $youtube ) ) { ?>
                <li>
                    <a class="img-circle" href="<?php echo esc_url( $youtube ); ?>"
                        data-title=<?php esc_attr_e( "Youtube", 'public-blog' )?> target="_blank"><?php echo public_blog_get_icon_svg( 'social', 'youtube');?></a>
                </li>
                <?php
                          }
                          
                              ?>
            </ul>
        </div>
    </div><!-- .about-me -->
</div><!-- .widget -->

<?php
          }
        }   
     }

     public function update( $new_instance, $old_instance ){
        $instance                = $old_instance;
        $instance['title']       = sanitize_text_field( $new_instance['title'] );
        $instance['full_name']   = sanitize_text_field( $new_instance['full_name'] );
        $instance['description'] = wp_kses_post( $new_instance['description'] );
        $instance['image_uri']   = esc_url( $new_instance['image_uri'] );
        $instance['facebook']    = esc_url( $new_instance['facebook'] );
        $instance['twitter']     = esc_url( $new_instance['twitter'] );
        $instance['googleplus']  = esc_url( $new_instance['googleplus'] );
        $instance['instagram']   = esc_url( $new_instance['instagram'] );
        $instance['linkedin']    = esc_url( $new_instance['linkedin'] );
        $instance['youtube']     = esc_url( $new_instance['youtube'] );
        return $instance;
     }

     public function form($instance ){
          ?>
<p>
    <label for="<?php echo  esc_attr($this->get_field_id('image_uri')); ?>">
        <?php _e( 'Image', 'public-blog' ); ?>
    </label>
    <br />
    <?php
                     if (isset($instance['image_uri']) && $instance['image_uri'] != '' ) :
                         echo '<img class="custom_media_image" src="' . esc_url( $instance['image_uri'] ) . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
                     endif;
                 ?>

    <input type="text" class="widefat custom_media_url"
        name="<?php echo esc_attr( $this->get_field_name('image_uri')); ?>"
        id="<?php echo esc_attr($this->get_field_id('image_uri')); ?>" value="<?php 
                   if (isset($instance['image_uri']) && $instance['image_uri'] != '' ) :
                     echo esc_url( $instance['image_uri'] );
                    endif;
                  ?>" style="margin-top:5px;">
    <input type="button" id="custom_media_button" value="<?php esc_attr_e( 'Upload Image', 'public-blog' ); ?>"
        class="button media-image-upload" data-title="<?php esc_attr_e( 'Select Image','public-blog'); ?>"
        data-button="<?php esc_attr_e( 'Select Image','public-blog'); ?>" />
    <input type="button" id="remove_media_button" value="<?php esc_attr_e( 'Remove Image', 'public-blog' ); ?>"
        class="button media-image-remove" />
</p>
<p>
    <label for="<?php echo  esc_attr($this->get_field_id('title')); ?>"><?php _e( 'Title', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>"
        id="<?php echo esc_attr($this->get_field_id('title')); ?>" value="<?php
                  if (isset($instance['title']) && $instance['title'] != '' ) :
                    echo esc_attr($instance['title']);
                   endif;

                   ?>" class="widefat" />
</p>

<p>
    <label
        for="<?php echo  esc_attr($this->get_field_id('full_name')); ?>"><?php _e( 'Full Name', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr( $this->get_field_name('full_name')); ?>"
        id="<?php echo esc_attr($this->get_field_id('full_name')); ?>" value="<?php
                  if (isset($instance['full_name']) && $instance['full_name'] != '' ) :
                    echo esc_attr($instance['full_name']);
                   endif;

                   ?>" class="widefat" />
</p>

<p>
    <label
        for="<?php echo  esc_attr($this->get_field_id('description')); ?>"><?php _e( 'Description', 'public-blog' ); ?></label><br />
    <textarea rows="8" name="<?php echo esc_attr($this->get_field_name('description')); ?>"
        id="<?php echo esc_attr($this->get_field_id('description')); ?>" class="widefat"><?php
                  
                    if (isset($instance['description']) && $instance['description'] != '' ) :
                       echo esc_textarea( $instance['description'] ); 
                     endif;
                   ?></textarea>
</p>

<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id('facebook') ); ?>"><?php _e( 'Facebook', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr( $this->get_field_name('facebook') ); ?>"
        id="<?php echo esc_attr( $this->get_field_id('facebook')); ?>" value="<?php
                 if (isset($instance['facebook']) && $instance['facebook'] != '' ) :
                   echo esc_attr($instance['facebook']);
                  endif;

                  ?>" class="widefat" />
</p>

<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id('twitter') ); ?>"><?php _e( 'Twitter', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr( $this->get_field_name('twitter') ); ?>"
        id="<?php echo esc_attr( $this->get_field_id('twitter')); ?>" value="<?php
                 if (isset($instance['twitter']) && $instance['twitter'] != '' ) :
                   echo esc_attr($instance['twitter']);
                  endif;

                  ?>" class="widefat" />
</p>


<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id('instagram') ); ?>"><?php _e( 'Instagram', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr( $this->get_field_name('instagram') ); ?>"
        id="<?php echo esc_attr( $this->get_field_id('instagram')); ?>" value="<?php
                 if (isset($instance['instagram']) && $instance['instagram'] != '' ) :
                   echo esc_attr($instance['instagram']);
                  endif;

                  ?>" class="widefat" />
</p>

<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id('linkedin') ); ?>"><?php _e( 'Linkedin', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr( $this->get_field_name('linkedin') ); ?>"
        id="<?php echo esc_attr( $this->get_field_id('linkedin')); ?>" value="<?php
                 if (isset($instance['linkedin']) && $instance['linkedin'] != '' ) :
                   echo esc_attr($instance['linkedin']);
                  endif;

                  ?>" class="widefat" />
</p>
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id('youtube') ); ?>"><?php _e( 'Youtube', 'public-blog' ); ?></label><br />
    <input type="text" name="<?php echo esc_attr( $this->get_field_name('youtube') ); ?>"
        id="<?php echo esc_attr( $this->get_field_id('youtube')); ?>" value="<?php
                 if (isset($instance['youtube']) && $instance['youtube'] != '' ) :
                   echo esc_attr($instance['youtube']);
                  endif;

                  ?>" class="widefat" />
</p>
<?php
     }
}


add_action( 'widgets_init', 'public_blog_Author_Widget' );
 
function public_blog_Author_Widget(){     
    register_widget( 'public_blog_Author_Widget' );

}