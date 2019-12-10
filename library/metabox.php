<?php


// init cmb2
require_once( 'cmb2/init.php' );


$colors = array(
    'purple' => 'Purple',
    'blue' => 'Blue',
    'navy' => 'Navy',
    'orange' => 'Orange',
    'lime' => 'Lime',
    'green' => 'Green'
);



// add metabox(es)
function page_metaboxes( $meta_boxes ) {

    global $colors;

    // showcase metabox
    $showcase_metabox = new_cmb2_box( array(
        'id' => 'showcase_metabox',
        'title' => 'Showcase',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $showcase_metabox_group = $showcase_metabox->add_field( array(
        'id' => CMB_PREFIX . 'showcase',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Slide', 'cmb2'),
            'remove_button' => __('Remove Slide', 'cmb2'),
            'group_title'   => __( 'Slide {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Image/Video',
        'desc' => 'Upload a slide image. Usually 1220x420 is a good general size guideline, but the showcase will adapt to any height.',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 100 )
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Alt text',
        'desc' => 'Specify alt text for this slide.',
        'id'   => 'alt-text',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Link',
        'desc' => 'Specify a URL to which this ad should link.',
        'id'   => 'link',
        'type' => 'text',
    ) );
    


    // showcase metabox
    $title_metabox = new_cmb2_box( array(
        'id' => 'title_metabox',
        'title' => 'Large Title',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $title_metabox->add_field( array(
        'name' => 'Title',
        'id'   => CMB_PREFIX . 'large-title',
        'type' => 'text',
    ) );

    $title_metabox->add_field( array(
        'name' => 'Subtitle',
        'id'   => CMB_PREFIX . 'large-subtitle',
        'type' => 'text',
    ) );



    // thumb showcase metabox
    $icon_showcase_metabox = new_cmb2_box( array(
        'id' => 'icon_showcase_metabox',
        'title' => 'Icon Showcase',
        'object_types' => array( 'page' ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $icon_showcase_metabox_group = $icon_showcase_metabox->add_field( array(
        'id' => CMB_PREFIX . 'icon_showcase',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Icon', 'cmb2'),
            'remove_button' => __('Remove Icon', 'cmb2'),
            'group_title'   => __( 'Icon {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $icon_showcase_metabox->add_group_field( $icon_showcase_metabox_group, array(
        'name' => 'Image',
        'desc' => 'Upload a 100x100 pixel icon image. Ideally a transparent PNG.',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 100, 100 )
    ) );

    $icon_showcase_metabox->add_group_field( $icon_showcase_metabox_group, array(
        'name' => 'Super Title',
        'desc' => 'The super title shows up above the title text.',
        'id'   => 'alt-text',
        'type' => 'text',
        'sanitization_cb' => false
    ) );

    $icon_showcase_metabox->add_group_field( $icon_showcase_metabox_group, array(
        'name' => 'Title',
        'desc' => 'Set a title to display below this icon.',
        'id'   => 'title',
        'type' => 'text',
        'sanitization_cb' => false
    ) );

    $icon_showcase_metabox->add_group_field( $icon_showcase_metabox_group, array(
        'name' => 'Link',
        'desc' => 'Specify a URL to which this ad should link.',
        'id'   => 'link',
        'type' => 'text',
    ) );

    $icon_showcase_metabox->add_group_field( $icon_showcase_metabox_group, array(
        'name' => 'Color',
        'desc' => 'Select a color for the border of this icon.',
        'id'   => 'color',
        'type' => 'select',
        'default' => 'blue',
        'options' => $colors
    ) );



    // showcase metabox
    $promo_metabox = new_cmb2_box( array(
        'id' => 'promo_metabox',
        'title' => 'Promotion',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $promo_metabox->add_field( array(
        'name' => 'Promotion Image',
        'desc' => 'Upload a promotion image.',
        'id'   => CMB_PREFIX . 'promo-image',
        'preview_size' => array( 300, 100 ),
        'type' => 'file',
    ) );

    $promo_metabox->add_field( array(
        'name' => 'Alt Text',
        'id'   => CMB_PREFIX . 'promo-alt',
        'type' => 'text',
    ) );

    $promo_metabox->add_field( array(
        'name' => 'Link URL',
        'id'   => CMB_PREFIX . 'promo-link',
        'type' => 'text',
    ) );



    // thumb showcase metabox
    $accordion_metabox = new_cmb2_box( array(
        'id' => 'accordion_metabox',
        'title' => 'Accordion',
        'object_types' => array( 'page' ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $accordion_metabox_group = $accordion_metabox->add_field( array(
        'id' => CMB_PREFIX . 'accordion',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Accordion', 'cmb2'),
            'remove_button' => __('Remove Accordion', 'cmb2'),
            'group_title'   => __( 'Accordion {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Initial State',
        'desc' => 'Choose an initial state for this accordion',
        'id'   => 'state',
        'type' => 'select',
        'default' => 'closed',
        'options' => array (
            'open' => 'Open',
            'closed' => 'Closed'
        )
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Title',
        'desc' => 'Set a title to display below this icon.',
        'id'   => 'title',
        'type' => 'text',
        'sanitization_cb' => false
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Icon',
        'desc' => 'Upload a 100x100 pixel icon image. Ideally a transparent PNG.',
        'id'   => 'icon',
        'type' => 'file',
        'preview_size' => array( 100, 100 )
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Color',
        'desc' => 'Select a color for the border of this icon.',
        'id'   => 'color',
        'type' => 'select',
        'default' => 'blue',
        'options' => $colors
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Content',
        'desc' => 'Include the content for this accordion section.',
        'id'   => 'content',
        'type' => 'wysiwyg',
        'sanitization_cb' => false
    ) );



    // emergency metabox
    $emergency_metabox = new_cmb2_box( array(
        'id' => 'emergency_metabox',
        'title' => 'Emergency Bar',
        'desc' => "An emergency bar on the top to indicate local news or bring people into a specific area of the site when there's something you want them to read.",
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $emergency_metabox->add_field( array(
        'name' => 'Emergency Text',
        'id'   => CMB_PREFIX . 'emergency-text',
        'type' => 'text',
    ) );

    $emergency_metabox->add_field( array(
        'name' => 'Link',
        'desc' => 'Where should the emergency bar link to.',
        'id'   => CMB_PREFIX . 'emergency-link',
        'type' => 'text',
    ) );

    $emergency_metabox->add_field( array(
        'name' => 'Color',
        'desc' => 'What color should the emergency bar be?',
        'id'   => CMB_PREFIX . 'emergency-color',
        'type' => 'select',
        'options' => $colors
    ) );
}
add_filter( 'cmb2_init', 'page_metaboxes' );



// get CMB value
function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}


// get CMB value
function has_cmb_value( $field ) {
    $cval = get_cmb_value( $field );
    return ( !empty( $cval ) ? true : false );
}


// get CMB value
function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}


// get CMB value
function show_cmb_wysiwyg_value( $field ) {
    print apply_filters( 'the_content', get_cmb_value( $field ) );
}


