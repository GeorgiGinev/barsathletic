const mix = require('laravel-mix');

let scssOptions = {
    processCssUrls: false
}

mix.setPublicPath('./').copy('assets/images', 'public/images', false);
mix.setPublicPath('./').copy('assets/webfonts', 'public/webfonts', false);

mix.setPublicPath('./')
    .js("assets/js/app.js", "public/js/app.js")
    .sass('assets/sass/app.scss', "public/css/app.css").options(scssOptions).version();
