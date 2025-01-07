
import {page_script} from './import_script.js';
import {gs_sessionStorage,gs_getItem} from './global.js';

'use strict';

var appHandler = function(){


    $('.menu-link').click(function(e) {
        if(!$(this).hasClass('active')){
            $('.nav-link').removeClass('menu-item-active');
            $(this).parent().addClass('menu-item-active');
        }
    });

    var activeUrl = function(){
        let sessionUrl  = gs_getItem('nav-active');
        let currentUrl  = window.location.pathname.split('/')[2];

        if(!sessionUrl || currentUrl != sessionUrl){
            $('a.menu-link').each(function() {
                if ($(this).hasClass(currentUrl)) {
                     sessionUrl = currentUrl;
                }else{
                     sessionUrl = sessionUrl;
                }
            });
            gs_sessionStorage('nav-active',sessionUrl);
        }

        $('.'+sessionUrl).parent().addClass('menu-item-active');
        page_script(currentUrl);
    }



    return {
        init: function () {
            activeUrl();
        }
    };

}();

jQuery(document).ready(function () {
    appHandler.init();
});


