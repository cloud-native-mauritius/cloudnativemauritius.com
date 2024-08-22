/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
      extend: {
        fontFamily: {
        'sans': ['Poppins', ...defaultTheme.fontFamily.sans],
      },
    },
  },
    plugins: [
      require('@tailwindcss/typography')
  ],
}
