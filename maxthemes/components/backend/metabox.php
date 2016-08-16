<?php
namespace max_themes\components\backend;


class metabox
{
    public function __construct()
    {
        /*
         * Kiểm tra nếu đã cài đặt metabox thì gọi đến hàm sử dụng metabox
         */
        if (!function_exists('rwmb_meta_boxes')) {
            add_filter('rwmb_meta_boxes', array($this, 'init_meta_box'));
        }
    }

    public function init_meta_box()
    {
        /**
         * Thông tin trang tìm hiểu
         */
        //tiếng việt
        $meta_boxes[] = array(
            'title' => __('Box đặc điểm nổi bật tiếng việt', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_highlights',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => "Đặc điểm nổi bật"
                ),
                array(
                    'id' => 'content_highlights',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        );
        //tiếng anh
        $meta_boxes[] = array(
            'title' => __('Box đặc điểm nổi bật tiếng anh', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_highlights_en',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => "Đặc điểm nổi bật"
                ),
                array(
                    'id' => 'content_highlights_en',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        );
        //tiếng việt
        $meta_boxes[] = array(
            'title' => __('Box lợi ích sản phẩm tiếng việt', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_benefit',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => "Lợi ích sản phẩm"
                ),
                array(
                    'id' => 'content_benefit',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        );
        //tiếng anh
        $meta_boxes[] = array(
            'title' => __('Box lợi ích sản phẩm tiếng anh', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_benefit_en',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => "lợi ích sản phẩm"
                ),
                array(
                    'id' => 'content_benefit_en',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        );
        //tiếng việt
        $meta_boxes[] = array(
            'title' => __('Box thông tin dinh dưỡng tiếng việt', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_information',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => 'Thông tin dinh dưỡng'
                ),
                array(
                    'id' => 'content_information',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        );
        //tiếng anh
        $meta_boxes[] = array(
            'title' => __('Box thông tin dinh dưỡng tiếng anh', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_information_en',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => 'Thông tin dinh dưỡng'
                ),
                array(
                    'id' => 'content_information_en',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        );
        //tiếng việt
        $meta_boxes[] = array(
            'title' => __('Box quy tắc đóng gói tiếng việt', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_rule',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => 'Quy tắc đóng gói'
                ),
                array(
                    'id' => 'content_rule',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        ); //End thông tin trang tìm hiểu
        $meta_boxes[] = array(
            'title' => __('Box quy tắc đóng gói tiếng anh', 'maxthemes'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_rule_en',
                    'name' => __('Tiêu đề', 'maxthemes'),
                    'type' => 'text',
                    'std' => 'Quy tắc đóng gói'
                ),
                array(
                    'id' => 'content_rule_en',
                    'name' => __('Nội dung', 'maxthemes'),
                    'type' => 'wysiwyg',
                ),)

        ); //End thông tin trang tìm hiểu

        /**
         * Video
         */
        $meta_boxes[] = array(
            // Meta box id, UNIQUE per meta box. Optional since 4.1.5
            'id' => 'videos',
            // Meta box title - Will appear at the drag and drop handle bar. Required.
            'title' => __( 'Thông tin video', 'maxthemes' ),
            // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
            'post_types' => array( 'post' ),
            // Where the meta box appear: normal (default), advanced, side. Optional.
            'context' => 'normal',
            // Order of meta box: high (default), low. Optional.
            'priority' => 'high',
            // Auto save: true, false (default). Optional.
            'autosave' => true,
            // List of meta fields
            'location' => 'normal',
            'display_condition' => 'post-format-video',
            'fields' => array(
                array(
                    // Field name - Will be used as label
                    'name' => __( 'Youtube Video ID', 'maxthemes' ),
                    // Field ID, i.e. the meta key
                    'id' => "video_id",
                    // Field description (optional)
                    'desc' => __( 'Là ID của video ví dụ : https://youtu.be/eb7UA_X8OVw => eb7UA_X8OVw là ID của videos', 'maxthemes' ),
                    'type' => 'text',
                    'placeholder' => __( 'Nhập ID của videos', 'maxthemes' ),
                    'before' => __( "<p style='color: red'>Chỉ hiển thị trang chủ khi -  Ghim bài ở trang chủ và Định dạng Video</p>" ),
                    'after' => __( "<p style='color: red'>Hình ảnh hiển thị bên ngoài trang trước khi chạy Videos là hình ảnh chức năng của bài viết nằm ở phía tay phải </p> " ),
                ),
            ),
        );

        return $meta_boxes;
    }
}