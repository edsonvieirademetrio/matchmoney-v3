<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matchmoney
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
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>		
		<h3 class="color-blue-light font-weight-bold text-left py-3">Comentários</h3>	
		<div class="p-4 bg-color-gray-light rounded-8">
		<h2 class="comments-title">
			<?php
			$matchmoney_comment_count = get_comments_number();
			if ( '1' === $matchmoney_comment_count ) {
				printf(
					/* translators: 1: title. */					
					esc_html__( 'Um comentário em &ldquo;%1$s&rdquo;', 'matchmoney' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comentário em &ldquo;%2$s&rdquo;', '%1$s comentários em &ldquo;%2$s&rdquo;', $matchmoney_comment_count, 'comments title', 'matchmoney' ) ),
					number_format_i18n( $matchmoney_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->
		</div>
				
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comentários fechados.', 'matchmoney' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	echo '<h3 class="color-blue-light font-weight-bold text-left py-3">Deixe um comentário</h3>';
	echo '<div class="p-4 bg-color-gray-light rounded-8">';
	comment_form();
	echo '</div>';
	?>

</div><!-- #comments -->
