<?php
/**
 * Template Name: Câu truyện Blemil
 */
get_header(); ?>
<?php $currentLang = qtranxf_getLanguage(); ?>
    <main class="container shadow-box">
        <?php if (have_posts):the_post(); ?>
        <div class="row">
            <div class="border-box border-box-before col hide-on-med-and-down m8 offset-m2 l6 offset-l3 blemil-pink">
                <div class="param">
                    <span><?php the_title(); ?></span>
                </div>
            </div>
            <div class="border-box col s12 hide-on-large-only blemil-pink">
                <div class="param">
                    <span><?php the_title(); ?></span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="content text-justify column-text column-3">


                <?php the_content(); ?>

        </div>

        <?php endif; ?>
    </main>

    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/global/bottom.png" class="full-width responsive-img"/>
<?php
get_footer();
