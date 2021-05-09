<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage publicblog
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$publicblog_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
    <div class="comments-rpl-container rpl-container t-rpl-container">
        <div class="comments-area content">
            <?php
            if ( have_comments() ) :
                ;
                ?>
                <h3 class="section-title meta-title">
                    <?php if ( '1' === $publicblog_comment_count ) : ?>
                        <?php esc_html_e( '1 comment', 'public-blog' ); ?>
                    <?php else : ?>
                        <?php
                        printf(
                            /* translators: %s: comment count number. */
                            esc_html( _nx( '%s comment', '%s comments', $publicblog_comment_count, 'Comments title', 'public-blog' ) ),
                            esc_html( number_format_i18n( $publicblog_comment_count ) )
                        );
                        ?>
                    <?php endif; ?>
                </h3><!-- .comments-title -->

                <ol class="comment-list">
                    <?php
                    wp_list_comments(
                        array(
                            'avatar_size' => 60,
                            'style'       => 'ol',
                            'short_ping'  => true,
                        )
                    );
                    ?>
                </ol><!-- .comment-list -->

                <?php
                the_comments_pagination(
                    array(
                        'before_page_number' => esc_html__( 'Page', 'public-blog' ) . ' ',
                        'mid_size'           => 0,
                        'prev_text'          => sprintf(
                            '%s <span class="nav-prev-text">%s</span>',
                            is_rtl() ? public_blog_get_icon_svg( 'ui', 'arrow_right' ) : public_blog_get_icon_svg( 'ui', 'arrow_left' ),
                            esc_html__( 'Older comments', 'public-blog' )
                        ),
                        'next_text'          => sprintf(
                            '<span class="nav-next-text">%s</span> %s',
                            esc_html__( 'Newer comments', 'public-blog' ),
                            is_rtl() ? public_blog_get_icon_svg( 'ui', 'arrow_left' ) : public_blog_get_icon_svg( 'ui', 'arrow_right' )
                        ),
                    )
                );
                ?>

                <?php if ( ! comments_open() ) : ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'public-blog' ); ?></p>
                <?php endif; ?>
            <?php endif; ?>

            <?php
            comment_form(
                array(
                    'logged_in_as'       => null,
                    'title_reply'        => esc_html__( 'Leave a comment', 'public-blog' ),
                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                    'title_reply_after'  => '</h2>',
                )
            );
            ?>
        </div>
    </div>

</div><!-- #comments -->
