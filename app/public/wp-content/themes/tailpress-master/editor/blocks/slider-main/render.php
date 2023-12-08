<?
/**
 * Main Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-main-';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider-main overflow-hidden';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

$anchorId = get_field('anchor_id');
$title = get_field('title');
if ( isset( $block['data']['preview_image'] ) ) : ?>

	<img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/slider-main.png" alt="main Slider"/>

<?php else : ?>
	<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?>" >
		<?php if( have_rows('main_slider_block') ): ?>
			<div class="slides">
				<?php while( have_rows('main_slider_block') ): the_row();
					$image = get_sub_field('image');
					$link = get_sub_field('button');
					$heading = get_sub_field('heading');
					$copy = get_sub_field('copy');
					?>
					<div class="slide h-[430px] sm:h-[530px] lg:h-[700px] w-full bg-cover bg-center relative" style="background-image: url(<?php echo esc_url($image['url']); ?>)">
						<div class="overlay bg-gradient-to-r from-[#3b2721] absolute left-0 right-0 top-0 bottom-0 to-transparent content-['']"></div>
						<div class="h-full content-center flex">
							<div class="container mx-auto self-center">
								<div class="grid grid-cols-12 lg:gap-x-20">
									<div class="col-span-12 md:col-span-8 px-4">
										<?php if($heading): ?>
											<h1 class="text-white text-shadow-dark text-[33px] md:text-[42px] lg:text-[68px] uppercase font-bold font-serif leading-[1] slide-up-text mb-4"><?php echo $heading; ?></h1>
										<?php endif; ?>
										<?php if($copy): ?>
											<div class="prose text-shadow-dark prose-p:text-white prose-p:text-[22px] text-white text-[25px font-semibold] mb-[20px] w-[650px] max-w-full">
												<span class="slide-up-subtext"><?php echo $copy; ?></span>
											</div>
										<?php endif; ?>
										<?php
										if( $link ):
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="button-white btn hover:text[#23477e] slide-up-button cursor-pointer" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												<?php echo esc_html( $link_title ); ?>
											</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</section>
<?php endif;?>