<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package circle_theme
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

<div id="comments">
    <div class="comments-wrap">
        <h3 class="text-center text-uppercase">comments (<?php comments_number(0, 1, '%'); ?>)</h3>
        <hr style="border-width:3px;"/>

		<?php function my_comments_theme($comment, $args, $depth) {
            $GLOBALS['comment'] = $comment; ?>
            <li class="" <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
				<div class="comment-body clearfix" id="comment-<?php comment_ID(); ?>">
                    <div class="col-xs-2">
                        <div class="user-image text-center">
                            <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
                            <span>By <?php the_author(); ?></span>
                        </div>
                    </div>

                    <div class="col-xs-10">
                        <header>
                            <span class="date"><i class="fa fa-clock-o"></i>&nbsp 25 Nov, 2012</span>&nbsp&nbsp&nbsp <span class="tags"><i class="fa fa-tags"></i>&nbsp <a href="#">Web</a>, <a href="#">News</a></span>
                        </header>
						<?php if ($comment->comment_approved == '0') : ?>
			                <em><php _e('Your comment is awaiting moderation.') ?></em><br />
			            <?php endif; ?>

                        <p>
							<?php comment_text(); ?>
						</p>

						<div class="reply">
							<?php comment_reply_link( $args, $comment, $post ); ?>
						</div>
                        <!-- <a href="#" class="btn btn-default">Reply</a>
                        <a class="btn btn-danger" href="#">Delete</a> -->
                    </div>
                </div>

        <?php } ?>
		<?php if ( have_comments() ) : ?>

			<ul class="comments-list list-unstyled">
				<?php
					wp_list_comments('type=comment&callback=my_comments_theme');
				?>
			</ul>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'circle-theme' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'circle-theme' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'circle-theme' ) ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
			<?php endif; // Check for comment navigation. ?>

		<?php endif; ?>

		<?php // If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'circle-theme' ); ?></p>
		<?php endif; ?>

        <br /><br />
        <?php comment_form(); ?>
    </div><!-- /.comments-wrap -->
</div>
