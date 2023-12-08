<?
/**
 * Info Tiles Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'info-tiles-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'info-tiles';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$bgColor = get_field( 'background_color' ) ?: '#fff';
$bgimg = get_field( 'background_image' );
$sectionID = get_field( 'section_id' );
$largeTop = get_field('large_top');
$largeBottom = get_field('large_bottom');
$mediumTop = get_field('medium_top');
$mediumBottom = get_field('medium_bottom');
$smallTop = get_field('small_top');
$smallBottom = get_field('small_bottom');
?>
<style>
	#<?php echo esc_attr($id); ?>{
		padding-top: <?= $largeTop; ?>px;
		padding-bottom: <?= $largeBottom; ?>px;
	}
	@media (max-width: 900px){
		#<?php echo esc_attr($id); ?>{
		padding-top: <?= $mediumTop; ?>px;
		padding-bottom: <?= $mediumBottom; ?>px;
	}
	}
	@media (max-width: 576px){
		#<?php echo esc_attr($id); ?>{
		padding-top: <?= $smallTop; ?>px;
		padding-bottom: <?= $smallBottom; ?>px;
	}
	}
</style>

<section id="<?php echo esc_attr($id); ?>" class="inner-b-cont <?php echo esc_attr($className); ?> bg-[#244881]">
	<div class="container mx-auto">
		<div class="grid gap-5 lg:gap-10 grid-cols-1  lg:grid-cols-3">
			<?php if( have_rows('tiles') ): ?>
				<?php $iteration = 1; ?>
				<?php while( have_rows('tiles') ): the_row();
					$topLabel = get_sub_field('top_label');
					$icon = get_sub_field('icon');
					$heading = get_sub_field('heading');
					$copy = get_sub_field('copy');
					$link = get_sub_field('button');
					if($iteration == 2){
						$headingClass = ' text-[40px] uppercase';
						$textClass = '';
						$buttonClass = 'button-blue';
					}else{
						$headingClass = 'text-white text-[40px] uppercase';
						$textClass = 'text-white';
						$buttonClass = 'button-white';
					}

					?>
					<div class="<?php if($iteration == 2): ?>bg-white<?php else: ?>bg-[#445d93]<?php endif; ?> shadow-lg transition-all tile ease-in-out duration-300 hover:shadow-2xl hover:cursor-pointer lg:hover:top-[-95px] mb-5 md:mb-0 p-10 rounded-xl relative min-w-[90%] top-[-20px] lg:top-[-80px] mx-auto max-w-[90%] md:min-w-full md:max-w-full">
						<div class="inner text-center">
							<?php if($topLabel): ?>
							<span class="text-[#f6a089] tracking-[1px] uppercase text-[18px]"><?php echo $topLabel; ?></span>
							<?php endif; ?>
							<div class="flex justify-center">
								<?php if($icon): ?>
								<div class="self-center">
									<img class="mr-3" width="25" src="<?php echo esc_attr($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
								</div>
								<?php endif; ?>
								<div>
									<h2 class="<?php echo $headingClass; ?> text-mh2 font-black md:text-h2"><?php echo $heading; ?></h2>
								</div>
							</div>
							<div class="block">
								<p class="<?php echo $textClass; ?> my-4 leading-[2]">
									<?php echo $copy; ?>
								</p>
							</div>
							<?php if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="<?php echo $buttonClass; ?> btn hover:cursor-pointer mt-6 expanded-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div>
					</div>
					<?php $iteration++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
