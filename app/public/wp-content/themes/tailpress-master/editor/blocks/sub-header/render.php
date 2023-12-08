<?php
$id = 'sub-hero-';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
$className = 'sub-hero';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$anchor_id = get_field('anchor_id');
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$info = get_field('info');
$button = get_field('button');
$bgimg = get_field('background_image');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> bg-primary relative" <?php if($bgimg):?> style="background-image: url(<?php echo esc_url($bgimg['url']); ?>);"<?php endif; ?>>
	<div class="absolute left-0 right-0 top-0 bottom-0 bg-gradient-to-r from-[#71b7dd] to-[#1567da] bg-opacity-90 z-0"></div>
	<div class="container text-center pt-[100px] pb-[100px] mx-auto z-10">
		<h1 class="mb-0 inline-block font-sans md:text-[40px] font-bold tracking-tight text-white text-[30px] sm:leading-none parallax-text slide-up-text">
            <?php if($heading): ?>
                <?php echo $heading; ?>
            <?php else: ?>
                <?php the_title(); ?>
            <?php endif; ?>
		</h1>
        <?php if($sub_heading): ?>
		<div class="slide-up-subtext">
			<p class="text-white relative text-[19px] md:text-[24px]"><?php echo $sub_heading; ?></p>
		</div>
        <?php endif; ?>
	</div>
</section>