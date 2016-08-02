//App init
$(document).ready(function () {
    $('.modal-trigger').leanModal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
        starting_top: '4%', // Starting top style attribute
        ending_top: '10%' //, // Ending top style attribute

    });
    $('.modal-trigger').leanModal({
        starting_top: '4%', // Starting top style attribute
        ending_top: '10%' //, // Ending top style attribute
    });
    $(".button-collapse").sideNav({
        edge: 'right'
    });
    $('select').material_select();

    $('ul.tabs').tabs();

    $('.materialboxed').materialbox();


    /**
     * Research - Định
     */
    $('.tab-content-product li').click(function () {
        var id = $(this).find('a').attr('id');
        $('.tab-content-product li').removeClass('active');
        $(this).addClass('active');
        $('.tab-body-content').removeClass('active');
        $(id).addClass('active');
    })

    /**
     * Back-top
     */
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


    /**
     * Ajax district
     */
    $('select#district').ajaxAction();

});


//Function
(function () {
    $.fn.ajaxAction = function (options) {
        var defaults = {
            action: "myaction",
            data: "object|string",
            type: "selectOptions",
            event: "onChange",
            return_id: "results"
        };

        this.change(function () {
            console.log($(this).val());
        });
    };
})(jQuery);