const mix = require("laravel-mix");
require("laravel-mix-purgecss");

mix.js("resources/js/app.js", "public/js") //bootstrap js
    .js("resources/js/script_admin.js", "public/js") // admin custom js
    .js("resources/js/script.js", "public/js") //custom js
    .sass("resources/sass/app.scss", "public/css") //boostrap css
    .postCss("resources/css/style.css", "public/css") //custom css
    .postCss("resources/css/style_admin.css", "public/css") // admin cuatom css // admin cuatom css
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .version()
    .purgeCss();
