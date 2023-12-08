<?php
$id = 'card-grid-';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
$className = 'container mx-auto justify-center';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$parent_id = get_the_ID();

$args = array(
    'post_type'      => 'event',
    'post_status'    => 'publish',
    'posts_per_page' => -1, // Retrieve all child pages
    'post_parent'    => $parent_id,
    'order'          => 'ASC', // You can change the order as needed
    'orderby'        => 'menu_order' // You can change the orderby as needed
);

$child_pages = new WP_Query($args);
$preHeading = get_field( 'pre_heading' );
$heading = get_field( 'heading' );
$text = get_field( 'text' );
$link = get_field( 'button' );
?>
<div class="<?php echo esc_attr($className); ?>" style="min-height: 100px;">
	<div class="mt-10 lg:mt-20">
		<?php if($preHeading || $heading || $text) : ?>
		<div class="block items-end justify-between lg:flex">
			<div class="flex max-w-4xl flex-col space-y-7">
				<?php if($preHeading) : ?>
					<h3 class="text-lg font-medium uppercase tracking-wide text-neutral-900 dark:text-neutral-300">
						<?= $preHeading; ?>
					</h3>
				<?php endif; ?>
                <?php if($heading) : ?>
				<h2 class="text-4xl font-semibold leading-tight tracking-wide text-neutral-900 dark:text-neutral-50 xl:text-5xl">
					<?php $heading; ?>
				</h2>
				<?php endif; ?>
                <?php if($text) : ?>
				<p class="max-w-xl text-lg text-neutral-600 dark:text-neutral-400">
					<?php echo $text; ?>
				</p>
				<?php endif; ?>
			</div>
			<?php if($link) : ?>
			<div class="mt-6 flex justify-center">
				<a href="#" class="rounded-md bg-white px-10 py-3 text-base font-medium text-neutral-900 shadow-sm ring-1 ring-inset ring-neutral-300 hover:bg-neutral-50 dark:bg-neutral-900 dark:text-white dark:ring-neutral-800 dark:hover:bg-neutral-800">
					View all
				</a>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="mx-auto mb-10 lg:mb-20 max-w-full">
			<dl class="grid grid-cols-1 gap-x-8 gap-y-16 md:grid-cols-2 xl:grid-cols-3">
                <?php if ($child_pages->have_posts()) : while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
					<div class="flex flex-col rounded-md card relative overflow-hidden">
                        <?php
                        $featuredImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $altText = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
						$icon = get_field('icon',get_the_ID());
						if($icon): ?>
						<div class="icon-wrap pt-[200px] relative bg-dark">
							<div class="inner absolute left-0 right-0 top-0 bottom-0 w-[120px] h-[120px] text-center m-auto bg-white rounded-full block text-5xl">
								<i class="fa-solid <?php echo $icon; ?> leading-[120px]"></i>
							</div>
						</div>
                        <?php else: ?>
						<img
							src="<?php echo $featuredImage; ?>"
							alt="<?php echo $altText; ?>"
							width="400"
							height="240"
							class="w-full rounded-t-md"
						/>
						<?php endif; ?>
						<div class="px-3 py-8 lg:px-4 lg:py-10">
							<div class="flex items-center space-x-4 none hidden">
								<time
									datetime="<?php the_field('start_date', $parent_id); ?>"
									class="text-sm text-dark-500 dark:text-dark-400"
								>
                                    <?php the_field('start_date', $parent_id); ?>
								</time>
							</div>

							<dt class="mt-6">
								<h3 class="text-2xl font-semibold leading-tight text-primary">
                                    <?php echo get_the_title(); ?>
								</h3>
							</dt>

							<dd class="mt-4 flex flex-auto flex-col text-base leading-7">
								<?php if(get_the_excerpt()) : ?>
								<p class="flex-auto text-base text-neutral-500 dark:text-neutral-500">
                                    <?php echo get_the_excerpt(); ?>
								</p>
								<?php endif; ?>
								<div class="flex items-center">
									<a href="<?php echo get_the_permalink(); ?>" class="flex w-full justify-center text-center p-3 items-center gap-x-2 leading-none bg-primary text-white rounded test-shadow hover:bg-secondary font-bold uppercase text-sm transition-all duration-150 ease-in-out hover:-translate-y-0.5 after:before:content-[attr(before)] after:absolute after:left-0 after:right-0 after:top-0 after:bottom-0">
                                        <?php echo get_the_title(); ?>
										<i class="fa-sharp fa-solid fa-chevron-right h-4 w-4"></i>
									</a>
								</div>
							</dd>
						</div>
					</div>
				<?php wp_reset_postdata(); endwhile; endif; ?>
			</dl>
		</div>
	</div>
</div>