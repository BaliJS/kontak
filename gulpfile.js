const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(mix => {
    mix
    .copy('node_modules/hack/dist/hack.css', 'resources/assets/css/hack.css')
    .copy('node_modules/hack/dist/standard.css', 'resources/assets/css/standard.css')
    .styles([
        'hack.css',
        'standard.css',
        'custom.css'
    ])
    .webpack('app.js');
});
