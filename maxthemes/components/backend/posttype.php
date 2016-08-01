<?php
namespace max_themes\components\backend;


class posttype
{
    public function __construct()
    {
        /*
         * Ki?m tra n?u ?ã cài ??t metabox thì g?i ??n hàm s? d?ng metabox
         */
            add_action( 'init', 'posttype_benefit_func', 0 );
    }

    public function posttype_benefit_func()
    {
        $labels = array(
            'name'                => 'S?n ph?m',
            'singular_name'       => 'Chuong',
            'menu_name'           => 'S?n ph?m',
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
            'slug'                => 'san-pham',
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
                'editor',
                'excerpt',
                'thumbnail',
            ),
            'taxonomies' => array( 'category'),//cho phép category nào hi?n th? ? post
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
        register_post_type( 'detail_benefit', $args );
    }
}