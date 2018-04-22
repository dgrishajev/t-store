var gulp          = require('gulp'),
    plumber       = require('gulp-plumber'),
    webpackStream = require('webpack-stream'),
    livereload    = require('gulp-livereload'),
    path          = require('./path');


module.exports = function () {
  gulp.src(path.src.js)
    .pipe(plumber())
    .pipe(webpackStream({
      output: {
        filename: 'app.js'
      },
      plugins: [
        new webpackStream.webpack.optimize.UglifyJsPlugin({
          minimize: true
        })
      ],
      devtool: 'source-map'
    }))
    .pipe(gulp.dest(path.build.js))
    .pipe(livereload())
    .pipe(notify({ message: 'Script task complete', onLast: true }));
};