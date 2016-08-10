<?php if(is_single()){?>
<!--begin widget tin liên quan -->
<div class="widgets related ">
    <div class="title_wigets">
    <h2 class="green white-text font-size-14">tin liên quan</h2>
    </div>
    <div class="content-widget">
        <ul>
            <?php $categories = get_the_category($post->ID);
            $category_ids = array();
            foreach($categories as $individual_category){
            $category_ids[] = $individual_category->term_id;
            }
            $args=array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'showposts'=>4, // Sô lượng bài viết muốn hiển thị ra
                'ignore_sticky_posts'=>1,
                'orderby'=>rand);
            $post_related = new wp_query($args);

            if($post_related->have_posts()){
                while($post_related->have_posts()){
                    $post_related->the_post();?>
                    <li class="row">
                        <div class="col s12 m3">
                            <?php echo get_the_post_thumbnail($post->ID, 'thumbnail-sidebar', array("class" => 'responsive-img ')); ?>
                        </div>
                        <p class="col s12 m9 font-size-13 text-left-sidebar"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                    </li>

                    <?php
                }
                wp_reset_postdata();
            }
            ?>
        </ul>
    </div><!-- end content-widget-->
</div><!--end relate-->
<?php }?>
<!--end wigget tin liên quan -->
<!--begin widget đọc nhiều nhất -->
<div class="widgets read-better">
    <div class="title_wigets">
        <h2 class="green white-text font-size-14">đọc nhiều nhất</h2>
    </div>
    <div class="row tabs-sidebar">
            <ul class="tab-content-product font-size-13">
                <li class="col s4  m4 active"><a id="#day">Ngày</a></li>
                <li class="col s4 m4"><a id="#week">Tuần</a></li>
                <li class="col  s4 m4"><a id="#month">Tháng</a></li>
            </ul>
    </div>
    <div class="content-widget tab-content">
        <div class="tab-body-content active" id="day">
            <?php echo do_shortcode('[viewpost number="4" width_img="47" height_img="47" day="1"]');?>
        </div><!--end day-->
        <!--begin week-->
        <div class="tab-body-content" id="week">
                <?php echo do_shortcode('[viewpost number="4" width_img="47" height_img="47" day="7"]');?>
        </div><!--end week-->
        <div class="tab-body-content" id="month">
            <?php echo do_shortcode('[viewpost number="4" width_img="47" height_img="47" day="30"]');?>
        </div><!--end week-->
    </div>
</div>