<?php
/**
 * Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

//$id = 'accordion-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}else{
	$id = 'accordion';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'accordion my-10 lg:my-20 overflow-hidden';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$anchorId = get_field('anchor_id');
$title = get_field('section_title');

 ?>
<h1>test</h1>
<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?>" >
    <div class="mx-auto container">
		<?php if($title): ?>
		<div class="mb-8 block">
			<h2 class="text-mh2 md:text-h2 leading-[36px] font-serif font-semibold text-secondary"><?php echo $title; ?></h2>
		</div>
		<?php endif; ?>
		<?php if( have_rows('accordion') ): ?>
			<div class="accordions">
				<?php while( have_rows('accordion') ): the_row();
					$anchor_id = get_sub_field('anchor_id');
					$title = get_sub_field('accordion_title');
					$content = get_sub_field('content');
					?>
					<div class="accordion mb-4 border border-[#CCD5E2]">
						<div class="accordion-toggle active font-serif font-semibold text-[18px] leading-[22px] lg:text-[25px] lg:leading-[28px] text-[#324258] bg-[#f1f1f1] min-h-[80px] flex items-center py-[5px] pl-[20px] pr-[50px] cursor-pointer relative">
							<?php echo $title; ?>
							<span class="absolute right-0 top-0 bottom-0 text text-[#324258] flex px-6 open-icon">
								<span class="self-center text-secondary icon">
									<?php get_template_part( 'assets/icons/chevron-down-solid'); ?>
								</span>
							</span>
						</div>
						<div class="content">
							<div class="prose prose-p:text-[20px] w-full py-[20px] px-[20px] max-w-full">
								<?php echo $content; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<script>
	$('.accordion-toggle').click(function () {
		$(this).parent().toggleClass('active');
		$(this).next('.content').toggleClass('hidden');
	});
</script>