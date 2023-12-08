<?
/**
 * Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'accordion-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'accordion my-10 lg:my-20 overflow-hidden';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$anchorId = get_field('anchor_id');
$title = get_field('title');
?>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
	<div class="flex flex-col items-center justify-between lg:flex-row">
		<div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
			<div class="max-w-xl mb-6">
				<div>
					<p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
						Brand new
					</p>
				</div>
				<h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
					The quick, brown fox<br class="hidden md:block" />
					jumps over
					<span class="inline-block text-deep-purple-accent-400">a lazy dog</span>
				</h2>
				<p class="text-base text-gray-700 md:text-lg">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
				</p>
			</div>
			<div class="flex flex-col items-center md:flex-row">
				<a
					href="/"
					class="inline-flex items-center justify-center w-full h-12 px-6 mb-3 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto md:mr-4 md:mb-0 bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
				>
					<span class="mr-3">Start Shopping</span>
					<svg width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4">
						<polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="4,4 22,4 19,14 4,14 "></polyline>
						<circle cx="4" cy="22" r="2" stroke-linejoin="miter" stroke-linecap="square" stroke="none" fill="currentColor"></circle>
						<circle cx="20" cy="22" r="2" stroke-linejoin="miter" stroke-linecap="square" stroke="none" fill="currentColor"></circle>
						<polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="1,1 4,4 4,14 2,18 23,18 "></polyline>
					</svg>
				</a>
				<a href="/" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Get 15% discount</a>
			</div>
		</div>
		<div class="relative lg:w-1/2">
			<img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260" alt="" />
			<a href="/" aria-label="Play Video" class="absolute inset-0 flex items-center justify-center w-full h-full transition-colors duration-300 bg-gray-900 bg-opacity-50 group hover:bg-opacity-25">
				<div class="flex items-center justify-center w-16 h-16 transition duration-300 transform bg-gray-100 rounded-full shadow-2xl group-hover:scale-110">
					<svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
						<path
							d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z"
						></path>
					</svg>
				</div>
			</a>
		</div>
	</div>
</div>