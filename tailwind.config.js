import defaultTheme from 'tailwindcss/defaultTheme';
/** @type {import('tailwindcss').Config} */
// const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './source/**/*.blade.php', // Tambahan dari sintaks `purge`
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.jsx',
        './resources/**/*.svg',
        './resources/**/*.png',
        './resources/**/*.jpg',
        './resources/**/*.jpeg',
        './resources/**/*.css',
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', 'InterVariable', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto'], // Tambahan dari sintaks Anda
            },
        },
    },
    variants: {}, // Tetap kosong jika tidak diperlukan
    plugins: [
        require('@tailwindcss/forms'), // Tambahkan plugin yang relevan (custom-forms sudah deprecated)
        require('preline/plugin'),
    ],
};
