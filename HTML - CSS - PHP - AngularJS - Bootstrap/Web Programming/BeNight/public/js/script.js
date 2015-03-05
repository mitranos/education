if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    window.mobile = true;
} else {
    window.mobile = false;
}
(function($) {
    $(function() {
        var sPath = window.location.pathname;
        var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
        if (sPage == '') {
            sPage = 'index.html';
        }
        if (!window.mobile) {
            var videobackground = new $.backgroundVideo($('#bgVideo'), {
                "align": "centerXY",
                "path": "video/",
                "width": 1280,
                "height": 720,
                "filename": sPage, //"preview",
                "types": ["mp4", "ogg", "webm"]
            });
        } else {
            $('#map').remove();
            //  background-image:url('../img/bgVideo.jpg');
            $('#bgVideo').css('background-image', 'url(../img/bgVideo.jpg)');
            $('#bgVideo').css('opacity', '0.4');
        }
        // Sections height & scrolling
        $(window).resize(function() {
            var sH = $(window).height();
            var sW = $(window).width();
            $('section.header-slide').css('height', (sH - $('header').outerHeight()) + 'px');
            if (sW > 767 && sH > 467) {
                $('section.page-slide').css('height', (sH - $('header').outerHeight()) + 'px');
            }
        });
        $('.control-btn').on('click', function() {
            $.scrollTo($(this).closest('section').next(), {
                axis: 'y',
                duration: 500
            });
            return false;
        });
        // Faded elements
        if (sPage === "index.html") {
            $('.header-23').animate({opacity: 0}, 0).delay(4000).animate({opacity: 1}, 1000);
            $('.header-23-sub .control-btn').animate({opacity: 0}, 0).delay(5000).animate({opacity: 1}, 1000);
        }
        $(window).resize().scroll();
    });
    $(window).load(function() {
        $('html').addClass('loaded');
        $(window).resize().scroll();
    });
})(jQuery);