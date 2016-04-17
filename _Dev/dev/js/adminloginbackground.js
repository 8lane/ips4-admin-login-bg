;( function($, _, undefined){
    "use strict";

    ips.controller.register('plugins.ipsthemesAdminLoginBG', {
        initialize: function () {
            this.on( document, 'click', '[data-action="loadIMG"]', this.load );
            this.on( document, 'click', '[data-action="resetIMG"]', this.reset );
        },

        load: function (e) {
        	var imgURL = $(e.currentTarget).data('url'),
                cookie = ips.utils.cookie.get('ipsthemesAdminLoginBG');
            if (typeof cookie !== 'undefined') {
                $('body').attr('data-bg-img',imgURL).removeAttr('style');
                ips.utils.cookie.set('ipsthemesAdminLoginBG', imgURL);
            } else {
                $('body').css('background','url('+imgURL+')');
                ips.utils.cookie.set('ipsthemesAdminLoginBG', imgURL);
            }
        },

        reset: function (e) {
            e.preventDefault();
            ips.utils.cookie.unset('ipsthemesAdminLoginBG');
            location.reload();
        }
    });

}(jQuery, _));  