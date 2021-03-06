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

// app
mix.js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css');

// users
mix.js('resources/js/users.js', 'public/js')
	.sass('resources/sass/users.scss', 'public/css');

// photos
mix.js('resources/js/photos.js', 'public/js')
	.sass('resources/sass/photos.scss', 'public/css');

// posts
mix.js('resources/js/posts.js', 'public/js')
	.sass('resources/sass/posts.scss', 'public/css');

// avatars
mix.js('resources/js/avatars.js', 'public/js')
	.sass('resources/sass/avatars.scss', 'public/css');