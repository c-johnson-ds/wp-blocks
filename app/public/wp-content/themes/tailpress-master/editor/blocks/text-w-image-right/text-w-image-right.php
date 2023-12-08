<?php
/**
 * Text with Image Right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-img-right-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'text-img-right';
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
$imgWidth = get_field('image_width');
if ( isset( $block['data']['preview_image'] ) ) : ?>

    <img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/text-image-right.png" alt="Preview Module Render"/>

<?php else : ?>
<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?> my-10 md:my-20" >
	<div class="container mx-auto">
		<div class="grid grid-cols-12 gap-4 w-full justify-center">
			<div class="order-1 md:order-0 col-span-12 lg:col-span-6 flex content-center">
				<div class="inner w-full lg:max-w-[570px] self-center">
					<?php if($title): ?>
						<h2 class="text-mh2 md:text-h2 font-serif text-secondary mb-3 md:mb-3 font-semibold"><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if($copy): ?>
						<div class="mb-0 prose prose-p:md:text-xl prose-p:leading-[1.5] prose-p:mb-4 prose-p:last-of-type:mb-0">
							<?php echo $copy; ?>
						</div>
					<?php endif; ?>
						<?php if($link): ?>
                    <div class="mt-4 mb-4 md:mb-0 md:mt-8">
                        <?php
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button btn button-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
						<?php endif; ?>

				</div>
			</div>
			<div class="order-0 md:order-1 col-span-12 lg:col-span-6 flex justify-end">
				<?php if( !empty( $image ) ):
					$url = $image['url'];
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// Thumbnail size attributes.
					$size = 'large';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];
					?>
				<div class="block w-full">
					<img class="w-full max-w-full" <?php if($imgWidth): ?>style="width:<?php echo $imgWidth; ?>px"<?php endif; ?> src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>