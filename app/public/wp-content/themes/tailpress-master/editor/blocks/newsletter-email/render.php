<?
/**
 * Newsletter Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'newslette-';
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'newslette';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$anchorId = get_field('anchor_id');
$iframe = get_field('video_embed');
$title = get_field('title');

if ( isset( $block['data']['preview_image'] ) ) : ?>

    <img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/newslette-email.png" alt="Preview Module Render"/>

<?php else : ?>
<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?> py-18">
	<div class="container">
		<div class="block text-center">
			<h2>Join Our Community</h2>
			<p>Let’s build a new legacy for our athletes and fans.</p>
		</div>
	</div>
</section>
<?php endif; ?>