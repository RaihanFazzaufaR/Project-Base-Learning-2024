/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            keyframes: {
                'slide': {
                    '0%' : {transform: 'translateX(200%) rotate(45deg)'},
                    '100%' : { transform: 'translateX(-150%) rotate(45deg)'},
                },
            },
            animation: {
                'infinite-slide': 'slide 5s linear infinite',
            },
        },
    },
    plugins: [],
};
