const mix = require('laravel-mix');
const VitePlugin = require('laravel-mix-vite');
mix.extend('vite', new VitePlugin());
mix
    .js('resources/js/app.js', 'public/assets')
    .postCss('resources/css/app.css', 'public/assets', [])
    .vite();
if (mix.inProduction()) {
    mix.version();
}