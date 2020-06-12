<?php 
function wp_get_attachment_caption( $post_id = 0 ) {
    $post_id = (int) $post_id;
    if ( ! $post = get_post( $post_id ) ) {
        return false;
    }
 
    if ( 'attachment' !== $post->post_type ) {
        return false;
    }
 
    $caption = $post->post_excerpt;
 
    /**
     * Filters the attachment caption.
     *
     * @since 4.6.0
     *
     * @param string $caption Caption for the given attachment.
     * @param int    $post_id Attachment ID.
     */
    return apply_filters( 'wp_get_attachment_caption', $caption, $post->ID );
}
?>