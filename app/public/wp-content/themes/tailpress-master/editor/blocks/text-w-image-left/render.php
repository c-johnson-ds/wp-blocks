<?php
/**
 * Text with Image Left Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-img-left-';
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'text-img-left';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$anchorId = get_field('anchor_id');
$title = get_field('title');
$image = get_field('image');
$copy = get_field('copy');
$link = get_field('button');
$link2 = get_field('additional_button');
$imgWidth = get_field('image_width');
?>
<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?> my-10 md:my-20" >
	<div class="container mx-auto">
		<div class="grid grid-cols-12 gap-4 w-full">
			<div class="col-span-12 md:col-span-6 flex justify-start">

				<?php if( !empty( $image ) ):
					$url = $image['url'];
					$ititle = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// Thumbnail size attributes.
					$size = 'large';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];
					?>
					<div class="block w-full">
						<img class="w-full md:w-[80%] h-auto max-w-full" <?php if($imgWidth): ?>style="width:<?php echo $imgWidth; ?>px"<?php endif; ?> src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
				<?php endif; ?>
			</div>
			<div class="col-span-12 md:col-span-6 flex content-center">
				<div class="inner max-w-full self-center">
					<?php if($title): ?>
						<h2 class="text-mh2 md:text-h2 font-serif text-secondary mb-3 md:mb-6 font-semibold"><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if($copy): ?>
						<div class="mb-0 prose prose-p:md:text-xl prose-p:leading-[26px] prose-p:mb-4 prose-p:last-of-type:mb-0">
							<?php echo $copy; ?>
						</div>
					<?php endif; ?>

                    <?php if($link): ?>
                    <div class="block">
						<?php if($link): ?>
						<div class="inline-block mr-8 mt-4">
							<?php
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							button_outline_blue_no_m($link_url,$link_title,$link_target);
							?>
						</div>
						<?php endif; ?>
						<?php if($link2): ?>
							<div class="inline-block mt-4">
								<?php
								$link_url = $link2['url'];
								$link_title = $link2['title'];
								$link_target = $link2['target'] ? $link2['target'] : '_self';
								button_outline_blue_no_m($link_url,$link_title,$link_target);
								?>
							</div>
						<?php endif; ?>
                    </div>
                    <?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>