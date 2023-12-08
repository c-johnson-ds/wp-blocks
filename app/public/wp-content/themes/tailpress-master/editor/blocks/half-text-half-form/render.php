<?php
/**
 * Restricted Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
if( !empty($block['align']) ) {
    $classes .= sprintf( ' align%s', $block['align'] );
}

$formID = get_field('form_id');

if( isset( $block['data']['preview_image'] )  ) : ?>

	<img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/half-text-half-form.png" alt="">

<? else : ?>
<div class="half-col-block-t-f <?php echo esc_attr($classes); ?>">
	<div class="container mx-auto" style="min-height: 100px;">
		<div class="grid gap-50 grid-cols-1 grid-rows-1 md:grid-rows-1 md:grid-cols-12">
			<div class="col-span-1 md:col-span-6 lg:col-span-6 pr-0 md:pr-20 pt-0  md:pt-8">
				<InnerBlocks />
			</div>
			<div class="col-span-1 md:col-span-6 lg:col-span-6">
				<div class="form-wrapper">
				<?
				if (function_exists('gravity_form')) {
					if($formID){
						gravity_form($formID, false, false, false, false, true, false, true);
					}
				}
				?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
