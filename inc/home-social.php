<?php
global $maxthemes;

$args = array(
    'posts_per_page' => -1,
    'post__in' => get_option('sticky_posts'),
    'ignore_sticky_posts' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-video'),
        )
    )
);
$query = new WP_Query($args);
?>
<section class="social">
    <div class="row">
        <div class="border-box blemil-primary col s12 m8 offset-m2 l4 offset-l4">
            <div class="param">
                Cộng đồng mẹ thông thái
            </div>
        </div>
    </div>
    <div class="container shadow-box">
        <div class="row">
            <div class="col s12 m8">
                <div class="">
                    <?php
                    if ($query->have_posts()):
                    $i = 0;
                    ?>
                    <?php while ($query->have_posts()):$query->the_post(); ?>
                        <div id="tab_video_<?php echo $i; ?>">
                            <div class="video">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('rectangle-large', array('class' => 'img-responsive')); ?>
                                <?php else: ?>
                                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/video.png"
                                         alt=""
                                         class="responsive-img"/>
                                <?php endif; ?>
                                <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo rwmb_meta('video_id', get_the_ID()); ?>?showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>-->
                            </div>
                        </div>
                        <?php $i++;
                    endwhile; ?>
                </div>

                <div>
                    <ul class="tabs tabs-image">
                        <?php $i = 0;
                        while ($query->have_posts()):$query->the_post(); ?>
                            <li class="tab">
                                <a class="active" href="#tab_video_<?php echo $i; ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('thumbnail-video', array('class' => 'img-responsive')); ?>
                                    <?php else: ?>
                                        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/active.png"
                                             alt=""/>
                                    <?php endif; ?>

                                </a>
                            </li>
                            <?php $i++;
                        endwhile; ?>
                    </ul>
                </div>
                <?php else: ?>
                    <h1>Xin lỗi chúng tôi chưa có Video để hiển thị</h1>
                <?php endif; ?>
            </div>
            <div class="col s12 m4">
                <div class="fb-page hidden-xs"
                     data-href="<?php echo $maxthemes['basic-social-facebook'] ? $maxthemes['basic-social-facebook'] : "https://www.facebook.com/suablemilplus/"; ?>"
                     data-hide-cover="false"
                     data-show-facepile="true"
                     data-show-posts="false"></div>

                <div class="social">
                    <h6 class="title">Theo Dõi Blemil Plus tại</h6>
                    <ul>
                        <li>
                            <a href="<?php echo $maxthemes['basic-social-facebook'] ? $maxthemes['basic-social-facebook'] : ""; ?>">
                                <i class="fa fa-facebook-official blemil-primary-text fa-3x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $maxthemes['basic-social-youtube'] ? $maxthemes['basic-social-youtube'] : ""; ?>">
                                <i class="fa fa-youtube-square blemil-primary-text fa-3x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $maxthemes['basic-social-google'] ? $maxthemes['basic-social-google'] : ""; ?>">
                                <i class="fa fa-google-plus-square blemil-primary-text fa-3x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>