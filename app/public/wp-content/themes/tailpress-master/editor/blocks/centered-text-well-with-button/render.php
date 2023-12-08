<?
$id = 'centered-text-well-with-button-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'centered-text-well-with-button my-4 sm:mt-0 sm:my-8';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$small_heading = get_field('small_heading');
$info = get_field('text');
$button = get_field('button');
if( isset( $block['data']['preview_image'] )  ) : ?>

	<img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/centered-text-well-with-button.png" alt="">

<? else : ?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> py-8">
	<div class="container mx-auto text-center mb-4 md:mb-10">
		<div class="text-wrapper w-100 md:w-10/12 lg:w-8/12 mx-auto">
			<? if($heading): ?>
			<? endif; ?>
			<? if($small_heading): ?>
			<p class="inline-block semibold small-blue-font uppercase mb-8"><?= $small_heading; ?></p>
			<? endif; ?>
			<? if($info): ?>
			<p class="font-semibold med-lrg-font"><?= $info; ?></p>
			<? endif; ?>
			<?php
			if( $button ):
				$link_url = $button['url'];
				$link_title = $button['title'];
				$link_target = $button['target'] ? $button['target'] : '_self';
				?>
				<a class="button btn button-blue mt-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>
