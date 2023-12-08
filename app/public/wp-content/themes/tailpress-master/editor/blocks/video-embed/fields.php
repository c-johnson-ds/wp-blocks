<?php
add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
                                   'key' => 'group_640a38dff232c',
                                   'title' => 'Video Embed',
                                   'fields' => array(
                                       array(
                                           'key' => 'field_640a38e0603dd',
                                           'label' => 'Video Embed',
                                           'name' => '',
                                           'aria-label' => '',
                                           'type' => 'accordion',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'open' => 0,
                                           'multi_expand' => 0,
                                           'endpoint' => 0,
                                       ),
                                       array(
                                           'key' => 'field_640a390c603de',
                                           'label' => 'Video Embed',
                                           'name' => 'video_embed',
                                           'aria-label' => '',
                                           'type' => 'oembed',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'width' => '',
                                           'height' => '',
                                       ),
                                   ),
                                   'location' => array(
                                       array(
                                           array(
                                               'param' => 'block',
                                               'operator' => '==',
                                               'value' => 'acf/video-embed',
                                           ),
                                       ),
                                   ),
                                   'menu_order' => 0,
                                   'position' => 'normal',
                                   'style' => 'default',
                                   'label_placement' => 'left',
                                   'instruction_placement' => 'label',
                                   'hide_on_screen' => '',
                                   'active' => false,
                                   'description' => '',
                                   'show_in_rest' => 0,
                                   'acfe_display_title' => '',
                                   'acfe_autosync' => '',
                                   'acfe_form' => 0,
                                   'acfe_meta' => '',
                                   'acfe_note' => '',
                               ) );
} );

?>