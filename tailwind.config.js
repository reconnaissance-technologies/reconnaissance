/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'rt-primary': '#1C4B96',
                'rt-secondary': '#02B5F1',
                'rt-white': '#FFFFFF'
            },
            fontFamily: {
                sans: ['Graphik', 'sans-serif'],
                serif: ['Merriweather', 'serif'],
            },
            // backgroundImage: {
            //   'award-leaf': 'url("/assets/img/awrd-leaf.png")',
            // }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
