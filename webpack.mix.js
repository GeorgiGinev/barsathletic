const mix = require('laravel-mix');

let scssOptions = {
    processCssUrls: false
}

mix.setPublicPath('./')
    .js("assets/js/app.js", "public/js/app.js")
    .sass('assets/scss/app.scss', "public/css/app.css").options(scssOptions).version();