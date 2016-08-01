<?php
/*
 Template name:Research
 */
get_header();
if(have_posts()){
    while(have_posts()){
        the_post();
        $id_product=$post->ID;
        ?>

<section class="research row">
    <div class="border-box border-box-before border-box-logo col s12 m8 offset-m2 l4 offset-l4 blemil-green clearfix">
        <div class="param">
            Tìm hiểu <i class="logo-blemil"></i>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
        <div class="list-product  center row">
            <div class="container">
            <!-- list sản phẩm-->
            <?php
             $arg=array(
                 'post_type'=>'tim-hieu',
                 'posts_per_page'=>'4',
                 'orderby'=>'name',
                 'orderby'=>'ASC'
             );
            $list_product=new wp_query($arg);
            if($list_product->have_posts()){
                $count=0;
                while($list_product->have_posts()){
                    $count++;
                    $list_product->the_post();
                    ?>
                    <div class="product col s12 l3 m6">
                        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail();?>
                        <div class="logo">
                            <i class="logo-blemil large"></i><span><?php echo $count;?></span>
                        </div>
                            <?php if($id_product==get_the_ID()){
                                ?>
                                <div class="center row solid">

                                    <div class="solid-width-arrow col s12 offset-m3 m6 offset-l2 l7">
                                    </div>
                                </div>
                        <?php
                            }?>
                        </a>

                    </div>
            <?php
                }
                wp_reset_postdata();
            }
            ?>
            </div>
            <img class="bg-product hide-on-med-and-down" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/trapezoid.png" alt="">
        </div><!--end list product-->
        <div class="clearfix"></div>
        <div class="content-product row container">
            <div class="col m4 s12">
                <!--begin list menu left-->
                <ul class="tab-content-product">
                    <?php
                     $content_product=array('highlights','benefit','information','rule');
                    $active=0;
                    foreach($content_product as $content){
                        $active++;
                        $title='name_'.$content;
                        ?>
                        <li class="blemil-green border-radius-5 waves-effect waves-light waves-block <?php if($active==1){echo "active";}?>">
                            <div class="white-text border-radius-5 border-li border-box-color">
                                <a id="#<?php echo $content;?>">
                                    <?php echo rwmb_meta($title);?>
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
                <?php $active=0;
                    foreach($content_product as $content){
                    $active++;
                    $title='name_'.$content;
                        $content_second='content_'.$content;
                ?>
                        <!-- begin contet right-->
                <div id="<?php echo $content;?>" class="tab-body-content <?php if($active==1){echo "active";}?>">
                    <div class="blemil-title-product border-radius-5 blemil-pink  white-text">
                        <img class="blemil-line-left" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/blemil-line.png" alt="">
                        <img class="blemil-line-right" src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/blemil-line.png" alt="">
                        <div class="border-box-color">
                            <h5 class="font-size-15"> <?php echo rwmb_meta($title);?></h5>
                        </div>
                    </div><!--end blemil title-->
                    <div class="row text-content-product">
                        <div class="col m8 s12 text-content-product-left">
                            <?php echo rwmb_meta($content_second);?>

                        </div>
                        <div class="col m4 s12 text-content-right center">
                            <?php the_post_thumbnail();?>
                        </div>
                    </div><!--text-content-product-->
                </div><!--end tab fee-->
                        <!--end content-rright-->
                    <?php }?>
            </div>

            </div>


        </div><!--end content-->
</section>
        <?php

    }
}
?>
<?php get_footer();?>
