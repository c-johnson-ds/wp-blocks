<?
$id = 'faq-wells-';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'faq-wells py-10';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$heading = get_field('top_heading');
$button = get_field('top_button');
$info = get_field('info');
$button = get_field('button');
if( isset( $block['data']['preview_image'] )  ) : ?>

	<img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/blocks/block-images/faq-links.png" alt="">

<? else : ?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
		<div class="container mx-auto text-center">
			<div class="w-100 mb-8">
				<h2 class="block font-bold"><?= $heading; ?></h2>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-10">
				<? if ( have_rows( 'link_wells' ) ) : while ( have_rows( 'link_wells' ) ) : the_row(); ?>
				<div class="faq-link-well">
					<span class="semibold small-blue-font mb-4 block uppercase"><?php the_sub_field('category_heading'); ?></span>
					<? if ( have_rows( 'links' ) ) : ?>
					<ul class="list-none">
					<?while ( have_rows( 'links' ) ) : the_row(); ?>
						<? $link = get_sub_field('link'); ?>
						<li class="list-none mb-2">
							<?php

							if( $link ):
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="inline-block no-underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" <? if(get_sub_field('download')){ echo 'download';} ?>>
									<?php echo esc_html( $link_title ); ?>
									<? if(get_sub_field('download')): ?>
									<i class="fa-light fa-arrow-down-to-line inline-block relative"></i>
									<? else: ?>
									<i class="fa-light fa-arrow-right inline-block relative"></i>
									<? endif; ?>
								</a>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
					</ul>
					<? endif; ?>
				</div>
				<?php endwhile;  endif; ?>
			</div>
		</div>
</section>
<?php endif; ?>