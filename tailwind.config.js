const _ = require('lodash');
const theme = require('./theme.json');
const tailpress = require('@jeffreyvr/tailwindcss-tailpress');

module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt',
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        md: '1.5rem',
        lg: '1.5rem',
        xl: '2rem',
      },
    },
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme('settings.color.palette', theme)
      ),
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme('settings.typography.fontSizes', theme)
      ),
      fontFamily: {
        sans: ['Work Sans', 'sans-serif'],
      },
    },
    screens: {
      xs: '480px',
      sm: '600px',
      md: '768px',
      lg: tailpress.theme('settings.layout.contentSize', theme),
      xl: tailpress.theme('settings.layout.wideSize', theme),
      '2xl': '1440px',
    },
  },
  plugins: [
    tailpress.tailwind,
    require('tw-elements/dist/plugin'),
    require('@tailwindcss/typography'),
  ],
};
