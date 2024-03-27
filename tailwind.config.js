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
            },
            animation: {
                "infinite-slide": "slide 5s linear infinite",
                gradient: "gradient 7s linear infinite",
                rain: "rain 3s ease-out infinite",
                fadeIn: "fadeIn 0.5s ease-in-out",
                fadeOut: "fadeOut 5s ease-in-out",
            },
        },
    },
    plugins: [],
};
