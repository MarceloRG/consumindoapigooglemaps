let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

front = "public/front/";
mix.styles([
    front + "plugins/bootstrap/css/bootstrap.min.css",
    front + "css/style.css"
], 'public/css/app.css');
mix.scripts([
    front + 'js/jquery-3.2.1.min.js',
    front + 'js/popper.min.js',
    front + 'js/tether.min.js',
    front + 'plugins/bootstrap/js/bootstrap.min.js',
    front + 'js/main.js'
], 'public/js/app.js');
