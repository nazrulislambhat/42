"use strict";
(function ($) {
    $(document).ready(function () {
        // Smooth scrolling to anchor links
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top,
                }, 1000);
            }
        });
    });
})(jQuery);


;
