window.Popper = require('popper.js').default;
require('popper.js');
require('bootstrap/dist/js/bootstrap');
require('jquery');
require('es6-promise').polyfill();
var $ = require('jquery');
import jquery from 'jquery';
global.jQuery = jquery;
global.$ = jquery;
global.jquery = jquery;

// Append video on index
$(document).ready(function() {
    if($('.index_welcome').length > 0) {
        setTimeout(function() {
            var container = $('body').first();
            var videoContainer = $('<div />', {
                class: 'video'
            });
            var video = $('<video autoplay muted loop/>');

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
        $(this).prev().addClass('is-active');
    });

    $('#headerNavigation').on('hide.bs.collapse', function () {
        $(this).prev().removeClass('is-active')
    });

    $(window).scroll(function() {
        if($('#wpadminbar')) {
            if($(window).scrollTop() >= $('#wpadminbar').height() && !$('#headerNav').hasClass('scroll')) {
                $('#headerNav').addClass('scroll');
                return;
            }

            if($(window).scrollTop() < $('#wpadminbar').height() && $('#headerNav').hasClass('scroll')) {
                $('#headerNav').removeClass('scroll')
            }

            return;
        }

        if(!$('#headerNav').hasClass('scroll')) {
            $('#headerNav').addClass('scroll');
            return;
        }

        if($('#headerNav').hasClass('scroll')) {
            $('#headerNav').removeClass('scroll')
        }
    });
});