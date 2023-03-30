/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    theme: {
        extend: {
            animation: {
                'bounce-slow': 'bounce 5s linear infinite',
            },
            colors: {
                'primary': '#FFC300',
                'secondary': '#FF1818',
                'tree': '#D8D9CF',
                'four': '#EDEDED',
                'five': '#222222',
                'six': '#FCAE05',
                'seven': '#FFAC34',
                'e': '#FFFBF3',
                'f': '#4AAE26',
                'g': '#222222'
            },
            fontFamily: {
                'navbar': 'Poppins'
            },
            screens: {
                'sm': {
                    'min': '640px',
                    'max': '767px'
                },
                // => @media (min-width: 640px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }

                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }

                '2xl': '1536px',
                // => @media (min-width: 1536px) { ... }
            }
        },
    },
    plugins: [require('flowbite/plugin', 'tw-elements/dist/plugin', '@tailwindcss/aspect-ratio')],
}