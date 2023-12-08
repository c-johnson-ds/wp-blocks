<?
/**
 * Padding Spacer Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'padding-spacer-';
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'padding-spacer';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$pdtop = get_field('padding_top');
$large = get_field('large');
$medium = get_field('medium');
$small = get_field('small');
?>
<style>
	#<?php echo esc_attr($id); ?>{
		padding-top: <?= $large; ?>px;
	}
	@media (max-width: 900px){
		#<?php echo esc_attr($id); ?>{
			padding-top: <?= $medium; ?>px;
		}
	}
	@media (max-width: 576px){
		#<?php echo esc_attr($id); ?>{
			padding-top: <?= $small; ?>px;
		}
	}
</style>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="position: relative;display: block; ">

</div>