<?php
namespace max_themes\components\backend;

/**
 * Class support
 * @package max_themes\components\backend
 */
class support
{
    public function __construct()
    {
        /**
         * Thêm ảnh đại diện cho bài viết
         */
        add_theme_support( 'post-thumbnails' );
        $this->add_thumbnail();
        $this->add_widget();
    }

    /**
     * Cắt ảnh image
     */
    public function add_thumbnail(){

        set_post_thumbnail_size( 1366, 768, array( 'center', 'center' ) );

        add_image_size( 'rectangle', 540, 340, array( 'center', 'center' ) );

        add_image_size( 'square', 500, 500, array( 'center', 'center' ) );

        add_image_size( 'home-rectangle', 650, 375, array( 'center', 'center' ) );

        add_image_size( 'rectangle-large', 750, 500, array( 'center', 'center' ) );

        add_image_size( 'thumbnail-video', 170, 110, array( 'center', 'center' ) );

        add_image_size( 'video', 750, 300, array( 'center', 'center' ) );
        add_image_size( 'thumbnail-sidebar', 47, 47, array( 'center', 'center' ) );
    }

    /**
     * Đăng ký side_bar nếu
     */
    public function add_widget(){
        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => 'Đăng ký nhận thông tin',
                'id' => 'email_sidebar',
                'description' => 'These are widgets for the sidebar.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>'
            ));
        }
    }
}