<?
$id = 'container-';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container mx-auto';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
?>
<div class="container mx-auto mt-8 mb-8 justify-center" style="min-height: 100px;">
	<div class="w-full col-span-10">
	<?php echo do_shortcode('[mainmenu-sitemap]'); ?>
	</div>
</div>