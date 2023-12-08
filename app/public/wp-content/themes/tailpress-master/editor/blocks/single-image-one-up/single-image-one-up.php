<?
$id = 'single-image-one-up-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'single-image-one-up mb-8 mt-8';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$small_heading = get_field('small_heading');
$info = get_field('info');
$button = get_field('button');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="container">
	<?php
	$image = get_field('image');
	if( $image ):

		// Image variables.
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];


		// Begin caption wrap.
		if( $caption ): ?>
			<div class="wp-caption">
		<?php endif; ?>

		<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />


		<?php
		// End caption wrap.
		if( $caption ): ?>
			<p class="wp-caption-text semibold"><?php echo esc_html($caption); ?></p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	</div>
</div>
