<?php
/**
 * Search Form 
 *
 * @package public-blog
 */

?>

<div class="searchform">
<form role="search"  method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'public-blog' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'public-blog' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'public-blog' ); ?>" />
</form>
</div>
