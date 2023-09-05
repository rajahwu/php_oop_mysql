/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}","../private/**/*.{html,js,php}", "./sections/**/*.{html,js,php}" ],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
}

