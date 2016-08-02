<!--location-->
<section class="location">
    <div class="row">
        <div class="border-box blemil-pink col s12 m8 offset-m2 l4 offset-l4">
            <div class="param">
                Mua <i class="logo-blemil"></i> ở đâu
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container shadow-box ">
            <div class="row">
                <div class="col s12 m3">
                    <?php
                    $args = array(
                        'taxonomy' => 'dia-diem-ban',
                        'parent' => 0,
                        'hide_empty' => 0
                    );
                    $districts = get_categories($args);
                    ?>
                    <div class="input-field col s12">
                        <select id="district" class="blemil-pink">
                            <option value="0">Chọn Tỉnh</option>
                            <?php if ($districts):foreach ($districts as $district): ?>
                                <option
                                    value="<?php echo $district->term_id; ?>"><?php echo $district->name; ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select class="blemil-pink" id="province">
                            <option value="0">Chọn Huyện</option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m9 row location-list" id="locations_list">
                    <?php
                    $args = array(
                        'post_type' => 'diem-ban',
                        'order' => 'ASC',
                    );

                    $list = get_posts($args);

                    foreach ($list as $post) {
                        ?>
                        <div class="col s6">
                            <article id="address_<?php echo $post->ID; ?>" class="location-item">
                                <?php if (has_post_thumbnail($post->ID)): ?>
                                    <?php echo get_the_post_thumbnail($post->ID, 'rectangle', array("class" => 'responsive-img ')); ?>
                                <?php else: ?>
                                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/cuahang1.jpg"
                                         alt=""
                                         class="responsive-img"/>
                                <?php endif; ?>

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
                    ?>
                </div>
            </div>
        </div>
        <div class="chicken center hide-on-med-and-down">
            <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/chicken-center.png" alt="" class="animated move-rotated infinite infinite-delay-20"/>
        </div>
</section><!--End location-->