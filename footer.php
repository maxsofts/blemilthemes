<!-- footer -->
<?php global $maxthemes; ?>
<footer class="page-footer blemil-primary blemil-footer opacity-09 white-text">
    <div class="container">
        <div class="row clearfix-margin">
            <div class="col s12 m6 blemil-footer-left">
                <div class="blemil-footer-top center-align">
                    <h5 class="text-center font-size-18">nhận thông tin ưu đãi và giải đáp thắc mắc</h5>
                </div>
            </div>
            <div class="col s12 m6 blemil-footer-right">
                <div class="blemil-footer-email-register ">
                    <form class="row">
                        <div class="input-field col s8">
                            <input placeholder="Nhập email" class="validate value-input" id="email" type="text">
                        </div>
                        <div class="col s4 input-field ">
                            <a class="waves-effect waves-light btn waves-block button-register">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end div 1-->
        <div class="row blemil-footer-top center-align clearfix-margin">
            <div class="col s12 m6">
                <p class="text-center font-size-14 ">Sản phẩm được phân phối bởi công ty BT Foods</p>
                <br/>

                <p class="text-center"><i class="logo-blemil large"></i></p>
            </div>
        </div><!--end div 2-->
        <div class="row">
            <div class="blemil-footer-information col s12 m6 blemil-footer-left">
                <ul>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">Hotline:</div>
                            <div class="col s10">
                                <a href="tel:<?php echo $maxthemes['basic-about-hotline']?str_replace(" ",".",$maxthemes['basic-about-hotline']):""; ?>" class="mobile"><?php echo $maxthemes['basic-about-hotline']?$maxthemes['basic-about-hotline']:""; ?></a>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">E-mail:</div>
                            <div class="col s10"><?php echo $maxthemes['basic-about-email'] ? $maxthemes['basic-about-email'] : ""; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">Địa chỉ:</div>
                            <div class="col s10"><?php echo $maxthemes['basic-about-address'] ? $maxthemes['basic-about-address'] : ""; ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row font-size-14 small-blemil-footer-information">
                            <div class="col s2">Website:</div>
                            <div class="col s10"><?php echo $maxthemes['basic-about-website'] ? $maxthemes['basic-about-website'] : ""; ?></div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col s12 m6 blemil-footer-right">

                <div class="blemil-footer-right-bottom row">
                    <div class="blemil-footer-right-social col s12 m8 offset-m4">
                        <ul class="nav-menu row white-text">
                            <li class="col m5 s6 first-li list-menu">
                                <ul class="sub-menu">
                                    <li><a href="#">Trang chủ</a></li>
                                    <li><a href="#">Về BT Foot</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </li>
                            <li class="col m7 s6 list-menu">
                                <ul class="sub-menu ">
                                    <li><a href="#">Tin tức</a></li>
                                    <li><a href="#">Khuyến mãi</a></li>
                                    <li><a href="#">Hệ thống phân phối</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="<?php echo $maxthemes['basic-social-facebook'] ? $maxthemes['basic-social-facebook'] : ""; ?>">
                                        <i class="fa fa-facebook-official white-text fa-3x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $maxthemes['basic-social-youtube'] ? $maxthemes['basic-social-youtube'] : ""; ?>">
                                        <i class="fa fa-youtube-square white-text fa-3x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $maxthemes['basic-social-google'] ? $maxthemes['basic-social-google'] : ""; ?>">
                                        <i class="fa fa-google-plus-square white-text fa-3x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end div 3-->
    </div>
    <div class="footer-copyright white-text green center-align">
        Copyright © 2016 BT Foods. All right Reserved.
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
</body>
</html>
