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
        'menu.css',
        'topo.css',
        'bootstrap_resets.css',
        'footer.css'
    ]);
    mix.styles(['padrao.css'], 'public/css/small.css');
});