(function($) {
    $(document).ready(function() {
        var $window = $(window);
        $('#content').css('min-height', $window.height()+'px');
    });
})(jQuery);