<!--story -->
<?php $currentLang = qtranxf_getLanguage();?>
<?php global $maxthemes; ?>
<section class="story row">
    <div class="border-box border-box-before border-box-logo col s12 m8 offset-m2 l4 offset-l4 blemil-pink">
        <div class="param">

            <?php echo $currentLang == 'en' ? "History": 'Câu chuyện'; ?><i class="logo-blemil"></i>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row content shadow-box container box-width-chicken">
        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/chicken_03.png" alt=""
             class="chicken-left hide-on-med-and-down animated swing-bottom infinite infinite-delay-20"/>
        <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/chicken_02.png" alt=""
             class="chicken-right hide-on-med-and-down animated swing-bottom infinite infinite-delay-30"/>

        <div class="center box-content">
            <?php $story_page = get_page($maxthemes['home-story-page']); ?>
            <?php if ($story_page): ?>
                <div class="image">
                    <?php if (has_post_thumbnail($story_page->ID)): ?>
                        <?php echo get_the_post_thumbnail($story_page->ID, 'square-small', array("class" => 'circle responsive-img ')); ?>
                    <?php endif; ?>
                </div>
                <div class="param lato-light-text pink-text">
                    <?php max_text_charlength($story_page->post_content, $maxthemes['home-story-maxlength']); ?>
                </div>
                <div class="readmore">
                    <a class="btn-readmore blemil-green-text" href="<?php echo $story_page->guid; ?>">
                        <?php echo $currentLang == 'en' ? "See more": 'Xem thêm'; ?>
                    </a>
                </div>
            <?php else: ?>
                <article>
                    <h1><?php echo $currentLang == 'en' ? "No content display": 'Chưa có nội dung hiển thị'; ?></h1>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section><!-- End story -->
