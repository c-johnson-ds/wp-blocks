<?
/**
 * Text Header Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'large-image-with-overlaid-text-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'large-image-with-overlaid-text';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$topTitle = get_field( 'heading' );
$mainBgImg = get_field( 'background-image' );
$info = get_field('info');
$link = get_field('button');
$focalpoint = get_field('focal_point')?: 'center center';
$smBgImg = get_field('background_image_small_screens');
if(!$smBgImg){
	$smBgImg = $mainBgImg;
}
?>
<style>
	#<?php echo $id; ?>{
			background-position: center center;
			background-image: url(<?php echo $mainBgImg; ?>);
	}
	@media (max-width: 767.98px){
		#<?php echo $id; ?>{
			background-position: <?php echo $focalpoint; ?>;
			background-image: url(<?php echo $smBgImg; ?>);
		}
	}


</style>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>  lozad bg-cover flex h-475px md:h-600px lg:h-819px" data-background-image-set="url(<?= $smBgImg; ?>) 1x, url(<?= $mainBgImg; ?>) 2x">
	<?php if(get_field('add_overlay')): ?>
	<div class="overlay"></div>
	<?php endif; ?>
	<div class="container self-end w-full text-center mx-auto flex">
		<div class="content w-full pb-11 lg:pb-20">
			<h2 class="text-white text-[50px] lg:text-[80px] mb-4 uppercase font-bold"><?= $topTitle; ?></h2>
			<? if($info): ?>
			<p class="text-white mx-auto font-semibold text-[24px] lg:text-[28px] max-w-[80%] lg:max-w-[623px]"><?= $info; ?></p>
			<? endif; ?>
			<?php if($link): ?>
			<a class="button white inline-block" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
			<?php endif; ?>
		</div>
	</div>
</section >

