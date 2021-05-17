const plugin = require('tailwindcss/plugin')

module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [ './src/**/*.html', './src/**/*.php' ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        sans : ['Poppins', 'sans-serif'],
        header: ['serif']
      },
    },
  },
  variants: {},
  plugins: [
    plugin(function({ addBase, theme }) {
      addBase({
        'li a': { 
          color: theme('colors.teal.800'),
          fontSize: theme('fontSize.xl'),
          },
        'h2': { 
            color: theme('colors.teal.800'),
            fontSize: theme('fontSize.2xl'),
            fontWeight: theme('fontWeight.semibold'),
          },
          'p': { 
            fontSize: theme('fontSize.sm'),
          },
      })
    })
  ],
}
