/**
 * Created by Admin on 7/30/2016.
 */
//tabs
$(document).ready(function(){
    $('.tab-content-product li').click(function(){
        var id=$(this).find('a').attr('id');
        $('.tab-content-product li').removeClass('active');
        $(this).addClass('active');
        $('.tab-body-content').removeClass('active');
        $(id).addClass('active');
    })
})
//back to top
$(document).ready(function(){
    $(".backtop").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.backtop').fadeIn();
            } else {
                $('.backtop').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('.backtop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});