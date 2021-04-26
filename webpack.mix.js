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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);


mix.styles([
    'resources/assets/admin/css/material-dashboard.css',
    'resources/assets/admin/demo/demo.css',
], 'public/assets/admin/css/admin.css')

mix.scripts([
    'resources/assets/admin/js/core/jquery.min.js',
    'resources/assets/admin/js/core/popper.min.js',
    'resources/assets/admin/js/core/bootstrap-material-design.min.js',
    'resources/assets/admin/js/core/bootstrap-material-design.min.js',
    'resources/assets/admin/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/assets/admin/js/plugins/chartist.min.js',
    'resources/assets/admin/js/material-dashboard.js',
    'resources/assets/admin/demo/demo.js',
], 'public/assets/admin/js/admin.js')


mix.copyDirectory('resources/assets/admin/img/', 'public/assets/admin')