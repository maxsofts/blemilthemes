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
        $meta_boxes[] = array(
            'title' => __('Box đặc điểm nổi bật', 'features'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_highlights',
                    'name' => __('Tiêu đề', 'features'),
                    'type' => 'text',
                    'std' => "Đặc điểm nổi bật"
                ),
                array(
                    'id' => 'content_highlights',
                    'name' => __('Nội dung', 'features'),
                    'type' => 'wysiwyg',
                ),)

        );
        $meta_boxes[] = array(
            'title' => __('Box lợi ích sản phẩm', 'features'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_benefit',
                    'name' => __('Tiêu đề', 'features'),
                    'type' => 'text',
                ),
                array(
                    'id' => 'content_benefit',
                    'name' => __('Nội dung', 'features'),
                    'type' => 'wysiwyg',
                ),)

        );
        $meta_boxes[] = array(
            'title' => __('Box thông tin dinh dưỡng', 'features'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_information',
                    'name' => __('Tiêu đề', 'features'),
                    'type' => 'text',
                ),
                array(
                    'id' => 'content_information',
                    'name' => __('Nội dung', 'features'),
                    'type' => 'wysiwyg',
                ),)

        );
        $meta_boxes[] = array(
            'title' => __('Box quy tắc đóng gói', 'features'),
            'post_types' => 'tim-hieu',
            'fields' => array(
                array(
                    'id' => 'name_rule',
                    'name' => __('Tiêu đề', 'features'),
                    'type' => 'text',
                ),
                array(
                    'id' => 'content_rule',
                    'name' => __('Nội dung', 'features'),
                    'type' => 'wysiwyg',
                ),)

        ); //End thông tin trang tìm hiểu


        return $meta_boxes;
    }
}