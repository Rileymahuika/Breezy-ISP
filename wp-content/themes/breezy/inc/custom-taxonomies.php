<?php

function custom_register_taxonomy_plan_tier() {
     $deals = array(
         'name'              => _x( 'Plans', 'taxonomy general name' ),
         'singular_name'     => _x( 'Plans', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Plans' ),
         'all_items'         => __( 'All Plans' ),
         'parent_item'       => __( 'Parent Plan' ),
         'parent_item_colon' => __( 'Parent Plan' ),
         'edit_item'         => __( 'Edit Plan' ),
         'update_item'       => __( 'Update Plan' ),
         'add_new_item'      => __( 'Add New Plan' ),
         'new_item_name'     => __( 'New Plan Name' ),
         'menu_name'         => __( 'Plan' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $deals,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'plan_tier' ],
     );
     register_taxonomy( 'plan_tier', [ 'custom_plan' ], $args );
}
add_action( 'init', 'custom_register_taxonomy_plan_tier' ); //Run the function

?>

<?php

function custom_register_taxonomy_values_tier() {
     $values = array(
         'name'              => _x( 'Values', 'taxonomy general name' ),
         'singular_name'     => _x( 'Values', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Values' ),
         'all_items'         => __( 'All Values' ),
         'parent_item'       => __( 'Parent Value' ),
         'parent_item_colon' => __( 'Parent Value' ),
         'edit_item'         => __( 'Edit Value' ),
         'update_item'       => __( 'Update Value' ),
         'add_new_item'      => __( 'Add New Value' ),
         'new_item_name'     => __( 'New Value Name' ),
         'menu_name'         => __( 'Value' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $values,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'plan_tier' ],
     );
     register_taxonomy( 'plan_tier', [ 'custom_plan' ], $args );
}
add_action( 'init', 'custom_register_taxonomy_plan_tier' ); //Run the function

?>

<?php

function custom_register_taxonomy_address_tier() {
     $addresses = array(
         'name'              => _x( 'Addresses', 'taxonomy general name' ),
         'singular_name'     => _x( 'Addresses', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Addresses' ),
         'all_items'         => __( 'All Addresses' ),
         'parent_item'       => __( 'Parent Plan' ),
         'parent_item_colon' => __( 'Parent Plan' ),
         'edit_item'         => __( 'Edit Plan' ),
         'update_item'       => __( 'Update Plan' ),
         'add_new_item'      => __( 'Add New Plan' ),
         'new_item_name'     => __( 'New Plan Name' ),
         'menu_name'         => __( 'Address' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $addresses,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'addresses_tier' ],
     );
     register_taxonomy( 'addresses_tier', [ 'custom_address' ], $args );
}
add_action( 'init', 'custom_register_taxonomy_address_tier' ); //Run the function

?>