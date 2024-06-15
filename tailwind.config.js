/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily :{
        'lato' : ['lato', 'sans-serif'],
        'lilita': ['Lilita one','cursive']
      }
    },
  },
  plugins: [],
}

