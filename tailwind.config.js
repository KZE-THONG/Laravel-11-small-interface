/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      color: {
        'black': '#060606'
      },
      fontFamily: {
        'Hanken-Grotesk': ['Hanken Grotesk', 'sans-serif']
      },
      fontSize: {
        '2xs': '.625rem'
      }
    },
  },
  plugins: [],
}

