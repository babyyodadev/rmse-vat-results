<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p>Render Highlight</p>
<p <?php echo get_block_wrapper_attributes(); ?>>
<?php esc_html_e( 'Dynamic Test – hello from highlight!', 'tc-shv-results' ); ?>
</p>
