const defaultTheme = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors')



module.exports = {
    theme: {
      fontSize: {
       'xxs': '.60rem',
       'xs': '.75rem',
       'sm': '.875rem',
       'tiny': '.875rem',
        'base': '1rem',
        'lg': '1.125rem',
        'xl': '1.25rem',
        '2xl': '1.5rem',
       '3xl': '1.875rem',
       '4xl': '2.25rem',
        '5xl': '3rem',
        '6xl': '4rem',
       '7xl': '5rem',
      },
      boxShadow: {
        sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
        DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
       '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
        inner: 'inset 0 2px 6px 8px rgba(0, 0, 0, 0.10)',
        none: 'none',
      },
        colors: {
        gray: {
          900: '#090A0B',
          850: '#090a0b',
          800: '#121516',
          700: '#171A1B',
          600: '#242A2B',
          500: '#2D3436',
          400: '#A3A3A3',
          300: '#404750',
          200: '#49515a',
          100: '#f1f1f1',
        },
      transparent: 'transparent',
      current: 'currentColor',
      red: colors.red,
      blue: colors.sky,
      yellow: colors.amber,
      white: colors.white,
        },
        extend: {
           brightness: {
             25: '.25',
             30: '.30',
             35: '.35',
             40: '.40',
             45: '.45',
           },
           blur: {
             xs: '2px',
           },
           fontFamily: {
                sans: ['DM Sans var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'], blur: ['group-hover', 'hover', 'focus'], brightness: ['group-hover', 'hover', 'focus'], display: ['group-hover'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
