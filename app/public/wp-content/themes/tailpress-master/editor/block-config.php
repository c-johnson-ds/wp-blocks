<?php
function ds_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'theme-blocks',
                'title' => __( 'Theme Blocks', 'theme-blocks' ),
            ),
            array(
                'slug' => 'theme-headers',
                'title' => __( 'Theme Headers', 'theme-headers' ),
            ),
        )
    );
}
add_filter( 'block_categories_all', 'ds_block_category', 10, 2);

function is_root_block($block_id) {
    $block = get_post($block_id);
    return empty($block->post_parent);
}

//function block_data_pre_render($parsed_block, $source_block)
//{
//	$core_blocks = [
//		'core/group',
//		'core/column'
//	];
//
//	if (
//		in_array($source_block['blockName'], $core_blocks, true) &&
//		!is_admin() &&
//		!wp_is_json_request()
//	) {
//		$parsed_block['attrs']['hasChild'] = 1;
//		array_walk($parsed_block['innerBlocks'], 'inner_block_looper');
//	}
//
//	return $parsed_block;
//}
//
//function inner_block_looper(&$itm, $key)
//{
//	if ($key === 'attrs') {
//		$itm['hasParent'] = 1;
//	}
//	if (is_array($itm)) {
//		array_walk($itm, 'inner_block_looper');
//	}
//}


//function core_block_wrappers( $block_content, $block ) {
//	$coreBlocks = array('core/archives','core/audio','core/button','core/categories','core/code',
//		'core/column','core/columns','core/coverImage','core/embed','core/file','core/freeform',
//		'core/gallery','core/heading','core/html','core/image','core/latestComments','core/latestPosts',
//		'core/list','core/more','core/nextpage','core/paragraph','core/preformatted','core/pullquote',
//		'core/quote','core/reusableBlock','core/separator','core/shortcode','core/spacer',
//		'core/subhead','core/table','core/textColumns','core/verse','core/video');
//	if ( in_array($block['blockName'], $coreBlocks) ) {
//		$content = '<div class="container mx-auto my-8">';
//		if (isset($block['innerBlocks'])) {
//			foreach ($block['innerBlocks'] as $inner_block) {
//				render_block($inner_block);
//			}
//		}
//		$content .= $block_content;
//		$content .= '</div>';
//		return $content;
//	}
//	var_dump($block);
//	return $block_content;
//}
//
//add_filter( 'render_block', 'core_block_wrappers', 10, 2 );



function load_blocks() {
    $theme  = wp_get_theme();
    $blocks = get_blocks();
    foreach( $blocks as $block ) {
        if ( file_exists( get_template_directory() . '/editor/blocks/' . $block . '/block.json' ) ) {
            register_block_type( get_template_directory() . '/editor/blocks/' . $block . '/block.json' );
            wp_register_style( 'block-' . $block, get_template_directory_uri() . '/editor/blocks/' . $block . '/style.css', null, $theme->get( 'Version' ) );

            if ( file_exists( get_template_directory() . '/editor/blocks/' . $block . '/init.php' ) ) {
                include_once get_template_directory() . '/editor/blocks/' . $block . '/init.php';
            }
        }
    }
}
add_action( 'init', __NAMESPACE__ . '\load_blocks', 5 );

/**
 * Load ACF field groups for blocks
 */
function load_acf_field_group( $paths ) {
    $blocks = get_blocks();
    foreach( $blocks as $block ) {
        $paths[] = get_template_directory() . '/editor/blocks/' . $block;
    }
    return $paths;
}
add_filter( 'acf/settings/load_json', __NAMESPACE__ . '\load_acf_field_group' );

/**
 * Get Blocks
 */
function get_blocks() {
    $theme   = wp_get_theme();
    $blocks  = get_option( 'theme-blocks' );
    $version = get_option( 'theme-blocks_version' );
    if ( empty( $blocks ) || version_compare( $theme->get( 'Version' ), $version ) || ( function_exists( 'wp_get_environment_type' ) && 'production' !== wp_get_environment_type() ) ) {
        $blocks = scandir( get_template_directory() . '/editor/blocks/' );
        $blocks = array_values( array_diff( $blocks, array( '..', '.', '.DS_Store', '_base-block' ) ) );

        update_option( 'theme-blocks', $blocks );
        update_option( 'theme-blocks_version', $theme->get( 'Version' ) );
    }
    return $blocks;
}

///**
// * Block categories
// *
// * @since 1.0.0
// */