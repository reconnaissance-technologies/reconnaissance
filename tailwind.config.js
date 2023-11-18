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
                sans: ['Lato', 'sans-serif'],
                display: ['Lato', 'sans-serif'],
                body: ['Lato', 'sans-serif']
            },
            boxShadow: {
                sm: '0 1px 2px 0 rgb(0 0 0 / 0.05)',
                DEFAULT: '0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)',
                md: '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
                lg: '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)',
                xl: '0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)',
                '2xl': '0 25px 50px -12px rgb(0 0 0 / 0.25)',
                'round': '8px 10px 10px 8px rgb(0 0 0 / 0.1), 8 8px 10px -6px rgb(0 0 0 / 0.1)',
                inner: 'inset 0 2px 4px 0 rgb(0 0 0 / 0.05)',
                none: 'none',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
