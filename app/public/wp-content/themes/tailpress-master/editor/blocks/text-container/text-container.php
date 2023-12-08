<?php
/**
 * Padding Spacer Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'container-wrapper-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'container-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$classes = ['block-about'];

$anchor = '';
$anchorId = get_field('anchor_id');
$width = get_field('width');
$small = get_field('padding_small');
$medium = get_field('padding_medium');
$large = get_field('padding_large');
$wysiwyg = get_field('wysiwyg');
$widthValues = 'w-[960px] w-[1040px] w-[750px]';
$pbsmall = get_field('padding_bottom_small');
$ptsmall = get_field('padding_top_small');
$pblarge = get_field('padding_bottom_large');
$ptlarge = get_field('padding_top_large');
$rmbmg = get_field('remove_bottom_margin');
$rmtmg = get_field('remove_top_margin');
if($ptlarge == 'mtt-0' || $ptlarge == ''){
    $ptlarge = 'mt-20';
}
if($pblarge == 'mb-0' || $pblarge == ''){
    $pblarge = 'mb-20';
}
if($ptsmall == 'mt-0' || $ptsmall == ''){
    $ptsmall = 'mt-10';
}
if($pbsmall == 'mb-0' || $pbsmall == ''){
    $pbsmall = 'mb-10';
}
if(empty($width)){
    $width = '';
}elseif($width == 'Full'){
    $width = '';
}else{
    $width = 'w-['.$width.']';
}

?>

<section id="<?php echo esc_attr($anchorId); ?>" class="<?php echo esc_attr($className); ?> relative my-10 md:my-20" style="<?php if($rmbmg){ echo 'margin-bottom: 0;';} ?><?php if($rmtmg){ echo 'margin-top: 0;';} ?>">
    <div class="container mx-auto">
        <div class="<?php echo $width; ?> max-w-full mx-auto">
            <?php if($wysiwyg): ?>
                <div class="prose headings:text-secondary prose-p:mb-[20px] md:prose-p:text-[18px] md:prose-p:text-[20px] prose-headings:font-semibold">
                    <?php echo $wysiwyg; ?>
                </div>
            <?php endif; ?>
            <InnerBlocks />
        </div>
    </div>
</section>