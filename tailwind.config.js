/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            'layout' : '#F3F3F3',
            'main': '#FAAE18',
        },
        boxShadow: {
            'header': '0px 4px 4px rgba(0, 0, 0, 0.25)',
            'nav': '0px -4px 19px -3px rgba(0, 0, 0, 0.6)',
        },
    },
  },
  plugins: [],
}

