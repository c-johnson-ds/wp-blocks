<?
$id = 'card-grid';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container mx-auto justify-center';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($className); ?>" style="min-height: 100px;">
	<div class="mt-24 sm:mt-32 lg:mt-40">
		<div class="block items-end justify-between lg:flex">
			<div class="flex max-w-4xl flex-col space-y-7">
				<h3 class="text-lg font-medium uppercase tracking-wide text-neutral-900 dark:text-neutral-300">
					Blog
				</h3>
				<h2 class="text-4xl font-semibold leading-tight tracking-wide text-neutral-900 dark:text-neutral-50 xl:text-5xl">
					Short heading goes here
				</h2>
				<p class="max-w-xl text-lg text-neutral-600 dark:text-neutral-400">
					Rhoncus morbi et augue nec, in id ullamcorper at sit. Condimentum sit nunc in eros scelerisque sed. Commodo in viverra nunc, ullamcorper ut.
				</p>
			</div>
			<div class="mt-6 flex justify-center">
				<a href="#" class="rounded-md bg-white px-10 py-3 text-base font-medium text-neutral-900 shadow-sm ring-1 ring-inset ring-neutral-300 hover:bg-neutral-50 dark:bg-neutral-900 dark:text-white dark:ring-neutral-800 dark:hover:bg-neutral-800">
					View all
				</a>
			</div>
		</div>
		<div class="mx-auto mt-10 max-w-md sm:mt-14 md:max-w-2xl lg:mt-20 lg:max-w-none">
			<dl class="grid grid-cols-1 gap-x-8 gap-y-16 md:grid-cols-2 xl:grid-cols-3">
				<!-- Your blog post items will be generated here -->
				<!-- Replace this comment with the generated blog post items -->
			</dl>
		</div>
	</div>
</div>