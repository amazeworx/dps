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
  safelist: [
    {
      pattern: /grid-cols-(1|2|3|4|5|6|7|8|9|10|11|12|none)/,
      variants: ['sm', 'md', 'lg', 'xl', '2xl'],
    },
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
        //sans: ['Work Sans', 'sans-serif'],
        //sans: ['Roboto Flex', 'sans-serif'],
      },
    },
    screens: {
      xs: '480px',
      sm: '600px',
      md: '768px',
      // lg: tailpress.theme('settings.layout.contentSize', theme),
      // xl: tailpress.theme('settings.layout.wideSize', theme),
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
    },
  },
  plugins: [
    tailpress.tailwind,
    require('tw-elements/dist/plugin'),
    require('@tailwindcss/typography'),
  ],
};
