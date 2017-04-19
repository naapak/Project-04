<?php

/**
* Register a  post type.
*
*
*/
function get_post_args($category) {

    $labels = array(
        'name'               => _x( $category, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( $category, 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( $category, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( $category, ' add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New ', $category, 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New '. $category, 'your-plugin-textdomain' ),
        'new_item'           => __( 'New ' . $category, 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit ' . $category, 'your-plugin-textdomain' ),
        'view_item'          => __( 'View ' . $category, 'your-plugin-textdomain' ),
        'all_items'          => __( 'All '.$category, 'your-plugin-textdomain' ),
        'search_items'       => __( "Search $category", 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( "Parent $category".":", 'your-plugin-textdomain' ),
        'not_found'          => __( 'No '.$category.' found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No '.$category.' found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
               'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => $category ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
    );

    return $args;
}


function create_post_types(){

    $post_types = array("Products", "Adventures");

    foreach($post_types as $post_type) {
        $post_args = get_post_args($post_type);
        register_post_type($post_type, $post_args);

    }

};

add_action( 'init', 'create_post_types');


// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_tax', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_taxonomies($key,$value) {
    // Add new taxonomy, make it hierarchical (like categories)
  

    // // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( $key, 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( $key, 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'Search'.$key, 'textdomain' ),
        'popular_items'              => __( 'Popular'.$key, 'textdomain' ),
        'all_items'                  => __( 'All'.$key, 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit'.$key, 'textdomain' ),
        'update_item'                => __( 'Update'.$key, 'textdomain' ),
        'add_new_item'               => __( 'Add New'.$key, 'textdomain' ),
        'new_item_name'              => __( 'New'.$key.' Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate'.$key.' with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove'.$key, 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used'.$key, 'textdomain' ),
        'not_found'                  => __( 'No'.$key.'found.', 'textdomain' ),
        'menu_name'                  => __( $key, 'textdomain' ),
    );

    $args = array(
        'hierarchical'          => true,
        'public'                => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => $key ),
    );

    register_taxonomy( $key, $value, $args );
}



function create_tax() {

    $tax_array  = array("products" => array("productType",),
                        "adventures" => array("season","fly" ));
    foreach ($tax_array as $tax_key => $tax_value) { 
        // echo ($tax_value.$tax_key);
        foreach ($tax_value as $tax) {
            // echo ($tax_key.$tax);
            create_taxonomies($tax,$tax_key);
        }

        
        
    }

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Contact Us Sidebar', 'theme-slug' ),
        'id' => 'contact-us',
        'description' => __( 'This is the contact info' ),
        'before_widget' => '<p id="%1$s" class="widget %2$s">',
    'after_widget'  => '</p>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
    ) );
}






}


?>