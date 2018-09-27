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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/jquery-mask-plugin/dist/jquery.mask.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js'
], 'public/js/app.js');

mix.scripts([
    'resources/js/mask.js',
], 'public/js/register.js');

