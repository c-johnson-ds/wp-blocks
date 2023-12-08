<?php
add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
                                   'key' => 'group_63d93a3ab0e1a',
                                   'title' => 'Banner w/ CTA',
                                   'fields' => array(
                                       array(
                                           'key' => 'field_63ebabce23b3d',
                                           'label' => 'Banner w/ CTA',
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
                                           'key' => 'field_63d94bde2d9bb',
                                           'label' => 'Preview',
                                           'name' => '',
                                           'aria-label' => '',
                                           'type' => 'message',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'message' => '<img src="/wp-content/themes/covenant/blocks/block-images/banner-cta.png"/>',
                                           'new_lines' => 'wpautop',
                                           'esc_html' => 0,
                                       ),
                                       array(
                                           'key' => 'field_63da89c1ed828',
                                           'label' => 'Anchor ID',
                                           'name' => 'anchor_id',
                                           'aria-label' => '',
                                           'type' => 'text',
                                           'instructions' => 'Will only work with lowercase letters(a-z),numbers(0-9), dash(-) and underscore(_). Must start with a letter.',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'default_value' => '',
                                           'maxlength' => '',
                                           'placeholder' => '',
                                           'prepend' => '',
                                           'append' => '',
                                       ),
                                       array(
                                           'key' => 'field_63ea6685adfe8',
                                           'label' => 'Add Border to Image',
                                           'name' => 'add_border_to_image',
                                           'aria-label' => '',
                                           'type' => 'true_false',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'message' => 'Add a border to the image',
                                           'default_value' => 0,
                                           'ui' => 0,
                                           'ui_on_text' => '',
                                           'ui_off_text' => '',
                                       ),
                                       array(
                                           'key' => 'field_63da97a3d7e3d',
                                           'label' => 'Background Color',
                                           'name' => 'background_color',
                                           'aria-label' => '',
                                           'type' => 'select',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'choices' => array(
                                               'secondary' => 'Blue',
                                               'lightgray' => 'Gray',
                                           ),
                                           'default_value' => 'secondary',
                                           'return_format' => 'value',
                                           'multiple' => 0,
                                           'allow_null' => 0,
                                           'ui' => 0,
                                           'ajax' => 0,
                                           'placeholder' => '',
                                           'allow_custom' => 0,
                                           'search_placeholder' => '',
                                       ),
                                       array(
                                           'key' => 'field_63d93a3b4bf84',
                                           'label' => 'Title',
                                           'name' => 'title',
                                           'aria-label' => '',
                                           'type' => 'text',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'default_value' => '',
                                           'maxlength' => '',
                                           'placeholder' => '',
                                           'prepend' => '',
                                           'append' => '',
                                       ),
                                       array(
                                           'key' => 'field_63d93a474bf85',
                                           'label' => 'Copy',
                                           'name' => 'copy',
                                           'aria-label' => '',
                                           'type' => 'wysiwyg',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'default_value' => '',
                                           'tabs' => 'all',
                                           'toolbar' => 'full',
                                           'media_upload' => 1,
                                           'delay' => 0,
                                       ),
                                       array(
                                           'key' => 'field_63d93a514bf86',
                                           'label' => 'Button',
                                           'name' => 'button',
                                           'aria-label' => '',
                                           'type' => 'link',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'return_format' => 'array',
                                       ),
                                   ),
                                   'location' => array(
                                       array(
                                           array(
                                               'param' => 'block',
                                               'operator' => '==',
                                               'value' => 'acf/banner-w--cta',
                                           ),
                                       ),
                                   ),
                                   'menu_order' => 0,
                                   'position' => 'normal',
                                   'style' => 'default',
                                   'label_placement' => 'top',
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