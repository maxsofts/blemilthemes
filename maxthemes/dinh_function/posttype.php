<?php
function posttype_benefit() {

    $labels = array(
        'name'                => 'benefit',
        'singular_name'       => 'blemil',
        'menu_name'           => 'Blemil',
        'name_admin_bar'      => 'Post Type',
        'parent_item_colon'   => 'Parent Item:',
        'all_items'           => 'T?t c?',
        'add_new_item'        => 'Add New Item',
        'add_new'             => 'Thêm m?i',
        'new_item'            => 'New Item',
        'edit_item'           => 'Edit Item',
        'update_item'         => 'Update Item',
        'view_item'           => 'View Item',
        'search_items'        => 'Search Item',
        'not_found'           => 'Not found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
    $rewrite = array(
        'slug'                => 'benefit-blemil',
        'with_front'          => true,
        'pages'               => true,
        'feeds'               => true,
    );
    $args = array(
        'label'               => 'Chuong',
        'description'         => 'Post Type Description',
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'thumbnail',
        ),
        'taxonomies' => array(),//cho phép category nào hi?n th? ? post
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => $rewrite,
        'capability_type'     => 'page',
    );
    register_post_type( 'detail', $args );

}
add_action( 'init', 'posttype_benefit', 0 );
add_theme_support( 'post-thumbnails' );