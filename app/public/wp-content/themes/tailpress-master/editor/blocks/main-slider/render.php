<?php
$id = 'container-';
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container mx-auto';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<section class="block w-full <?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php if( have_rows('main_slider_block') ): ?>
		<div class="slides">
			<?php while( have_rows('main_slider_block') ): the_row();
				$image = get_sub_field('image');
				$link = get_sub_field('button');
				?>
				<div class="container mx-auto" style="background-image: url(<?php echo wp_get_attachment_image( $image, 'full' ); ?>)">
					<div class="inner">
						<h1></h1>
						<p></p>
						<?php
						$link = get_sub_field('button');
						if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>