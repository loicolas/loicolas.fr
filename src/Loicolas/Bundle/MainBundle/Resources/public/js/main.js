(function($) {
    $(document).ready(function() {
        var $window = $(window);
        var $body   = $('body').eq(0);
        var class_menu_open = 'menu-open';
        
        
        $('#content').css('min-height', $window.height()+'px');
        
        $('#menu-opener').on('click', function(e){
            e.preventDefault();
                
            if( $body.hasClass(class_menu_open) ){
                $body.removeClass(class_menu_open);
            } else {
                $body.addClass(class_menu_open);
            }
        });
    });
})(jQuery);