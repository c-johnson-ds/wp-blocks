<?
/**
 * Featured Quote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'featured-quote-'. $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-quote' ;
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$q = get_field('quote');
$c = get_field('source');
$rtp = get_field('remove_top_padding');
$useRandom = get_field('use_random_quote');

?>
<section class="<?php echo esc_attr($className); ?> <?php if(!$rtp){ echo 'pt-24'; } ?> pb-28 bg-[#244881]" id="<?php echo esc_attr($id); ?>">
    <div class="container mx-auto">
        <div class="text-center block">
            <img width="40" class="mx-auto mb-[20px]" src="<?php echo get_template_directory_uri(); ?>/assets/icons/quote-left-sharp-solid.svg" alt="quote mark">
        </div>
        <div class="w-[1160px] max-w-full mx-auto text-center">
			<?php if( $useRandom ): ?>
				<?php
                $args = array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 1,
                    'orderby'        => 'rand'
                );

                $testimonial_query = new WP_Query( $args );

                if ( $testimonial_query->have_posts() ) {
                    while ( $testimonial_query->have_posts() ) {
                        $testimonial_query->the_post();
						?>
						<blockquote class="text-[28px] font-bold mb-10 text-white">
							<?php the_content(); ?>
                        </blockquote>
						<span class="text-[28px] text-white">
							<?php the_title();?>
                        </span>
                   <?php }
                    wp_reset_postdata(); // Reset post data
                } else {
                    echo 'No testimonials found.';
                }
				?>
            <?php else: ?>
            <blockquote class="text-[28px] font-bold mb-10 text-white">
				<?php echo $q; ?>
            </blockquote>
            <span class="text-[28px] text-white">
				&mdash; <?php echo $c; ?>
			</span>
			<?php endif;?>
        </div>
    </div>
</section>