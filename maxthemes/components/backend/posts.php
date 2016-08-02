<?php
namespace max_themes\components\backend;


class posts
{
    public function __construct()
    {
        /**
         * Post format
         */
        add_theme_support('post-formats', array('video'));
        /**
         * Địa điểm bán
         */
        add_action('init', array($this, 'showroom_post'));
        add_filter('pre_get_posts', array($this, 'get_showroomPost'));
        add_action('init', array($this, 'create_taxonomy_showroom'), 0);
        /**
         * Tìm hiểu Blemil
         */
        add_action('init', array($this, 'detail_post'), 0);
        add_filter('pre_get_posts', array($this, 'get_detailPost'));
    }


    /** điểm bán * */
    public function showroom_post()
    {
        $label = array(
            'name' => 'Địa điểm bán',
            'singular_name' => 'Địa điểm bán'
        );

        $args = array(
            'labels' => $label, //Gọi các label trong biến $label ở trên
            'description' => 'Địa điểm bán', //Mô tả của post type
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'author',
                'thumbnail',
                'comments',
            ), //Các tính năng được hỗ trợ trong post type
            'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, false thì giống như Page
            'public' => true, //Kích hoạt post type
            'show_ui' => true, //Hiển thị khung quản trị như Post/Page
            'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
            'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
            'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
            'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
            'menu_icon' => 'dashicons-location-alt', //Đường dẫn tới icon sẽ hiển thị
            'can_export' => true, //Có thể export nội dung bằng Tools -> Export
            'has_archive' => true, //Cho phép lưu trữ (month, date, year)
            'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
            'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
            'capability_type' => 'post' //
        );

        register_post_type('diem-ban', $args); //Tạo post type với slug tên là gao và các tham số trong biến $args ở trên
    }

    /**
     * filter
     */
    public function get_showroomPost($query)
    {
        //Danh cho tìm kiếm
        if (is_home() && $query->is_main_query()) {
            $query->set('diem-ban', array('post'));
        }
        return $query;
    }

    /**
     * Taxonomy danh mục
     */
    public function create_taxonomy_showroom()
    {

        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
            'name' => __('Tỉnh thành - Huyện'),
            'singular' => 'dia-diem-ban',
            'menu_name' => 'Tỉnh thành - Huyện'
        );

        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'dia-diem-ban',
                'with_front' => false,
                'hierarchical' => true
            ),
        );

        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('dia-diem-ban', array('diem-ban'), $args);
    }

    /**
     *  Tìm hiểu Blemil
     */
    public function detail_post()
    {
        $labels = array(
            'name' => 'Tìm hiểu Blemil',
            'singular_name' => 'Tìm hiểu Blemil',
//            'menu_name' => 'Blemil',
//            'name_admin_bar' => 'Post Type',
//            'parent_item_colon' => 'Parent Item:',
//            'all_items' => 'Tất cả',
//            'add_new_item' => 'Add New Item',
//            'add_new' => 'Thêm mới',
//            'new_item' => 'New Item',
//            'edit_item' => 'Edit Item',
//            'update_item' => 'Update Item',
//            'view_item' => 'View Item',
//            'search_items' => 'Search Item',
//            'not_found' => 'Not found',
//            'not_found_in_trash' => 'Not found in Trash',
        );

        $rewrite = array(
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        );
        $args = array(
            'label' => 'Tìm hiểu',
            'description' => 'Tìm hiểu Blemil',
            'labels' => $labels,
            'supports' => array(
                'title',
                'thumbnail',
            ),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-megaphone',
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'rewrite' => $rewrite,
            'capability_type' => 'page',
        );

        register_post_type('tim-hieu', $args);
    }

    /**
     * filter
     */
    public function get_detailPost($query)
    {
        //Danh cho tìm kiếm
        if (is_home() && $query->is_main_query()) {
            $query->set('tim-hieu', array('post'));
        }
        return $query;
    }


}