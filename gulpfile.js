var elixir = require('laravel-elixir'),
    gulp = require('gulp');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'small-bgs.css',
        'menu.css',
        'topo.css',
        'banner.css',
        'bootstrap_resets.css',
        'footer.css',
        'content.css',
        'events.css',
        'gallery.css',
        'contact.css'
    ]);
    mix.styles(['padrao.css','topo.css'], 'public/css/small.css');
    mix.scripts(['gallery.js'],'public/js/gallery.js');
    mix.scripts(['quartier-latin.js'],'public/js/quartier-latin.js');
    mix.scripts(['padrao.js'],'public/js/padrao.js');
    mix.scripts(['banner.js'],'public/js/banner.js');
});