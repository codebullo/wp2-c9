

(function($) {var body = $('body'),_window = $(window);

$(document).ready(function(){
    var nav = $('#site-navigation')
    var button = $('.menu-toggle');
    $(".entry-content").click(function(){
        console.log("Se ha detectado un click" + button);
        nav.removeClass("toggled-on");

    });
});





})(jQuery);

