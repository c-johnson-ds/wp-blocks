<?php
//$id = 'basic-cta-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}else{
	$id = 'basic-cta';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'basic-cta';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$small_heading = get_field('small_heading');
$info = get_field('info');
$button = get_field('button');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

</section>