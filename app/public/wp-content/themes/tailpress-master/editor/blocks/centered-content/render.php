<?php
$id = 'centered-text-well-with-button';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'centered-text-well-with-button my-4 sm:mt-0 sm:my-8';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$small_heading = get_field('sub_heading');
$info = get_field('copy');
$link = get_field('button');
?>
<section class="centered-text-area pt-24 pb-28 bg-[#f1f1f1]">
	<div class="container mx-auto">
		<div class="w-[1160px] max-w-full mx-auto text-center">
			<?php if($small_heading): ?>
			<span class="text-secondary"><?php echo $small_heading; ?></span>
			<?php endif; ?>
			<?php if($heading): ?>
			<h2 class="text-mh2 md:text-h2 text-primary"><?php echo $heading; ?></h2>
			<?php endif; ?>
			<?php if($info): ?>
			<div class="prose">
				<p class=" my-5 leading-[2]">
					<?php echo $info; ?>
				</p>
			</div>
			<?php endif; ?>
			<?php
			if( $link ):
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="button btn button-blue mt-5" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>