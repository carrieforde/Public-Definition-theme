<?php
/**
 * Alcatraz custom template tags.
 *
 * @package publicdefinition
 */

/**
 * The style attribute with background image URL for post thumbnail.
 *
 * @author  Carrie Forde
 *
 * @param   int      Post ID.
 * @param   string  The required image size.
 */
function pd_post_thumbnail_as_background( $post_id = 0, $image_size = 'full' ) {

	// If no post ID passed, let's get the current post ID.
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}

	// Check if the post has a thumbnail. If not, return.
	if ( ! has_post_thumbnail( $post_id ) ) {
		return;
	}

	echo 'style="background-image: url( ' . esc_url( get_the_post_thumbnail_url( $post_id, $image_size ) ) . ' )"';
}
