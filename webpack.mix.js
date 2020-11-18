const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources/assets/shop',
        }
    }
})

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


mix.copy('resources/assets/shop/library/css', 'public/assets/shop/library/css')
mix.copy('resources/assets/shop/library/fonts', 'public/assets/shop/library/fonts')
mix.copy('resources/assets/shop/library/img', 'public/assets/shop/library/img')
mix.copy('resources/assets/shop/library/js', 'public/assets/shop/library/js')

mix.js('resources/assets/index.js', 'public/assets/index.js')
