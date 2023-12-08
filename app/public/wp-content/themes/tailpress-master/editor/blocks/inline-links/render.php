<?
$id = 'inline-links-block-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'inline-links-block';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<? if ( have_rows( 'inline_links' ) ) : ?>
				<?php while ( have_rows( 'inline_links' ) ) : the_row(); ?>
					<?
					$link = get_sub_field('link');
					?>
					<a class="h4" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>

