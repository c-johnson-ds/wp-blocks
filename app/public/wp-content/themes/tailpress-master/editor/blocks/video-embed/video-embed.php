<?
/**
 * Featured Paragraph Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'videoEmbed' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'embed-responsive-item';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$videoEmb = get_field( 'video_embed' );
preg_match('/src="(.+?)"/', $videoEmb, $matches);
$videoSRC = $matches[1];
?>
<div class="container mx-auto <?php echo esc_attr($className); ?> my-10 lg:my-20">
	<div class="embed-responsive  w-full" id="<?php echo esc_attr($id); ?>">
		<iframe class="w-full embed-responsive-16by9 aspect-video w-full" src="<?= $videoSRC; ?>"></iframe>
	</div>
</div>

