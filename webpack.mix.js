const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js') 
.sass('resources/sass/test.scss', 'public/css')
.options({
      processCssUrls: false
   })
.sass('resources/sass/show.scss', 'public/css')
.sass('resources/sass/all.scss', 'public/css')
.sass('resources/sass/project.scss', 'public/css')
.sass('resources/sass/donate.scss', 'public/css')
.sass('resources/sass/thanks.scss', 'public/css')
.sass('resources/sass/donatepost.scss', 'public/css')
.sass('resources/sass/app.scss', 'public/css');


// .styles(['public/css/_kiran-bit.css'],);



 