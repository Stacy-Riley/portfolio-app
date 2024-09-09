/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ './**/*.{html,js}'],
  theme: {
    screens:{
      'large': {'max': '1600px'},
      'middle': {'max': '1040px'},
      'small': {'max': '768px'},
    },
    fontFamily: {
      syne: ['Syne', "sans-serif"],
      archivo: ['Archivo Black', "sans-serif"],
    },
    extend: {},
  },
  plugins: [],
}

