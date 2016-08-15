<?php global $maxthemes; ?>
<?php $currentLang = qtranxf_getLanguage();?>
<!-- Gift-->
<section class="gift row shadow-box">
    <div class="border-box blemil-primary col s12 m8 offset-m2 l4 offset-l4">
        <div class="param">
            <?php echo $currentLang == 'en' ? "Baby gifts": 'Quà tặng bé yêu'; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <?php $post = get_post($maxthemes['home-gift-page']); ?>
        <?php if ($post): ?>
            <!-- For desktop -->
            <div class="bg-gift hide-on-med-and-down">
                <div class="content">
                    <?php if (has_post_thumbnail($post->ID)): ?>
                        <?php echo get_the_post_thumbnail($post->ID, 'rectangle-large', array("class" => 'responsive-img ')); ?>
                    <?php else: ?>
                        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/gift-default.jpg" alt=""
                             class="responsive-img"/>
                    <?php endif; ?>
                    <div class="param">
                        <?php echo $post->post_title; ?>
                    </div>
                    <div class="chicken">
                        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/chicken-after.png" alt=""
                             class="right"/>
                    </div>
                </div>
                <div class="readmore center">
                    <a class="btn-readmore blemil-primary" href="<?php echo $post->guid; ?>">
                        <?php echo $currentLang == 'en' ? "See details": 'Xem chi tiết'; ?>
                    </a>
                </div>
            </div><!-- End For desktop -->
                  <!-- For mobile-->
            <div class="bg-gift-mobile hide-on-large-only">
                <div class="card">
                    <div class="card-image">
                        <?php if (has_post_thumbnail($post->ID)): ?>
                            <?php echo get_the_post_thumbnail($post->ID, 'rectangle-large', array("class" => 'responsive-img ')); ?>
                        <?php else: ?>
                            <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/gift-default.jpg" alt=""
                                 class="responsive-img"/>
                        <?php endif; ?>
                    </div>
                    <div class="card-content">
                        <p>
                            <?php echo $post->post_title; ?>
                        </p>
                    </div>
                    <div class="card-action">
                        <div class="readmore center">
                            <a class="btn-readmore blemil-primary-text" href="<?php echo $post->guid; ?>">
                                <?php echo $currentLang == 'en' ? "See details": 'Xem chi tiết'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--End For mobile-->

        <?php else: ?>
            <article>
                <h1><?php echo $currentLang == 'en' ? "No display content": 'Chưa có nội dung hiện thị'; ?></h1>
            </article>
        <?php endif; ?>
    </div>
</section><!-- End gift-->