/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        hijaumuda: "#94EC08",
        hijautua: "#98E51E",
        kuning: "#F4C447",
        darkblue: "#25316D",
        biru: "#24DCF2",
        ijo: "#71A72D",
        gelap: "#0B2027",
        terang: "#8CBAB4",
      },
      fontFamily: {
        caveat: ["Caveat Brush"],
        fuzzy: ["Fuzzy Bubbles"],
        poppins: ["Poppins"],
        peralta: ["Peralta"],
        inter: ["Inter"],
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
}
