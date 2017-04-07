<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package gaga lite
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'gaga-lite' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'gaga-lite' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'gaga-lite' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'gaga-lite' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'gaga-lite' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'gaga-lite' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'gaga-lite' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'gaga-lite' ); ?></p>
	<?php endif; ?>

<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$comments_args = array(
        // change the title of send button
        // 'label_submit'=>'Send',
        // change the title of the reply section
        // 'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
	'title_reply'=>'Add Your Comment:',
	'label_submit'=>'Submit',
        'comment_notes_before' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"></label><textarea id="comment" name="comment" aria-required="true" placeholder="Message" rows="8" cols="37" wrap="hard"></textarea></p>',
		'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<p class="comment-form-author">' .
      '<input id="author" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' />' . ( $req ? '<span style="color:red" class="required"></span>' : '' ) . '</p>',

    'email' =>
      '<p class="comment-form-email">' .
      '<input id="email" placeholder="Email Address" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' />' . ( $req ? '<span style="color:red" class="required"></span>' : '' ) . '</p>',

    'url' =>
      '<p class="comment-form-url">' .
      '<input id="url" placeholder="Website URl" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>'
    )
  ),
);
	
	comment_form($comments_args); ?>

</div><!-- #comments -->