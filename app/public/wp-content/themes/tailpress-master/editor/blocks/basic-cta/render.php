<?php
//$id = 'basic-cta-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}else{
	$id = '';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'basic-cta';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
$heading = get_field('heading');
$small_heading = get_field('small_heading');
$info = get_field('info');
$button = get_field('button');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="container mx-auto my-12 border-b pb-12">
		<h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>
		<h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme
			with <a href="https://tailwindcss.com" class="text-primary">Tailwind CSS</a>.</h2>
		<p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">TailPress is your go-to starting
			point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out
			of the box.</p>
		<a href="https://github.com/jeffreyvr/tailpress"
		   class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
			on Github</a>
	</div>
</section>