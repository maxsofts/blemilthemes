<?php
namespace max_themes\components\backend;


class ajax
{
    public function __construct()
    {
        add_action('wp_head', array($this, 'pluginname_ajaxurl'));

        //Get Province
        add_action('wp_ajax_get_province', array($this, 'get_province'));
        add_action('wp_ajax_nopriv_get_province', array($this, 'get_province'));

        //Get locations
        add_action('wp_ajax_get_html_locations', array($this, 'get_html_locations'));
        add_action('wp_ajax_nopriv_get_html_locations', array($this, 'get_html_locations'));
    }

    /**
     * Thêm biến Ajax URL dành cho hoạt động Ajax
     */
    public function pluginname_ajaxurl()
    {
        ?>
        <script type="text/javascript">
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
        </script>
        <?php
    }

    /**
     * Lấy danh sách huyện
     */
    public function get_province()
    {
        if (isset($_POST['data'])) {
            $data = $_POST['data'];
        };
        $queryProvince = array(
            'taxonomy' => 'dia-diem-ban',
            'parent' => $data,
        );


        $provinces = get_categories($queryProvince);

        $array[0] = 'Chọn huyện';
        foreach ($provinces as $province) {

            $array[$province->term_id] = $province->name;
        }

        echo wp_json_encode($array);

        exit();
    }

    /**
     * Hiển thị địa điểm
     */
    public function get_html_locations()
    {
        if (isset($_POST['data'])) {
            $data = $_POST['data'];
        };
        $args = array(
            'post_type' => 'diem-ban',
            'taxonomy' => 'dia-diem-ban',
            'showposts' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'dia-diem-ban',
                    'field' => 'term_id',
                    'terms' => $data
                )
            ),
            'order' => 'ASC',
        );

        $list = get_posts($args);

        foreach ($list as $post) {
            ?>
            <div class="col s6">
                <article id="address_<?php echo $post->ID; ?>" class="location-item">
                    <?php /*if (has_post_thumbnail($post->ID)): ?>
                        <?php echo get_the_post_thumbnail($post->ID, 'rectangle', array("class" => 'responsive-img ')); ?>
                    <?php else: ?>
                        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/cuahang1.jpg"
                             alt=""
                             class="responsive-img"/>
                    <?php endif; */?>

                    <div class="content">
                        <h6 class="title blemil-pink-text"><?php echo $post->post_title; ?></h6>

                        <div class="address">
                            <?php echo $content = apply_filters("the_content", $post->post_content); ?>
                        </div>
                    </div>
                </article>
            </div>
            <?php
        }
        die();
    }
}