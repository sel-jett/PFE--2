/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  darkMode: 'media',
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    "./node_modules/flowbite/**/*.js"
    
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
    require('flowbite/plugin'),
  ],
}