
import {page_script} from './import_script.js';
import {gs_sessionStorage,gs_getItem} from './global.js';

'use strict';

var appHandler = function(){


    $('.nav-link').click(function(e) {
        if(!$(this).hasClass('active')){
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        }
    });

    var activeUrl = function(){
        let sessionUrl  = gs_getItem('nav-active');
        let currentUrl  = window.location.pathname;

        if(!sessionUrl || currentUrl != sessionUrl){
            currentUrl = currentUrl=='/'?'nav-home':'nav-'+currentUrl.split('/')[1];
            $('a.nav-link').each(function() {
                if ($(this).hasClass(currentUrl)) {
                     sessionUrl = currentUrl;
                }else{
                     sessionUrl = sessionUrl;
                }
            });
            gs_sessionStorage('nav-active',sessionUrl);
        }

        $('.'+sessionUrl).addClass('active');
        page_script(currentUrl.replace('nav-',''));
    }

    var companyLocation = function () {
        var map = L.map('map').setView([13.41, 122.56], 6);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([14.192064, 121.147405]).addTo(map);
    }



    return {
        init: function () {
            activeUrl();
            companyLocation();
        }
    };

}();

jQuery(document).ready(function () {
    appHandler.init();
});


