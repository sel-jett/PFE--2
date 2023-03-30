/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {
      spacing: {
        '112': '35rem',
        '115': '50rem',
        '120': '70rem'
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}