/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
	  colors: {
		  'mint': '#D6FFF6',
		  'violet': '#231651',
		  'turquoise': '#4DCCBD',
		  'blue': '#2374AB',
		  'red': '#FF8484',
	  },
	  fontFamily: {
		  'sans': ['Roboto', 'sans-serif'],
		  'caveat': ['Caveat', 'cursive'],
		  'caveatbrush': ['Caveat Brush', 'cursive'],
	  },
    extend: {},
  },
  plugins: [],
}

