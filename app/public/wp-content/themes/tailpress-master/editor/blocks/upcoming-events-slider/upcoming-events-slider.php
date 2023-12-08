<?
/**
 * Video Embed Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'upcoming-events-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'upcoming-events-slider';
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

    <img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/upcoming-events-slider.png" alt="Preview Module Render"/>

<?php else : ?>
	<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?> bg-[#FFD960]">
		<div class="container mx-auto">
			<div class="block text-center">
				<h2 class="text-[#002766]">Events</h2>
			</div>
			<div class="grid grid-cols-12">
				<div class="col-span-12 md:col-span-4">
					<div class="rounded">
						<div class="block">

						</div>
						<div class="block">
							<h3 class="uppercase text-[#002766]">Tailgate at Waterfront</h3>
							<span>Duke University Commons</span>
							<span>June 23-24 @3PM</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>