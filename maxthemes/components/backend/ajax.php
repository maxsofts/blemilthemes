<?php
namespace max_themes\components\backend;


class ajax
{
    public function __construct()
    {
        add_action('wp_head', array($this, 'pluginname_ajaxurl'));

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
}