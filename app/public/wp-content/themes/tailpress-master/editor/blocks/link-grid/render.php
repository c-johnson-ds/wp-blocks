<?
$id = 'link-grid-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'link-grid';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

?>
<section class="<?= $className; ?>" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="container">
		<div class="row top-heading-row">
			<div class="col-12 text-center">
				<?
				$topHeading = get_field('top_heading');
				$topInfo = get_field('info_text');
				$link = get_field('top_link');
				?>
				<? if($topHeading): ?>
					<h2 class="animate-fade-up"><?= $topHeading; ?></h2>
				<? endif; ?>
				<? if($topInfo): ?>
					<p class="animate-fade-up"><?= $topInfo; ?></p>
				<? endif;
				if( $link ):
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="animate-fade-up" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<? if ( have_rows( 'link_grid' ) ) : ?>
				<? $delay = 0; ?>
				<?php while ( have_rows( 'link_grid' ) ) : the_row(); ?>
					<?
					$boxBg = get_sub_field( 'background_image' );
					$boxTitle = get_sub_field( 'box_title' );
					$gridlink = get_sub_field('link');
					?>
					<div class="col-xl-6 col-lg-6 col-md-6 col-12">
						<div class="box-wrapper animate-fade-in" style="animation-delay: 0.<?= $delay; ?>s">
							<div class="box text-center justify-content-center align-content-center d-flex" style="background-image: url(<?= $boxBg; ?>);">
								<a class="h4 white" href="<?= $gridlink['url']; ?>">
									<span><?= $boxTitle; ?></span>
								</a>
							</div>
						</div>
					</div>
				<?	$delay++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

