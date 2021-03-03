window.Popper = require('popper.js').default;
require('popper.js');
require('jquery');
require('es6-promise').polyfill();
var $ = require('jquery');
import jquery from 'jquery';
global.jQuery = jquery;
global.$ = jquery;
global.jquery = jquery;

$(document).ready(function() {

    if($('body').find('.index_welcome').first()) {
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