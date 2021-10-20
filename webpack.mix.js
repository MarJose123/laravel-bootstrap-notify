const mix = require('laravel-mix');
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

mix.js('resources/js/app.js', 'resources/dist/js')
    .js('resources/js/notify.js', 'resources/dist/js')
    .sass('resources/sass/app.scss', 'resources/dist/css')
    .copy('fonts', 'resources/dist/fonts/');

if (mix.inProduction()) {
    mix.version();
}