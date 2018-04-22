module.exports = {
    
  build: {
    css:  './wp-content/themes/t-store/',
    font: './wp-content/themes/t-store/assets/build/font/',
    img:  './wp-content/themes/t-store/assets/build/img/',
    js:   './wp-content/themes/t-store/assets/build/js/'
  },

  src: {
    php: ['./wp-content/themes/t-store/**/*.php'],
    style: {
      path:         './wp-content/themes/t-store/assets/src/style/style.scss',
      includePaths: ['./wp-content/themes/t-store/assets/src/style/*.scss']
    },
    font: './wp-content/themes/t-store/assets/src/font/*.*',
    img:  './wp-content/themes/t-store/assets/src/img/**/*.{svg,png,jpg}',
    js:   './wp-content/themes/t-store/assets/src/js/app.js'
  },

  watch: {
    php:   './wp-content/themes/t-store/**/*.php',
    style: './wp-content/themes/t-store/assets/src/style/*.scss',
    font:  './wp-content/themes/t-store/assets/src/font/*.*',
    img:   './wp-content/themes/t-store/assets/src/img/**/*.{svg,png,jpg}',
    js:    './wp-content/themes/t-store/assets/src/js/**/*.js'
  }

};