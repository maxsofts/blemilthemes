<!--Research-->
<?php $currentLang = qtranxf_getLanguage();?>
<?php global $maxthemes; ?>
<section class="research">
    <fieldset class="fieldset fieldset-width-box blemil-green">
        <legend class="row">
            <div class="border-box border-box-logo blemil-green">
                <div class="param">
                    <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?> <i class="logo-blemil"></i>
                </div>
            </div>
        </legend>
    </fieldset>
    <div class="clearfix"></div>
    <div class="content shadow-box container">
        <div class="hide-on-med-and-down">
            <!-- product Desktop -->
            <div class="research-trapezoid center row">
                <div class="col m4">
                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/01.png"
                         class="blemil-product" alt="">
                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/egg.png"
                         class="chicken set-right animated swing-bottom infinite infinite-delay-19"
                         alt="">

                    <div class="center row solid">
                        <div class="solid-width-arrow col s12 offset-m3 m6 offset-l4 l4">
                        </div>
                    </div>
                    <div class="logo">
                        <i class="logo-blemil large"></i><span>1</span>
                    </div>
                    <div class="readmore">

                        <a class="btn-readmore blemil-gray darken-1" href="<?php echo get_permalink($maxthemes['home-research-product-1']); ?>">
                            <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?>

                        </a>
                    </div>
                </div>
                <div class="col m4">
                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/02.png"
                         class="blemil-product" alt="">
                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/chicken-02.png"
                         class="chicken set-left animated swing-bottom infinite infinite-delay-19"
                         alt="">

                    <div class="center row solid">
                        <div class="solid-width-arrow col s12 offset-m3 m6 offset-l4 l4">
                        </div>
                    </div>
                    <div class="logo">
                        <i class="logo-blemil large"></i><span>2</span>
                    </div>
                    <div class="readmore">

                        <a class="btn-readmore blemil-gray darken-1" href="<?php echo get_permalink($maxthemes['home-research-product-2']); ?>">
                            <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?>

                        </a>
                    </div>
                </div>
                <div class="col m4">
                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/03.png"
                         class="blemil-product" alt="">
                    <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/chicken-02.png"
                         class="chicken set-left animated swing-bottom infinite infinite-delay-19"
                         alt="">

                    <div class="center row solid">
                        <div class="solid-width-arrow col s12 offset-m3 m6 offset-l4 l4">
                        </div>
                    </div>
                    <div class="logo">
                        <i class="logo-blemil large"></i><span>3</span>
                    </div>
                    <div class="readmore">

                        <a class="btn-readmore blemil-gray darken-1" href="<?php echo get_permalink($maxthemes['home-research-product-3']); ?>">
                            <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?>
                        </a>
                    </div>
                </div>
            </div><!-- End products desktop-->
        </div>
        <div class="hide-on-large-only">
            <div class="research-trapezoid-mobile center">
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/01.png"
                     class="blemil-product" alt="">

                <div class="logo">
                    <i class="logo-blemil"></i><span>1</span>
                </div>
                <div class="readmore">

                    <a class="btn-readmore blemil-gray darken-1" href="<?php echo get_permalink($maxthemes['home-research-product-1']); ?>">
                        <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?>
                    </a>
                </div>
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/trapezoid.png" alt=""
                     class="responsive-img"/>
            </div>
            <div class="research-trapezoid-mobile center">
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/02.png"
                     class="blemil-product" alt="">

                <div class="logo">
                    <i class="logo-blemil"></i><span>2</span>
                </div>
                <div class="readmore">
                    <a class="btn-readmore blemil-gray darken-1" href="<?php echo get_permalink($maxthemes['home-research-product-2']); ?>">
                        <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?>

                    </a>
                </div>
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/trapezoid.png" alt=""
                     class="responsive-img"/>
            </div>
            <div class="research-trapezoid-mobile center">
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/03.png"
                     class="blemil-product" alt="">

                <div class="logo">
                    <i class="logo-blemil"></i><span>3</span>
                </div>
                <div class="readmore">
                    <a class="btn-readmore blemil-gray darken-1" href="<?php echo get_permalink($maxthemes['home-research-product-3']); ?>">
                        <?php echo $currentLang == 'en' ? "Research": 'Tìm hiểu'; ?>
                    </a>
                </div>
                <img src="<?php echo MAXTHEMES_URI_ASSET; ?>blemil/images/main-home/trapezoid.png" alt=""
                     class="responsive-img"/>
            </div>
        </div>
    </div>
    <fieldset class="fieldset fieldset-width-box blemil-green">
    </fieldset>
</section><!-- End Research -->