/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors : {
        "primary" : "#22262C",
      },
      spacing : {
        "bubble" : "900px",
        "special" : "650px",
        "popular_width" : "300px",
        "popular_height" : "500px",
        "text" : "500px",
        "product" : "600px",
        "BMW" : "1100px",
        "lexus" : "1400px",
        "royce" : "1800px",
      },
      scale : {
        "popular" : "4.1",
      },
    },
  },
  plugins: [],
}

