let mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .version();

mix
    .js('resources/js/app.js', 'public/js')   // Mengkompilasi JavaScript
    .sass('resources/sass/app.scss', 'public/css')  // Mengkompilasi SASS ke CSS
    .sourceMaps(); // Mengaktifkan source maps (opsional)
