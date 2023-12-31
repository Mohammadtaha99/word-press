
  (function ($) {

   
    $(document).ready(function () { 

        //hd Sidebar
        if ($('.hd-bar').length) {
            $('.hd-bar-opener').on('click', function () {
                $('.hd-bar').addClass('visible-sidebar');
            });
            $('.hd-bar-opener').on('focus', function () {
                $('.hd-bar').removeClass('visible-sidebar');
            });
            $('.hd-bar-closer').on('click', function () {
                $('.hd-bar').removeClass('visible-sidebar');
            });
        }

        /* hd Sidebar menu */
        /* if WooCommerce is not activated */
        if ($('body').hasClass('woocommerce-active')) {
            $(".hd-bar-wrapper .header-woo-links > li a").on("focusout", function() {
                if ($('.hd-bar').length) { 
                    $('.hd-bar').addClass('visible-sidebar');
                    $('.hd-bar-closer > button').focus();
                }
            });
        }
        else {
            $(".hd-bar-wrapper ul.navigation > li:last-child a").on("focusout", function() {
                if ($('.hd-bar').length) { 
                    $('.hd-bar').addClass('visible-sidebar');
                    $('.hd-bar-closer > button').focus();
                }
            }); 
        }

        //find woo store notice class
        const el = $('p.woocommerce-store-notice');
        const styleStr = el.attr('style');
        if (styleStr=='display: block;') { 
            $('body').addClass('has-woo-store-notice');
        }
        else {
            $('body').addClass('no-woo-store-notice');
        }

    });        

})(this.jQuery);