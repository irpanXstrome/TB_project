/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            zIndex: {
                '-1': '-1',
            },
            flexGrow: {
                '5' : '5'
            }
        },
    },
    plugins: [],
}
