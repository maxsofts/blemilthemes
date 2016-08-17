<!-- footer -->
<?php global $maxthemes; ?>

<?php $currentLang = qtranxf_getLanguage(); ?>
<footer class="page-footer blemil-primary blemil-footer opacity-09 white-text">
    <div class="container">
        <div class="row clearfix-margin">
            <div class="col s12 m6 blemil-footer-left">
                <div class="blemil-footer-top center-align">
                    <h5 class="text-center font-size-18">
                        <?php echo $currentLang == 'en' ? "Sign up to receive update information" : 'Nhận thông tin ưu đãi và giải đáp thắc mắc '; ?>
                    </h5>
                </div>
            </div>
            <div class="col s12 m6 blemil-footer-right">
                <div class="blemil-footer-email-register ">
                    <?php
                    if ($currentLang == 'en'):
                        $code = '[ef span="true" button_text="Register" ]';
                    else:
                        $code = '[ef span="true"]';
                    endif;
                    ?>
                    <?php echo do_shortcode($code); ?>

                </div>
            </div>
        </div><!--end div 1-->
        <div class="row blemil-footer-top center-align clearfix-margin">
            <div class="col s12 m6">

                <!--                <p class="text-center font-size-14 ">Sản phẩm được phân phối bởi công ty </p>-->
                <!---->
                <!--                <br/>-->
                <!---->
                <!--                <p class="text-center"><i class="logo-blemil large"></i></p>-->
            </div>
        </div><!--end div 2-->
        <div class="row">
            <div class="blemil-footer-information col s12 m6 blemil-footer-left">
                <ul>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">Hotline:</div>
                            <div class="col s10">
                                <a href="tel:<?php echo $maxthemes['basic-about-hotline'] ? str_replace(" ", ".", $maxthemes['basic-about-hotline']) : ""; ?>"
                                   class="mobile"><?php echo $maxthemes['basic-about-hotline'] ? $maxthemes['basic-about-hotline'] : ""; ?></a>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">E-mail:</div>
                            <div
                                class="col s10"><?php echo $maxthemes['basic-about-email'] ? $maxthemes['basic-about-email'] : ""; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">

                            <div class="col s2"><?php echo $currentLang == 'en' ? "Address" : 'Địa chỉ'; ?>:</div>
                            <div
                                class="col s10"><?php
                                if ($currentLang = 'en') {
                                    echo $maxthemes['basic-about-address_en'] ? $maxthemes['basic-about-address_en'] : "";
                                } else {
                                    echo $maxthemes['basic-about-address'] ? $maxthemes['basic-about-address'] : "";
                                } ?>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">Website:</div>
                            <div
                                class="col s10"><?php echo $maxthemes['basic-about-website'] ? $maxthemes['basic-about-website'] : ""; ?></div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col s12 m6 blemil-footer-right">

                <div class="blemil-footer-right-bottom row">
                    <div class="blemil-footer-right-social col s12 m8 offset-m4">
                        <ul class="nav-menu row white-text">
                            <li class="col m5 s6 first-li list-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu-footer-left', // tên location cần hiển thị
                                    'container' => 'ul', // thẻ container của menu
                                    'container_class' => '', //class của container
                                    'menu_class' => 'sub-menu', // class của menu bên trong
                                    'depth' => 1,
                                ));
                                ?>
                            </li>
                            <li class="col m7 s6 list-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu-footer-right', // tên location cần hiển thị
                                    'container' => 'ul', // thẻ container của menu
                                    'container_class' => '', //class của container
                                    'menu_class' => 'sub-menu', // class của menu bên trong
                                    'depth' => 1,
                                ));
                                ?>
                            </li>
                        </ul>
                        <div class="social nav-wrapper">
                            <ul class=" bluesecond-text">
                                <li class=" col s4 m4">
                                    <div class="white box-soical waves-effect waves-light border-radius-3"><a href="#"
                                                                                                              class="font-size-20"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></div>
                                </li>
                                <li class=" col s4 m4">
                                    <div class="white box-soical waves-effect waves-light border-radius-3"><a href="#"
                                                                                                              class=" font-size-20"><i
                                                class="fa fa-google-plus" aria-hidden="true"></i></a></div>
                                </li>
                                <li class=" col s4 m4">
                                    <div class="white box-soical waves-effect waves-light border-radius-3"><a href="#"
                                                                                                              class="font-size-20"><i
                                                class="fa fa-youtube" aria-hidden="true"></i></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end div 3-->
    </div>
    <div class="footer-copyright white-text green center-align">
        Copyright © 2016 Blemil. All right Reserved.
    </div>
    <div class="backtop waves-effect waves-light border-radius-10 white z-depth-3">
        <div class="small-backtop border-radius-10 center-align">
            <a href="#" class="bluesecond-text"><i class="fa fa-forward" aria-hidden="true"></i></a>
        </div>
    </div>
</footer><!-- End footer-->
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1143384549034929";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/57a41872b21680ea50429be0/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
