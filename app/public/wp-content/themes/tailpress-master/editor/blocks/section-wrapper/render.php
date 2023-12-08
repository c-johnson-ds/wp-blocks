<?
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'section-wrapper-';
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'section-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$bgColor = get_field( 'background_color' ) ?: '#fff';
$columns = get_field( 'number_of_columns' ) ?: '12';
$bgimg = get_field( 'background_image' );
$template = array(
	array('core/heading', array(
		'level' => 2,
		'placeholder' => 'Title Goes Here',
	)),
	array( 'core/paragraph', array(
		'placeholder' => 'text here',
	) )
);
$sectionID = get_field( 'section_id' );
$largeTop = get_field('large_top');
$largeBottom = get_field('large_bottom');
$mediumTop = get_field('medium_top');
$mediumBottom = get_field('medium_bottom');
$smallTop = get_field('small_top');
$smallBottom = get_field('small_bottom');
?>
<style>
	#<?php echo esc_attr($id); ?>{
		padding-top: <?= $largeTop; ?>px;
		padding-bottom: <?= $largeBottom; ?>px;
	}
	@media (max-width: 900px){
		#<?php echo esc_attr($id); ?>{
		padding-top: <?= $mediumTop; ?>px;
		padding-bottom: <?= $mediumBottom; ?>px;
	}
	}
	@media (max-width: 576px){
		#<?php echo esc_attr($id); ?>{
		padding-top: <?= $smallTop; ?>px;
		padding-bottom: <?= $smallBottom; ?>px;
	}
	}
</style>

<section id="<?php echo esc_attr($id); ?>" class="inner-b-cont <?php echo esc_attr($className); ?>" style="background-color: <?= $bgColor; ?>;<? if($bgimg): ?>background-image: url(<?= $bgimg ?>);<? endif; ?>;min-height: 100px;">
	<InnerBlocks  />
</section>