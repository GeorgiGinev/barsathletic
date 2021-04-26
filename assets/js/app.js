window.Popper = require('popper.js').default;
require('popper.js');
require('bootstrap/dist/js/bootstrap');
require('jquery');
require('sharer.js/sharer');
require('es6-promise').polyfill();
var $ = require('jquery');
import jquery from 'jquery';
global.jQuery = jquery;
global.$ = jquery;
global.jquery = jquery;

import {lazyLoadingInit} from "./lazy_loading";


// Append video on index
$(document).ready(function() {
    if($('.index_welcome').length > 0) {
        setTimeout(function() {
            var container = $('body').first();
            var videoContainer = $('<div />', {
                class: 'video'
            });

            var video = $('<video autoplay muted loop/>');
            if($(window).height() <= $(window).width()) {
                video.css({'width': '100%', 'height': 'auto'});
            } else {
                video.css({'width': 'unset', 'height': '100%'});
            }

            var source = $('<source />', {
                src: homeVideoUrl,
                type: 'video/mp4',
            });

            source.appendTo(video);
            video.appendTo(videoContainer);
            videoContainer.appendTo(container);
        }, 100);
    }
});

// Navigation
$(document).ready(function() {
    $('#headerNavigation').on('show.bs.collapse', function () {
        $(this).fadeIn('slow', function() {
            $(this).addClass('show');
        });

        $(this).prev().addClass('is-active');
    });

    $('#headerNavigation').on('hide.bs.collapse', function () {
        $(this).fadeOut('slow', function() {
            $(this).removeClass('show');
        });
        $(this).prev().removeClass('is-active')
    });

    $(window).scroll(function() {
        if($('#wpadminbar').length) {
            if($(window).scrollTop() >= $('#wpadminbar').height() && !$('#headerNav').hasClass('scroll')) {
                $('#headerNav').addClass('scroll');
                return;
            }

            if($(window).scrollTop() < $('#wpadminbar').height() && $('#headerNav').hasClass('scroll')) {
                $('#headerNav').removeClass('scroll')
            }

            return;
        }

        if($(window).scrollTop() >= 1 && !$('#headerNav').hasClass('scroll')) {
            $('#headerNav').addClass('scroll');

            return;
        }

        if($(window).scrollTop() < 1 && $('#headerNav').hasClass('scroll')) {
            $('#headerNav').removeClass('scroll')
        }
    });
});

// Lazy loading
$(document).ready(function() {
    lazyLoadingInit();
})