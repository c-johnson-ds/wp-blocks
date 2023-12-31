<?php
add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
                                   'key' => 'group_63da9883d95aa',
                                   'title' => 'Accordion',
                                   'fields' => array(
                                       array(
                                           'key' => 'field_63ebb2f9ac334',
                                           'label' => 'Accordion',
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
                                           'key' => 'field_63da9884604ff',
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
                                           'message' => '<img src="/wp-content/themes/covenant/blocks/block-images/accordion.png" />',
                                           'new_lines' => 'wpautop',
                                           'esc_html' => 0,
                                       ),
                                       array(
                                           'key' => 'field_63da98bc60500',
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
                                           'key' => 'field_63da98d660501',
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
                                           'key' => 'field_63da98de60502',
                                           'label' => 'Accordion',
                                           'name' => 'accordion',
                                           'aria-label' => '',
                                           'type' => 'repeater',
                                           'instructions' => '',
                                           'required' => 0,
                                           'conditional_logic' => 0,
                                           'wrapper' => array(
                                               'width' => '',
                                               'class' => '',
                                               'id' => '',
                                           ),
                                           'layout' => 'block',
                                           'pagination' => 1,
                                           'rows_per_page' => 6,
                                           'min' => 0,
                                           'max' => 0,
                                           'collapsed' => '',
                                           'button_label' => 'Add Row',
                                           'acfe_repeater_stylised_button' => 0,
                                           'sub_fields' => array(
                                               array(
                                                   'key' => 'field_63da998cdb68f',
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
                                                   'parent_repeater' => 'field_63da98de60502',
                                               ),
                                               array(
                                                   'key' => 'field_63da98f360503',
                                                   'label' => 'Tab Title',
                                                   'name' => 'accordion_title',
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
                                                   'parent_repeater' => 'field_63da98de60502',
                                               ),
                                               array(
                                                   'key' => 'field_63da990260504',
                                                   'label' => 'Content',
                                                   'name' => 'content',
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
                                                   'parent_repeater' => 'field_63da98de60502',
                                               ),
                                           ),
                                       ),
                                   ),
                                   'location' => array(
                                       array(
                                           array(
                                               'param' => 'block',
                                               'operator' => '==',
                                               'value' => 'acf/accordion',
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
                               ) );
} );