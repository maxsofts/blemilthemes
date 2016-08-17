<?php
get_header();
$currentLang = qtranxf_getLanguage();
 global $maxthemes;
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $id_product = $post->ID;
        ?>
        <section class="research row">
            <div
                class="border-box border-box-before border-box-logo col s12 m8 offset-m2 l4 offset-l4 blemil-green clearfix">
                <div class="param">
                    <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?> <i class="logo-blemil"></i>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="content">
                <div class="list-product  center row">
                    <div class="container three-product">
                        <!-- list sản phẩm-->
                        <?php
                        $arg = array(
                            'post_type' => 'tim-hieu',
                            'posts_per_page' => '3',
                            'orderby' => 'name',
                            'orderby' => 'ASC'
                        );
                        $list_product = new wp_query($arg);
                        if ($list_product->have_posts()) {
                            $count = 0;
                            while ($list_product->have_posts()) {
                                $count++;
                                $list_product->the_post();

                                ?>
                   <div class="product col s12 l4 m6  <?php if ($id_product == get_the_ID()) {echo 'active';}?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php echo get_the_post_thumbnail($post->ID, 'thumbnail-product', array("class" => 'responsive-img ')); ?>
                                        <?php else: ?>
                                            <img
                                                src="<?php echo MAXTHEMES_URI_ASSET ?>blemil/images/main-home/product-1.png"
                                                alt=""/>
                                        <?php endif; ?>
                                        <div class="logo">
                                            <i class="logo-blemil large"></i><span> <?php echo $count; ?></span>
                                        </div>
                                        <?php if ($id_product == get_the_ID()) {
                                            ?>
                                            <div class="center row solid">

                                                <div class="solid-width-arrow col s12 offset-m3 m6 offset-l2 l7">
                                                </div>
                                            </div>
                                            <?php
                                        } ?>
                                    </a>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                    <img class="bg-product hide-on-med-and-down"
                         src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/bg_product.png" alt="">
                </div><!--end list product-->
                <div class="clearfix"></div>
                <div class="content-product row container shadow-box hide" id="content-show">
                    <div class="col m4 s12">
                        <!--begin list menu left-->
                        <ul class="tab-content-product">
                            <?php
                            $content_product = array('highlights', 'benefit', 'information', 'rule');
                            $active = 0;

                            foreach ($content_product as $content) {
                                $active++;
                                if($currentLang == 'en'){
                                    $title_en='name_'.$content.'_en';
                                }else{
                                    $title = 'name_'.$content;
                                }

                                ?>
                                <li class="blemil-green border-radius-5 waves-effect waves-light waves-block <?php if ($active == 1) {
                                    echo "active";
                                } ?>">
                                    <div class="white-text border-radius-5 border-li border-box-color">
                                        <a id="#<?php echo $content; ?>">
                                            <?php  if($currentLang == 'en'){
                                                echo rwmb_meta($title_en);
                                            }
                                            else{
                                                echo rwmb_meta($title);
                                            }
                                            ?>
                                            <i class="fa fa-play-circle" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <!--end menu left--->
                    </div>
                    <div class="col m8 s12 tab-content">
                        <?php $active = 0;
                        foreach ($content_product as $content_right) {
                            $active++;

                            ?>
                            <!-- begin contet right-->
                            <div id="<?php echo $content_right; ?>" class="tab-body-content <?php if ($active == 1) {
                                echo "active";
                            } ?>">
                                <div class="blemil-title-product border-radius-5 blemil-pink  white-text">
                                    <img class="blemil-line-left"
                                         src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/blemil-line.png"
                                         alt="">
                                    <img class="blemil-line-right"
                                         src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/blemil-line.png"
                                         alt="">

                                    <div class="border-box-color">
                                        <h5 class="font-size-15">
                                            <?php  if($currentLang == 'en'){
                                                $title_right_en= 'name_' . $content_right.'_en';
                                                echo rwmb_meta($title_right_en);
                                            }
                                            else{
                                                $title= 'name_' . $content_right;
                                                echo rwmb_meta($title);
                                            }
                                            ?></h5>
                                    </div>
                                </div><!--end blemil title-->
                                <div class="row text-content-product">
                                    <div class="col m8 s12 text-content-product-left">
                                        <?php  if($currentLang == 'en'){
                                            $content_second_en= 'content_'.$content_right.'_en';
                                            echo rwmb_meta($content_second_en);
                                        }
                                        else{
                                            $content_second = 'content_'.$content_right;
                                            echo rwmb_meta($content_second);

                                        }
                                        ?>

                                    </div>
                                    <div class="col m4 s12 text-content-right center">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div><!--text-content-product-->
                            </div><!--end tab fee-->
                            <!--end content-rright-->
                        <?php } ?>
                    </div>
                </div>


            </div><!--end content-->
        </section>
        <?php

    }
}
?>
<!--modal popup-->

<div class="modal" id="checklink">
    <div class="modal-header blemil-green padding-20">
        <h4 class="center-align white-text">
            <?php
            if($currentLang=='en'){
                echo $maxthemes['basic-popup-title-en'] ? $maxthemes['basic-popup-title-en'] : "";
            }
            else{
                echo $maxthemes['basic-popup-title'] ? $maxthemes['basic-popup-title'] : "";
            }
            ?>
            <h4>
    </div>
    <div class="modal-content">
        <?php
        if($currentLang=='en'){
            echo $maxthemes['basic-social-content-en'] ? $maxthemes['basic-social-content-en'] : "";
        }
        else{
            echo $maxthemes['basic-social-content'] ? $maxthemes['basic-social-content'] : "";
        }
        ?>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="$('#content-show').removeClass('hide')"
           class="modal-action modal-close waves-effect waves-green btn-flat teal white-text">
            <?php
            if($currentLang=='en'){
                echo "Yes, I’m medical staff";
            }else{
                echo "Tôi là nhân viên y tế";
            }
            ?>

        </a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
            <?php
            if($currentLang=='en'){
                echo "No, thanks";
            }else{
                echo "Không, Cảm ơn";
            }
            ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>
