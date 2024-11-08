const mix = require('laravel-mix');
mix.js(resourse/js/app.js, 'pub;ic/js')
.sass('resources/sass/app.scss', 'public/class');