<!-- Phân trang -->
<div class="center">
    <?php
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    $pages = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array',
            'prev_next' => true,
            'prev_text' => "<i class=\"material-icons\">chevron_left</i>",
            'next_text' => "<i class=\"material-icons\">chevron_right</i>",
            'end_size' => "1"
        )
    );

    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $page) {
            $html = "<li class=\"waves-effect";
            if (strpos($page, 'current') !== false):
                $html .= " active\">";
            else:
                $html .= '">';
            endif;
            $html .= $page;
            $html .= "</li>";

            echo $html;
        }
        echo '</ul>';
    }
    ?>
</div><!--end phân trang-->