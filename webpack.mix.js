const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').js('resources/js/script.js', 'public/js').sass('resources/sass/app.scss', 'public/css').postCss('resources/css/style.css', 'public/css').options({
    processCssUrls: false
}).sourceMaps().version();

