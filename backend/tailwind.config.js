/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        putihsusu : "#FFFAF0",
        darkblue: "#25316D",
        ijo: "#418C60",
        ijogelap: "#5A9298",
        ijoterang: "#66A399",
        gelap: "#0B2027",
        terang: "#8CBAB4",
        primer: "#FFFAF0",
        terang: "#8CBAB4",
      },
      fontFamily: {
        inter: ["Inter"],
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
}
