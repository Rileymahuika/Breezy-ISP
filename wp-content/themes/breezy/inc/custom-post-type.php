<?php
add_action('init', 'custom_plan_post_types');

function custom_plan_post_types() {

    $deals = array(
        'labels' => array('name' => 'Plans', 'singular_name' => 'Plan'),
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'));

    register_post_type('custom_plan', $deals); // custom_member used in taxonomies
}
?>

<?php
add_action('init', 'custom_value_post_types');

function custom_value_post_types() {

    $values = array(
        'labels' => array('name' => 'Values', 'singular_name' => 'value'),
        'public' => true,
        'menu_position' => 6,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'));

    register_post_type('custom_value', $values); // custom_member used in taxonomies
}
?>

<?php 

add_action('init', 'custom_address_post_types');

function custom_address_post_types() {

    $addresses = array(
    'labels' =>  array('name' => 'Addresses', 'singular_name' => 'Address'),
    'public' => true,
    'menu_position' => 6,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'));
    register_post_type('custom_address', $addresses); // custom_member used in taxonomies
}