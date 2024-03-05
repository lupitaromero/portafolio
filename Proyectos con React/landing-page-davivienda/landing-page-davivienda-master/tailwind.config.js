/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        'davi-Red': '#F21D2F',
        'davi-Blue': '#048ABF',
        'davi-Yellow': '#F2CE1B',
        'davi-Orange': '#F2811D',
        'davi-Grey': '#F2F2F2',
        500: '#64748b',
        'davi-Red-200': '#ED2D3D',
      }
    },
  },
  plugins: [],
}
