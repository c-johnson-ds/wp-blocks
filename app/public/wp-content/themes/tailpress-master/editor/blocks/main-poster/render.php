<?php
$id = 'main-poster-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'main-poster';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$p = get_field('paragraph');
$image = get_field('background_image');
$link = get_field('button');
?>
<section class="<?php echo $className; ?>" id="<?php echo $id; ?>">
	<div class="bg-gradient-to-r from-[#5d57e9] from-10% via-[#000] via-30% to-[#e83ee7] to-90%">
		<div class="container mx-auto">
			<div class="py-24">
				<div class="max-w-screen-md">
					<h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-white mb-12"><?php echo $heading; ?></a>.</h1>
					<?php if( $p ): ?>
						<p class="text-gray-600 text-xl font-medium mb-10"><?php echo $p; ?></p>
					<?php endif; ?>
					<?php
					$link = get_sub_field('button');
					if( $link ):
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="button hidden w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>