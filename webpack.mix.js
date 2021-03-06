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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/default.css',
    'resources/assets/css/fonts.css',
    'resources/assets/css/custom.css',
], 'public/css/additional.css');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/spectrum.css',
    'resources/assets/css/custom_admin.css'
], 'public/css/additional_admin.css');
