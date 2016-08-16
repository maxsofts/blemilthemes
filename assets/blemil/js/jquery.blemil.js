//App init
$(document).ready(function () {
    $('li.lang-en span').text('EN');
    $('li.lang-vi span').text('VI');
   $('.modal-trigger').leanModal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
        starting_top: '4%', // Starting top style attribute
        ending_top: '10%' //, // Ending top style attribute

    });
    /*
    $('.modal-trigger').leanModal({
        starting_top: '4%', // Starting top style attribute
        ending_top: '10%' //, // Ending top style attribute
    });
    */
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
    //
    //$("img").lazyload({
    //    effect: "fadeIn"
    //});

    /** youtube **/
    $(function () {
        var videos = $(".video");

        videos.on("click", function () {
            var elm = $(this),
                conts = elm.contents(),
                le = conts.length,
                ifr = null;

            for (var i = 0; i < le; i++) {
                console.log(conts[i].nodeType);
                if (conts[i].nodeType == 8)
                    ifr = conts[i].textContent;
            }
            elm.addClass("player").html(ifr);
            elm.off("click");
        });
    });

    /**
     * Ajax district
     */
    $('select#district').ajaxAction({
        'action': 'get_province',
        'event': 'change',
        'return_id': 'province',
        'type': "selectOptions"
    });

    $('select#district').ajaxAction({
        'action': 'get_html_locations',
        'event': 'change',
        'return_id': 'locations_list',
        'type': "renderLocations"
    });

    $('select#province').ajaxAction({
        'action': 'get_html_locations',
        'event': 'change',
        'return_id': 'locations_list',
        'type': "renderLocations"
    });

    if($('#checklink').length){
        $('#checklink').openModal();
    }
});


//Function
(function () {

    $.fn.ajaxAction = function (options) {
        var defaults = {
            action: "myaction",
            data: "object|string",
            type: "selectOptions",
            event: "change", //Change - click - doubleclick v.v...
            return_id: ""
        };

        options = $.extend(defaults, options);

        this.on(options.event, function () {
            var key = $(this).val();
            if (key != 0) {
                $.ajax({
                    type: 'POST',
                    data: {
                        'action': options.action,
                        'data': key
                    },
                    url: ajaxurl,
                    success: function (results) {
                        switch (options.type) {
                            case 'selectOptions':
                                $.fn.selectOptions(options, results);
                                break;
                            case 'renderLocations':
                                $.fn.renderLocations(options, results);
                                break;
                            default:
                                break;
                        }
                    },
                    error: function () {

                    }
                });
            }
        });
    };

    $.fn.selectOptions = function (options, data) {
        if (options.return_id != '') {
            var obj = JSON.parse(data);

            $("select#" + options.return_id + " option").remove();

            $.each(obj, function (i, item) {
                $("select#" + options.return_id).append("<option value=" + i + ">" + item + "</option>");
            });

            $("select#" + options.return_id).material_select();
        }
    };


    $.fn.renderLocations = function (options, data) {
        if (options.return_id != '') {
            $("#" + options.return_id).empty();

            $("#" + options.return_id).append(data);
        }
    };
})(jQuery);