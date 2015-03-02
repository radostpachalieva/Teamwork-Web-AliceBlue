/*global $ */
/*global window */
$(window).load(function () { "use strict";
        $('.nav-button').on('click', function (e) {
        e.preventDefault();
        $('#main-nav').toggleClass('active');
        $('.nav-button').toggleClass('active');
    });
});





