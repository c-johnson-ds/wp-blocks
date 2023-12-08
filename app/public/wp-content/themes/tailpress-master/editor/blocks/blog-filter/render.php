<?
/**
 * Blog Filter Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'apps-list';
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'apps-list' . $block['id'];
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$nameHeadingSRB = get_field( 'name_heading' );
$infoSRB = get_field( 'info' );
$buttonSRB = get_field( 'button_statRow' );
?>
<script src="<?php echo get_bloginfo('template_url') ?>/assets/scripts/isotope.js"></script>
<section id="blog-list">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center" style="text-align: center;">
				<h2>Categories</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-10 col-lg-10" id="sub-nav-blogs">
				<div  class="row">
					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 ">
						<p class="left-text">Filter Results</p>
					</div>
					<div class="col-xs-12 col-sm-10 col-md-10" id="filters">
					<? $AppTerms = get_terms(
						array('taxonomy' => 'category','hide_empty' => true,'exclude' => 1,'orderby' => 'meta_value_num', 'order' => 'ASC','meta_query' => [[
							'key' => 'order',
							'type' => 'NUMERIC',
						]],)
					); ?>
					<ul id="sub-nav-product-list" class="row" style="margin: 0;">
						<?php foreach ($AppTerms as $term) : ?>
							<li class="flex-fill">
								<button class="filter-value categories <?php echo $term->slug; ?>" data-filter=".<?php echo $term->slug; ?>" data-term="<?php echo $term->slug; ?>" id="blog-<?php echo $term->slug; ?>">
									<?php echo $term->name; ?>
								</button>
							</li>
						<?php endforeach; ?>
						<li class="active"><button class="filter-value categories flex-fill all" data-filter=".all" id="blog-all" href="/product" data-term="all">View All</button></li>
					</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-1 col-lg-2">
				<div class="row start-xs middle-xs search-bar">
					<div class="col-md-12 search-box" id="searchbox">
						<form id="animated-search">
							<input type="text" name="q" id="keyword">
							<button><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/search-icon.png" alt="Search Button"></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row center-xs">
			<div class="col-md-12 col-sm-12 col-xs-12 app-lists">
				<div class="row apps" style="position: relative;">
					<div class="col-lg-12" style="width: 100%;">
						<div class="row start-xs card-container grid">
							<?
							$args = [
							'post_type' => 'post',
							'posts_per_page' => -1,
							'post_status' => 'publish',
							'nopaging' => true,
							'orderby' => 'date',
							'order'=> 'DESC',
							'tax_query' => $tax_qry,
							];
							$qry = new WP_Query( $args );

							if ($qry->have_posts()) :
							while ($qry->have_posts()) : $qry->the_post(); ?>
							<?

							$post_categories = wp_get_post_categories(get_the_ID(),array('exclude'=> 1));
							$cats = array();

							?>
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 all start-xs card all blog-cards feature-item <? foreach($post_categories as $c){$cat = get_category( $c ); echo ''.$cat->slug.' '; } ?>" data-category="<? foreach($post_categories as $c){$cat = get_category( $c ); echo ''.$cat->slug.' '; } ?>" data-toggle-class="active">

								<a class="cards-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
									<div class="img-container lozad" style="background-image: url(<? the_post_thumbnail_url('large'); ?>);" ></div>

									<div class="row">
										<div class="col-md-12 card-text">

											<h5><?php echo get_the_date('F jS, Y'); ?></h5>
											<?
											$text = get_the_title();
											if($text) {
												$exc = strip_tags($text);
												if (strlen($exc) > 90) {
													$stringCut = substr($exc, 0, 90);
													$endPoint = strrpos($stringCut, ' ');
													$exc = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
													$exc .= '...';
												}
											}
											echo '<h4>'.$exc.'</h4>';
											?>
											<h5 class="type-of-category"><? foreach($post_categories as $c){$cat = get_category( $c ); echo ''.$cat->name.' '; } ?></h5>
										</div>
									</div>
								</a>
							</div>
							<? endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">

		(function($) {
			$doc = $(document);
			$doc.ready( function() {
				function get_posts($params) {

					$container = $('#blog-list');
					$content   = $container.find('.card-container');
					$status    = $container.find('.status');

					$status.text('Loading posts ...');

					$.ajax({
						url: ajx.ajax_url,
						data: {
							action: 'blog_filter_posts',
							nonce: ajx.nonce,
							params: $params
						},
						type: 'post',
						dataType: 'json',
						success: function(data, textStatus, XMLHttpRequest) {
							if (data.status === 200) {
								$content.html(data.content);
							}
							else if (data.status === 201) {
								$content.html(data.message);
							}
							else {
								$status.html(data.message);
							}
						},
						error: function(MLHttpRequest, textStatus, errorThrown) {
							$status.html(textStatus);
							console.log(MLHttpRequest);
							console.log(textStatus);
							console.log(errorThrown);
						},
						complete: function(data, textStatus) {
							// msg = textStatus;
							// if (textStatus === 'success') {
							// 	msg = data.responseJSON.found;
							// }
							// $status.text('Showing ' + msg + ' Results For');

						}
					});

				}
				var mafs = $("#searchbox");
				var mafsForm = mafs.find("form");
				mafsForm.submit(function(e){
					e.preventDefault();
					if(mafsForm.find("#keyword").val().length !== 0) {
						$search = mafsForm.find("#keyword").val();
					}
					$search = mafsForm.find("#keyword").val();
					$params    = {
						'search' : $search,
						'term': 'all'
					};
					console.log($search);
					get_posts($params);
				});
				/*
				$('#blog-list').on('click', '.filter-value', function(event) {
					if(event.preventDefault) { event.preventDefault(); }
					$this = $(this);
					console.log('clicked term');
					if ($this.data('term')) {
						$this.closest('ul').find('.active').removeClass('active');
						$this.parent('li').addClass('active');
					}

					$params    = {
						'term' : $this.data('term'),
					};
					get_posts($params);
				});

				 */
				const queryString = window.location.search;
				const urlParams = new URLSearchParams(queryString);
				if (urlParams.get('cat')) {
					var cat = urlParams.get('cat');
					if(cat == 'our-customers'){
						jQuery('#blog-our-customers').trigger('click');
						jQuery([document.documentElement, document.body]).animate({
							scrollTop: jQuery("#blog-list").offset().top
						}, 500);
					}
				}else{
				}
			});

		})(jQuery)

		var $grid = $('.grid').isotope({
			itemSelector: '.feature-item',
			layoutMode: 'fitRows',
			getSortData: {
				category: '[data-category]',
			}
		});

		// filter functions
		var filterFns = {
			// show if number is greater than 50
			numberGreaterThan50: function() {
				var number = $(this).find('.number').text();
				return parseInt( number, 10 ) > 50;
			},
			// show if name ends with -ium
			ium: function() {
				var name = $(this).find('.name').text();
				return name.match( /ium$/ );
			}
		};


		// bind filter button click
		$('#filters').on( 'click', 'button', function() {
			var filterValue = $( this ).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[ filterValue ] || filterValue;
			$grid.isotope({ filter: filterValue });
		});


		// change is-checked class on buttons
		$('.button-group').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				$( this ).addClass('is-checked');
			});
		});
</script>

