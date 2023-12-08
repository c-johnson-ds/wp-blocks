<?
$id = 'container-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container mx-auto';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
?>
<div class="container mx-auto justify-center" style="min-height: 100px;">
	<div class="w-full col-span-10">
	<InnerBlocks />
	</div>
</div>
