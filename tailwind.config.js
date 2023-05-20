// tailwind.config.js
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    theme: {
      extend: {

            fontFamily: {
             'sans': ['ui-sans-serif', 'system-ui'],
             'serif': ['ui-serif', 'Georgia'],
             'mono': ['ui-monospace', 'SFMono-Regular'],
            //  'display': ['Oswald', ...],
            //  'body': ['"Open Sans"', ...],
            }
      },
    },
    plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
