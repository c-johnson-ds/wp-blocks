<?php
/**
 * half image right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'copy-left-image-right-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'copy-left-image-right overflow-hidden';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$anchorId = get_field('anchor_id');
$title = get_field('title');
if ( isset( $block['data']['preview_image'] ) ) : ?>

    <img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/half-image-right.png" alt="Preview Awards Slider"/>

<?php else : ?>
<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?> md:pt-20 md:pb-16" >
	<div class="container mx-auto">
		<div class="container mx-auto grid grid-cols-12 gap-x-20">
			<div class="col-span-12 md:col-span-6">
				<h2>HELP BOOST THE FUTURE OF BLUE DEVIL FOOTBALL</h2>
				<p>We create opportunities for Blue Devils to profit from their Name, Image and Likeness (NIL).
					Recently, the NCAA passed new rules and regulations allowing college athletes to capitalize
					on their personal brands through partnerships with sponsor brands.</p>
			</div>
			<div class="col-span-12 md:col-span-6">
				<img src="/wp-content/uploads/2023/06/player-img-sect-1.png" alt="lkl">
			</div>
		</div>
	</div>
</section>
<?php endif;?>

