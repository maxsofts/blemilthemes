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
});


//Function
(function () {

})(jQuery);