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


mix.styles('resources/css/shop/app.css', 'public/css/shop/app.css')
    .styles([
        'resources/css/shop/bootstrap.min.css',
        'resources/css/shop/typography.css',
        'resources/css/shop/style.css',
        'resources/css/shop/responsive.css',
    ], 'public/css/shop/vendor.css')
;


// SHOP JS
mix.scripts('resources/js/shop/app.js', 'public/js/shop/app.js'
    ).scripts([
        'resources/js/shop/jquery.min.js',
        'resources/js/shop/popper.min.js',
        'resources/js/shop/bootstrap.min.js',
        'resources/js/shop/jquery.appear.js',
        'resources/js/shop/countdown.min.js',
        'resources/js/shop/waypoints.min.js',
        'resources/js/shop/jquery.counterup.min.js',
        'resources/js/shop/wow.min.js',
        'resources/js/shop/apexcharts.js',
        'resources/js/shop/slick.min.js',
        'resources/js/shop/select2.min.js',
        'resources/js/shop/owl.carousel.min.js',
        'resources/js/shop/jquery.magnific-popup.min.js',
        'resources/js/shop/smooth-scrollbar.js',
        'resources/js/shop/lottie.js',
        'resources/js/shop/core.js',
        'resources/js/shop/charts.js',
        'resources/js/shop/animated.js',
        'resources/js/shop/kelly.js',
        'resources/js/shop/maps.js',
        'resources/js/shop/worldLow.js',
        'resources/js/shop/style-customizer.js',
        'resources/js/shop/chart-custom.js',
        'resources/js/shop/custom.js',
    ], 'public/js/shop/vendor.js');    































mix.styles('resources/css/admin/app.css', 'public/css/admin/app.css')
    .styles([
        'resources/css/admin/bootstrap.css',
        'resources/css/admin/font-awesome.css',
        'resources/css/admin/pikaday.css',
        'resources/css/admin/AdminLTE.css',
        'resources/css/admin/adminlte-skin-blue.css',
        'resources/css/admin/pnotify.css',
    ], 'public/css/admin/vendor.css')
;



// Admin font awesome fonts
mix.copyDirectory('resources/fonts', 'public/css/fonts');

// Admin JS
mix.scripts('resources/js/admin/app.js', 'public/js/admin/app.js'
    ).scripts([
        'resources/js/admin/jquery.js',
        'resources/js/admin/bootstrap.js',
        'resources/js/admin/pikaday.js',
        'resources/js/admin/adminlte.js',
        'resources/js/admin/pnotify.js',
    ], 'public/js/admin/vendor.js')
;    
if (mix.inProduction()) {
    mix.version();
}