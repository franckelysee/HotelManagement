/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
    plugins: [
      require('flowbite/plugin')
  ],
}

