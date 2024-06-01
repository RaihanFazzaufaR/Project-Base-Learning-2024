/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            keyframes: {
                linspin: {
                    "100%": { transform: "rotate(360deg)" },
                },
                easespin: {
                    "12.5%": { transform: "rotate(135deg)" },
                    "25%": { transform: "rotate(270deg)" },
                    "37.5%": { transform: "rotate(405deg)" },
                    "50%": { transform: "rotate(540deg)" },
                    "62.5%": { transform: "rotate(675deg)" },
                    "75%": { transform: "rotate(810deg)" },
                    "87.5%": { transform: "rotate(945deg)" },
                    "100%": { transform: "rotate(1080deg)" },
                },
                "left-spin": {
                    "0%": { transform: "rotate(130deg)" },
                    "50%": { transform: "rotate(-5deg)" },
                    "100%": { transform: "rotate(130deg)" },
                },
                "right-spin": {
                    "0%": { transform: "rotate(-130deg)" },
                    "50%": { transform: "rotate(5deg)" },
                    "100%": { transform: "rotate(-130deg)" },
                },
                rotating: {
                    "0%, 100%": { transform: "rotate(360deg)" },
                    "50%": { transform: "rotate(0deg)" },
                },
                topbottom: {
                    "0%, 100%": { transform: "translate3d(0, -100%, 0)" },
                    "50%": { transform: "translate3d(0, 0, 0)" },
                },
                bottomtop: {
                    "0%, 100%": { transform: "translate3d(0, 0, 0)" },
                    "50%": { transform: "translate3d(0, -100%, 0)" },
                },
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 },
                },
                fadeOut: {
                    "0%": { opacity: 1 },
                    "100%": { opacity: 0 },
                },
                slide: {
                    "0%": { transform: "translateX(200%) rotate(45deg)" },
                    "100%": { transform: "translateX(-150%) rotate(45deg)" },
                },
                gradient: {
                    "100%": { backgroundPosition: "200% center" },
                },
                rain: {
                    "0%": { transform: "translateY(-10vh)" },
                    "100%": { transform: "translateY(100vh)" },
                },
                flying: {
                    "0%": { transform: "translateX(-5vw)" },
                    "25%": { transform: "translateY(-5vh)" },
                    "50%": { transform: "translateX(5vw)" },
                    "75%": { transform: "translateY(5vh)" },
                    "100%": { transform: "translateX(-5vw)" },
                },
                leftToRight: {
                    "0%": { transform: "translateX(0%)" },
                    "50%": { transform: "translateX(99%)" },
                    "100%": { transform: "translateX(0%)" },
                },
            },
            animation: {
                linspin: "linspin 1568.2353ms linear infinite",
                easespin:
                    "easespin 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both",
                "left-spin":
                    "left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both",
                "right-spin":
                    "right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both",
                "ping-once": "ping 5s cubic-bezier(0, 0, 0.2, 1)",
                rotating: "rotating 30s linear infinite",
                topbottom: "topbottom 60s infinite alternate linear",
                bottomtop: "bottomtop 60s infinite alternate linear",
                "spin-1.5": "spin 1.5s linear infinite",
                "spin-2": "spin 2s linear infinite",
                "spin-3": "spin 3s linear infinite",
                "infinite-slide": "slide 5s linear infinite",
                gradient: "gradient 7s linear infinite",
                rain: "rain 3s ease-out infinite",
                fadeIn: "fadeIn 0.5s ease-in-out",
                fadeOut: "fadeOut 5s ease-in-out",
                flying: "flying 7s linear infinite",
                leftToRight: "leftToRight 7s linear infinite",
            },
        },
    },
    plugins: [
        require('tailwind-scrollbar'),
        require('flowbite/plugin')
    ],
    variants:{
        display: ['print']
    }
};
