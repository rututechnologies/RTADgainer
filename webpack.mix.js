const { mix } = require('laravel-mix');

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

//mix.js('resources/assets/js/app.js', 'public/js')
//   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js([
    'resources/assets/js/adgainer.js',
    'resources/assets/js/adgainer/filter.js'
], 'public/js/adgainer.js').sourceMaps();

mix.sass('resources/assets/sass/adgainer.scss', 'public/css').sourceMaps();

mix.browserSync('localhost:8100');