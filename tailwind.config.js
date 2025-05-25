/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/js/**/*.vue",
    ],
    corePlugins: {
        preflight: true, // aktifkan jika butuh reset bawaan
    },
    theme: {
        extend: {},
    },
    plugins: [],
};
